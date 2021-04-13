<?php
session_start();
$verify = $_GET['verify'];
$reset = $_GET['reset'];
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
</head>

<body>


    <div id="flex-alert">
        <div id="alert-box">
            <?php if ($verify === "success") {?>
            <img src="assets/success.svg" alt="success">
            <p>На <span>ваш email</span> отправлено письмо с подтверждением регистрации</p>
            <p class="comment">Что бы войти подтвердите свой адрес электронной почты</p>
            <a href="signin.php"><button>Войти</button></a>

            <?php } else if ($verify === "error") {?>
            <img src="assets/error.svg" alt="error">
            <p><span>Упс !</span> Что-то пошло не так !</p>
            <p class="comment">Ваша учетная запись либо уже активирована либо введен неверный email!</p>
            <div id="form-button">
                <a href="register.php"><button>Вернуться</button></a>
            </div>

            <?php } else if ($reset === "success") {?>
            <img src="assets/success.svg" alt="error">
            <p>На ваш емайл отправлена ссылка для смены пароля!</p>
            <p class="comment">Что бы сбросить пароль перейдите по ссылке в письме</p>
            <a href="signin.php"><button>Войти</button></a>

            <?php } else if ($reset === "error") {?>
            <img src="assets/error.svg" alt="error">
            <p><span>Упс !</span> Что-то пошло не так !</p>
            <p class="comment">Введенный емайл не найден</p>
            <div id="form-button">
                <a href="index.php"><button>Войти</button></a>
            </div>

            <?php } else {?>
            <img src="assets/error.svg" alt="error">
            <p><span>Упс !</span> Что-то пошло не так !</p>
            <p class="comment">Errоr 404.</p>
            <div id="form-button">
                <a href="index.php"><button>Войти</button></a>
            </div>

            <?php }?>
        </div>
    </div>

</body>

</html>