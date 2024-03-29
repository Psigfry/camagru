<?php

/*
    Полное удаление профиля
*/

require '../config/database.php';

session_start();
if (!isset($_SESSION['logged_on_user'])) {
    header("Location: /../signin.php");
}

$DB_DSN .= ";dbname=" . $DB_NAME;
try {
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "DELETE FROM `users` WHERE `id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['logged_on_user']['id']]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

if ($_SESSION['logged_on_user']['pic'] !== "default.png") {
    unlink("../resources/profile-pics/" . $_SESSION['logged_on_user']['pic']);
}

try {
    $sql = "DELETE FROM `verify` WHERE `user_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['logged_on_user']['id']]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "DELETE FROM `notifications` WHERE `user_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['logged_on_user']['id']]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "DELETE FROM `passwords` WHERE `user_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['logged_on_user']['id']]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "SELECT img FROM `posts` WHERE `user_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['logged_on_user']['id']]);
    $images = $stmt->fetchAll();
} catch (PDOEXCEPTION $e) {
    exit($e);
}

if ($images !== false) {
    foreach ($images as $image) {
        if (file_exists("../resources/feed-pics/" . $image['img'])) {
            unlink("../resources/feed-pics/" . $image['img']);
        }
    }
}

try {
    $sql = "DELETE FROM posts WHERE `user_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['logged_on_user']['id']]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "DELETE FROM comments WHERE `user_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['logged_on_user']['id']]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "DELETE FROM likes WHERE `user_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['logged_on_user']['id']]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

header("Location: logout.php");
