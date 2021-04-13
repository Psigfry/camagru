<?php
require '../config/database.php';

$id = $_GET['id'];
$code = $_GET['code'];
$pwd = $_POST['pwd'];
$pwd_confirm = $_POST['pwd-confirm'];

if (!isset($id) || !isset($code)) {
    header("Location: /../password.php?req=invalid_link");
    exit();
} else if (!isset($pwd) || strlen($pwd) == 0 || strlen($pwd) > 64) {
    header("Location: /../reset-pwd.php?error=invalid_pwd&id=" . $id . "&code=" . $code);
    exit();
} else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,64}$/", $pwd)) {
    header("Location: /../reset-pwd.php?error=weak_pwd&id=" . $id . "&code=" . $code);
    exit();
} else if (!isset($pwd_confirm) || strlen($pwd_confirm) == 0 || $pwd_confirm !== $pwd) {
    header("Location: /../reset-pwd.php?error=pwds_no_match&id=" . $id . "&code=" . $code);
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
    $sql = "SELECT `user_id`, `code` FROM `passwords` WHERE `user_id`=? AND `code`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id, $code]);
    $found_user = $stmt->fetch();
} catch (PDOEXCEPTION $e) {
    exit($e);
}

if ($found_user === false) {
    header("Location: password.php?req=invalid_link");
    exit();
}

try {
    $sql = "SELECT `id`, `hash` FROM `users` WHERE `id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $found_user = $stmt->fetch();
} catch (PDOEXCEPTION $e) {
    exit($e);
}

if ($found_user === false) {
    header("Location: password.php?req=invalid_link");
    exit();
} else {
    $hash = $found_user['hash'];
    $has = hash_pbkdf2("sha256", $pwd, $hash, 40000);
}

try {
    $sql = "UPDATE `users` SET `pwd`=? WHERE `id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$has, $id]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "UPDATE `passwords` SET `code`=? WHERE `user_id`=?;";
    $code = "";
    $pdo->prepare($sql)->execute([$code, $id]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

header("Location: /../password.php?req=success");
