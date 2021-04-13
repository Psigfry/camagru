<?php
session_start();
if (!isset($_SESSION['logged_on_user'])) {
    header("Location: /signin.php?redirect=camera");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/camera.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/range.css" />

</head>

<body>

    <?php require 'navbar.php';?>

    <div id="main">
        <div id="tri-panels">
            <div id="left-panel">
                <form action="back/upload_img.php" method="post">
                    <p>Публикация фотографии</p>
                    <p class="comment">Сделай фото, добавь стикер<br>и поделись с друзьями комментарием.</p>
                    <textarea required rows="4" cols="40" maxlength="140" name="legend" placeholder="Ваш комментарий"></textarea><br>
                    <div class="counter">140</div><br>
                    <input type="hidden" name="img" class="upload-image">
                    <input type="hidden" name="sticker" class="upload-sticker">
                    <input type="hidden" name="xpos" class="upload-xpos">
                    <input type="hidden" name="ypos" class="upload-ypos">
                    <input type="hidden" name="width" class="upload-width">
                </form>
                <button disabled class="upload-submit disabled">Публикация</button>
            </div>
            <div id="center-panel">
                <div id="screenshot">
                    <video class="videostream" autoplay></video>
                    <img class="captured-img" src="">
                    <img class="sticker-img" src="">
                    <canvas style="display:none;"></canvas>
                    <div class="error">
                        <p><span>Упс!</span> Вебкамера не доступна</p>
                        <p class="comment">Если у вас нет веб камеры или ваш браузер не поддерживает getUserMedia, 
                        у вас есть возможность загрузить фотографию напрямую</p>
                    </div>
                    <div id="arrows">
                        <button class="up"><img src="assets/arrow.svg" alt="arrow"></button>
                        <div id="arrow-left-right">
                            <button class="left"><img src="assets/arrow.svg" alt="arrow"></button>
                            <button class="right"><img src="assets/arrow.svg" alt="arrow"></button>
                        </div>
                        <input type="range" min="1" max="100" step="1">
                        <button class="down"><img src="assets/arrow.svg" alt="arrow"></button>
                    </div>
                </div>
                <div id="bottom-buttons">
                    <div id="stickers-panel">
                        <div class="shadow left">
                        </div>
                        <div id="stickers-carousel">
                            <?php for ($i = 1; $i < 11; $i++) {?>
                            <img src="assets/stickers/<?="sticker-" . $i?>.png" alt="sticker" title="Stikers">
                            <?php }?>
                        </div>
                        <div class="shadow right">
                        </div>
                    </div>
                    <div id="tri-buttons">
                        <div id="screenshot-upload">
                            <button><img src="assets/picture.png" alt="picture" title="Choisir une image..."></button>
                            <input type="file" accept="image/*" name="upload-input">
                        </div>
                        <div class="screenshot-button-back">
                            <button class="screenshot-button"></button>
                        </div>
                        <button class="retake-button"><img src="assets/retake.png" alt="retake" title="Reprendre la photo"></button>
                    </div>
                </div>
            </div>
            <div id="right-panel">
                <p>Лента фотографий</p>
                <p class="comment">Тут будут все ваши опубликованные фотографии.</p>
                <div class="post-list">
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php';?>

</body>

<script async src="js/camera.js"></script>
<script src="js/user_posts.js"></script>

</html>