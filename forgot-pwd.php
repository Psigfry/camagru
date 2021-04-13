<?php
session_start();
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
</head>

<body>


    <div id="flex-form">
        <div id="form-box">
            <p style="margin-bottom: 15px;"><span>Забыл</span> пароль?</p>
            <form action="back/forgot_pwd.php" method="post">
                <input required type="email" name="email" placeholder="Введите емайл"><br>
                <div id="form-button">
                    <button type="submit" name="forgotpwd-submit" value="ok">Восстановить</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>