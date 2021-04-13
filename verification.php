<?php
session_start();
$user_id = $_GET['id'];
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
    <!-- <script src="js/navbar.js"></script> -->
</head>

<body>
    <div id="flex-alert">
        <div id="alert-box">
            <?php if ($status === "success") {?>
            <img src="assets/success.svg" alt="success">
            <p>Ваш <span>email адресс</span> подтвержден !</p>
            <p class="comment">Регистрация завершена.</p>
            <a href="signin.php"><button>Войти</button></a>

            <?php } else if ($status === "please_verify") {?>
            <img src="assets/error.svg" alt="error">
            <p><span>Ошибка верификации.</p>
            <p class="comment">Ваша учетная запись не активна? подтвердите регистрацию через ссылку в письме</p>
            <a href="back/mail_verify.php?id=<?=$user_id?>"><button>Выслать ссылку повторно</button></a>

            <?php } else {?>
            <img src="assets/error.svg" alt="error">
            <p><span>Ссылка недействительна</p>
            <p class="comment">Ваша ссылка не действительна? проверьте ваши данные или повторите отправку письма.</p>
            <a href="back/mail_verify.php?id=<?=$user_id?>"><button>Выслать ссылку повторно</button></a>
            <?php }?>
        </div>
    </div>
</body>

</html>