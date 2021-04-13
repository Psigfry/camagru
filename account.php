<?php
session_start();
if (!isset($_SESSION['logged_on_user'])) {
    header("Location: /signin.php");
    exit();
}

$error = $_GET['error'];
$img_error = $_GET['img_error'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/form.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/account.css" />
</head>

<body>

    <?php require 'navbar.php';?>

    <div id="account">
        <div id="account-pic" style="background-image: url('/resources/profile-pics/<?=$_SESSION['logged_on_user']['pic']?>');"></div>
        <p id="account-user"><?php echo $_SESSION['logged_on_user']['login']; ?></p>

        <div id="flex-form">

            <div id="form-box">
                <p><span>Информация</span></p>
                <form action="back/update.php" method="post">
                    <input required minlength="1" maxlength="64" type="email" name="email" <?php if ($error === "invalid_email") {?> class="invalid" placeholder="Некорректный емайл" <?php } else {?> value="<?=$_SESSION['logged_on_user']['email']?>" placeholder="Изменить емайл" <?php }?>><br>
                    <input required pattern="^[a-zA-Z]{1,24}$" minlength="1" maxlength="24" type="text" name="name" <?php if ($error === "user_exists") {?> class="invalid" placeholder="Пользователь не найден" <?php } else if ($error === "invalid_username") {?> class="invalid" placeholder="Неверное имя" <?php } else {?> value="<?=$_SESSION['logged_on_user']['login']?>" placeholder="Изменить имя пользователя"><?php }?><br>
                    <p><span>Уведомления</span></p>
                    <input <?php if ($_SESSION['logged_on_user']['notif_comments']) {echo "checked";}?> type="checkbox" class="checkbox" name="notif_comments" value="true"><span class="checktext">Комментарии</span><br>
                    <button type="submit" name="update-submit" value="ok" style="margin-bottom: 6px;">Изменить</button>
                </form>
                <p><span>Фото профиля</span></p>
                <form action="back/upload_pp.php" method="post" enctype="multipart/form-data">
                    <div id="form-upload">
                        <button <?php if ($img_error) {?> class="invalid" <?php }?>><?php if ($img_error === "too_large") {?>Размер > 5MB<?php } else if ($img_error === "wrong_format") {?>JPG, PNG или GIF<?php } else if ($img_error === "upload_fail") {?>Ошибка<?php } else {?>Выбрать фотографию<?php }?></button>
                        <input required type="file" accept="image/*" name="pic">
                    </div>
                    <button type="submit" name="submit-upload" value="ok" style="margin-top: 10px;">Загрузить</button>
                </form>
            </div>

            <div id="form-box">
                <p><span>Смена пароля</span></p>
                <form action="back/password.php" method="post">
                    <input required type="password" name="old-passwd" <?php if ($error === "old_pwd") {?> class="invalid" placeholder="Неверный пароль" <?php } else {?> placeholder="Ваш старый пароль" <?php }?>><br>
                    <input required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,64}$" minlength="8" maxlength="64" type="password" name="new-passwd" <?php if ($error === "invalid_pwd") {?> class="invalid validation" placeholder="Некорректный пароль" <?php } else if ($error === "weak_pwd") {?> class="invalid validation" placeholder="Слабый пароль" <?php } else if ($error === "pwds_no_match") {?> class="invalid validation" placeholder="Пароли не совпадают" <?php } else {?> class="validation" placeholder="Ваш новый пароль" <?php }?>><br>
                    <input required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,64}$" minlength="8" maxlength="64" type="password" name="repeat-passwd" <?php if ($error === "pwds_no_match") {?> class="invalid validation" placeholder="Некорректный пароль" <?php } else {?> class="validation" placeholder="Повторите пароль" <?php }?>><br>
                    <button type="submit" name="password-submit" value="ok" style="margin-bottom: 6px;">Изменить</button>
                </form>
                <p><span>Удалить аккаунт</span></p>
                <a href="back/delete.php"><button class="delete" style="margin-top: 0;">Удалить безвозвратно</button></a>
            </div>

        </div>
    </div>

</body>

</html>