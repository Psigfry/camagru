<?php
require '../config/database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwd_confirm = $_POST['pwd_confirm'];

// верификация
if (!isset($email) || strlen($email) == 0 || strlen($email) > 64 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: /../register.php?error=invalid_email&username=" . $name);
    exit();
} else if (!isset($name) || strlen($name) == 0 || strlen($name) > 24 || !preg_match("/^[a-zA-Z]+$/", $name)) {
    header("Location: /../register.php?error=invalid_username&email=" . $email);
    exit();
} else if (!isset($pwd) || strlen($pwd) == 0 || strlen($pwd) > 64) {
    header("Location: /../register.php?error=invalid_pwd&username=" . $name . "&email=" . $email);
    exit();
} else if (!isset($pwd_confirm) || strlen($pwd_confirm) == 0 || $pwd_confirm !== $pwd) {
    header("Location: /../register.php?error=pwds_no_match&username=" . $name . "&email=" . $email);
    exit();
}

$DB_DSN .= ";dbname=" . $DB_NAME;
// подключение
try {
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

// поиск пользователя
try {
    $sql = "SELECT `name` FROM `users` WHERE `name`=?";
    $data = $pdo->prepare($sql);
    $data->execute([$name]);
    $user = $data->fetch();
} catch (PDOEXCEPTION $e) {
    exit($e);
}

if ($user !== false) {
    header("Location: /../register.php?error=user_exists");
    exit();
}

// запись
try {
    $sql = "INSERT INTO `users` (`name`, `email`, `pwd`, `hash`)
                VALUES (?, ?, ?, ?);";
    $hash = substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes(64))), 0, 64);
    $pdo->prepare($sql)->execute([$name, $email, hash_pbkdf2("sha256", $pwd, $hash, 40000), $hash]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

// присвоение уникального номера
try {
    $sql = "SELECT `id` FROM `users` WHERE `name`=?";
    $data = $pdo->prepare($sql);
    $data->execute([$name]);
    $res = $data->fetch();
    $new_id = $res['id'];
} catch (PDOEXCEPTION $e) {
    exit($e);
}

// верификация c присвоением кода
try {
    $sql = "INSERT INTO `verify` (`user_id`, `code`)
                VALUES (?, ?);";
    $code = substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes(64))), 0, 64);
    $pdo->prepare($sql)->execute([$new_id, $code]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

// notifications
try {
    $sql = "INSERT INTO `notifications` (`user_id`)
                VALUES (?);";
    $pdo->prepare($sql)->execute([$new_id]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "INSERT INTO `passwords` (`user_id`, `code`)
                VALUES (?, ?);";
    $pdo->prepare($sql)->execute([$new_id, ""]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

header("Location: mail_verify.php?id=" . $new_id);
