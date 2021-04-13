<?php
session_start();
$status = $_GET['req'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/alert.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/form.css" />
    <script src="js/navbar.js"></script>
</head>

<body>

    <?php require 'navbar.php';?>

    <div id="flex-alert">
        <div id="alert-box">
            <?php if ($status === "success") {?>
            <img src="assets/success.svg" alt="success">
            <p>Ваш пароль успешно изменен!</p>
            <p class="comment">Ваш пароль изменен, вы можете войти используя новый пароль.</p>
            <a href="signin.php"><button>Войти</button></a>

            <?php } else {?>
            <img src="assets/error.svg" alt="error">
            <p><span>Упс !</span> Что-то пошло не так !</p>
            <p class="comment">Что-то пошло не так.</p>
            <div id="form-button">
                <a href="index.php"><button>Войти</button></a>
            </div>
            <?php }?>
        </div>
    </div>

</body>

</html>