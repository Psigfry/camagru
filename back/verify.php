<?php
require '../config/database.php';

$user_id = $_GET['id'];
$code = $_GET['code'];

if (!isset($user_id) || !isset($code)) {
    header("Location: /../verification.php?req=empty");
    exit();
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
    $sql = "SELECT `user_id`, `code` FROM `verify` WHERE `user_id`=? AND `code`=?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $code]);
    $res = $stmt->fetch();
} catch (PDOEXCEPTION $e) {
    exit($e);
}

if ($res === false) {
    header("Location: /../verification.php?id=" . $user_id . "&req=failure");
    exit();
} else {
    try {
        $sql = "UPDATE `verify` SET `verified`=true WHERE `user_id`=?;";
        $pdo->prepare($sql)->execute([$user_id]);
    } catch (PDOEXCEPTION $e) {
        exit($e);
    }
    header("Location: /../verification.php?id=" . $user_id . "&req=success");
    exit();
}
