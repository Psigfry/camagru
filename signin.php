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
    <script src="js/navbar.js"></script>
</head>

<body>

<div id='flex-form'>
    <div id='photo-form'>
        <img src='assets/apple.png' width="730" height="731" title='mobile' alt='mobile'>
    </div>
    <div>
    <div id='form-box'>
        <p id='logo'>Instagram</p>
        <form action="back/login.php?redirect=<?= $_GET['redirect']?>" method="post">
            <input required type='text' name='login' <?php if($error === 'wrong_user') {?> class='invalid' placeholder='Нет пользователя с таким именем' <?php } else {?> class='validation' placeholder='Введите имя' <?php } ?>>
            <input required type='password' name='passwd' <?php if($error === 'wrong_user') {?> class='invalid' placeholder='Неправильный пароль' <?php } else {?> class='validation' placeholder='Введите пароль' <?php } ?>>
            <div id='form-button'>
                <button type="submit" name="signup-submit" value="ok">Войти</button><br>
                <a href='forgot-pwd.php' name='form-forgot'>Забыл пароль?</a><br>
                <br>
            </div>
            </form>
            
            </div>
            <div id='form-box-signin'>
                <p>Еще нет аккаунта? <a href='register.php'>Регистрация</a></p>
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