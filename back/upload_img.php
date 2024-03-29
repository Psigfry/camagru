<?php
require '../config/database.php';

session_start();
if (!isset($_SESSION['logged_on_user'])) {
    header("Location: ../signin.php");
}

$legend = trim(preg_replace("/\s+/", " ", $_POST['legend']));
$input_img = $_POST['img'];
$input_sticker = $_POST['sticker'];
$xpos = intval($_POST['xpos']);
$ypos = intval($_POST['ypos']);
$width = intval($_POST['width']);

if (!isset($legend) || $legend == "" || strlen($legend) > 140) {
    exit("Комментарий отсутствует");
} else if (!isset($input_img) || $input_img == "" || strpos($input_img, "data:image/png;base64,") !== 0) {
    exit("Фото отсутствует");
} else if (!isset($xpos) || !isset($ypos) || !isset($width)
    || $xpos < -100 || $xpos > 200 || $ypos < -100 || $ypos > 200
    || $width <= 0 || $width > 100) {
    exit("Неверный размер");
}

/////////////////////////////////////////  PROCESSING THE IMAGE  /////////////////////////////////////////

$img_content = base64_decode(str_replace(" ", "+", str_replace("data:image/png;base64,", "", $input_img)));

// Создание прозрачного холста
function imagecreate_transparent($w, $h)
{
    $png = imagecreatetruecolor($w, $h);
    imagesavealpha($png, true);
    $trans_colour = imagecolorallocatealpha($png, 0, 0, 0, 127);
    imagefill($png, 0, 0, $trans_colour);
    return $png;
}

// Создание ресурса
$SIZE = 1000;
$output = imagecreatetruecolor($SIZE, $SIZE);
$image = imagecreate_transparent($SIZE, $SIZE);
$sticker = imagecreate_transparent($SIZE, $SIZE);
$old_image = imagecreatefromstring($img_content);
$old_sticker = imagecreatefrompng($input_sticker);

// Ресайз стикера
imagecopyresampled($image, $old_image, 0, 0, 0, 0, $SIZE, $SIZE, imagesx($old_image), imagesy($old_image));
$new_width = $SIZE * $width / 100;
$new_height = ($SIZE * $width / 100) * (imagesy($old_sticker) / imagesx($old_sticker));
imagecopyresampled($sticker, $old_sticker, 0, 0, 0, 0, $new_width, $new_height, imagesx($old_sticker), imagesy($old_sticker));

// Наложение с прозрачностью
function imagecopymerge_alpha($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
{
    $cut = imagecreatetruecolor($src_w, $src_h);
    imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);
    imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $src_w, $src_h);
    imagecopymerge($dst_im, $cut, $dst_x, $dst_y, 0, 0, $src_w, $src_h, $pct);
}

// Слияние стикера
imagecopymerge($output, $image, 0, 0, 0, 0, $SIZE, $SIZE, 100);
$new_xpos = $xpos * $SIZE / 100 - $new_width / 2;
$new_ypos = $ypos * $SIZE / 100 - $new_height / 2;
imagecopymerge_alpha($output, $sticker, $new_xpos, $new_ypos, 0, 0, $SIZE, $SIZE, 100);

// Сохранение
$file = uniqid("fp-", true) . ".jpg";
$path = "../resources/feed-pics/" . $file;
imagejpeg($output, $path);

///////////////////////////////////////// SENDING TO THE DATABASE /////////////////////////////////////////

$DB_DSN .= ";dbname=" . $DB_NAME;
try {
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

date_default_timezone_set("Europe/Moscow");
try {
    $sql = "INSERT INTO `posts` (`user_id`, `date`, `img`, `legend`)
                VALUES (?, ?, ?, ?);";
    $pdo->prepare($sql)->execute([$_SESSION['logged_on_user']['id'], date("D j, H:i"), $file, $legend]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}
