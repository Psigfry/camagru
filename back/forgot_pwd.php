<?php
require '../config/database.php';
require 'mail_password.php';

/*
    Востановление пароля
        Поиск пользователя
            Отправка письма send_reset_email (mail_password.php)
*/

$email = $_POST['email'];

$DB_DSN .= ";dbname=" . $DB_NAME;
try {
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "SELECT `id`, `email`, `name` FROM `users` WHERE `email`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $found_users = $stmt->fetchAll();
} catch (PDOEXCEPTION $e) {
    exit($e);
}

foreach ($found_users as $found_user) {
    try {
        $sql = "UPDATE `passwords` SET `code`=? WHERE `user_id`=?;";
        $code = substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes(64))), 0, 64);
        $pdo->prepare($sql)->execute([$code, $found_user['id']]);
        echo "code inserted.<br>";
    } catch (PDOEXCEPTION $e) {
        exit($e);
    }

    $error += send_reset_email($found_user['id'], $found_user['name'], $email, $code);
    if ($error) {
        header("Location: ../email.php?reset=error");
    } else {
        header("Location: ../email.php?reset=success");
    }
}
