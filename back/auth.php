<?php
function auth($login, $passwd)
{
    require '../config/database.php';

    if (!isset($login) || !isset($passwd)) {
        return false;
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
        $sql = "SELECT `name`, `hash` FROM `users` WHERE `name`=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$login]);
        $found_user = $stmt->fetch();
    } catch (PDOEXCEPTION $e) {
        exit($e);
    }

    if ($found_user === false) {
        return (false);
    } else {
        $hash = $found_user['hash'];
        $hash = hash_pbkdf2("sha256", $passwd, $hash, 40000);
    }

    try {
        $sql = "SELECT `name`, `pwd` FROM `users` WHERE `name`=? AND `pwd`=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$login, $hash]);
        $found_user = $stmt->fetch();
    } catch (PDOEXCEPTION $e) {
        exit($e);
    }

    return ($found_user === false ? false : true);
}