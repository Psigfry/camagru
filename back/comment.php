<?php
require '../config/database.php';
require 'mail_comment.php';

session_start();
if (!isset($_SESSION['logged_on_user'])) {
    exit();
}

$post_id = $_POST['postId'];
$comment = $_POST['comment'];
$user_id = $_SESSION['logged_on_user']['id'];

if (!isset($post_id) || !isset($comment) || $post_id == "" || $comment == "" || strlen($comment) > 140) {
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
    $sql = "INSERT INTO comments (post_id, `user_id`, content) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$post_id, $user_id, $comment]);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

send_comment_email($post_id, $_SESSION['logged_on_user']['login'], $comment);
