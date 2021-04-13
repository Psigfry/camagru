<?php
session_start();
if (isset($_SESSION['logged_on_user'])) {
    header("Location: account.php");
    exit();
}

$error = $_GET['error'];
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
    <!-- <script src="js/navbar.js"></script> -->
</head>

<body>

    <div id='flex-form'>
        <div id='photo-form'>
            <img src='assets/apple.png' width="730" height="731" title='mobile' alt='mobile'>
        </div>
        <div>
        <div id='form-box'>
            <p id='logo'>Instagram</p>
            <p id='logo-text'>Зарегистрируйтесь, чтобы увидеть фотографии и видео ваших друзей.</p>
            <form action="back/register.php" method="post">
                <input required minlength='4' maxlength='64' type='email' name='email' <?php if($error === 'invalid_email') {?> class='invalid validation' placeholder='Некорректный email' <?php } else {?> class='validation' placeholder='Введите email' value=<?=$_GET['email']?> <?php }?>><br>
                <input required minlength='4' maxlength='24' type='text' name='name' <?php if($error === 'invalid_username') {?> class='invalid validation' placeholder='Некорректное имя' <?php }else if($error === 'user_exist') {?> class='invalid validation' placeholder='Это имя уже занято' <?php } else {?> class='validation' placeholder='Введите имя' value=<?=$_GET['username']?> <?php }?>><br>
                <input required minlength='6' maxlength='64' type='password' name='pwd' <?php if($error === 'invalid_pwd') {?> class='invalid validation' placeholder='Некорректный пароль' <?php } else {?> class='validation' placeholder='Введите пароль' <?php }?>><br>
                <input required minlength='6' maxlength='64' type='password' name='pwd_confirm' <?php if($error === 'invalid_pwd_confirm') {?> class='invalid validation' placeholder='Пароли не совпадают' <?php } else {?> class='validation' placeholder='Повторите пароль' <?php }?>>
                <button type="submit" name="signup-submit" value="ok">Зарегистрироваться</button>
            </form>
        </div>
        <div id='form-box-signin'>
                <p>Уже есть аккаунт? <a href='signin.php'>Войти</a></p>
        </div>
        <div id='form-box-signin2'>
                <p>Установите приложение</p>
                <img src='assets/app.png'>
                <img src='assets/app2.png'>
            </div>
        </div>
        
    </div>
    
    
</body>
<footer><?php require 'footer.php';?></footer>
</html>