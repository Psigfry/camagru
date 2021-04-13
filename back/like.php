<?php
require '../config/database.php';

session_start();
if(!isset($_SESSION['logged_on_user'])){
    exit("ERROR");
}

$post_id = $_POST['postId'];
$user_id = $_SESSION['logged_on_user']['id'];

$DB_DSN .= ";dbname=" . $DB_NAME;

try{
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e){
    exit($e);
}

try {
    $sql = "SELECT likes.id FROM likes WHERE likes.post_id=? AND likes.user_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$post_id, $user_id]);
    $like = $stmt->fetch();
} catch (PDOEXCEPTION $e) {
    exit($e);
}

if ($like === false){
    try{
        $sql = "INSERT INTO likes (`post_id`, `user_id`) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$post_id, $user_id]);
        $like = $stmt->fetch();
    }catch (PDOEXCEPTION $e){
        exit($e);
    }
} else {
    try{
        $sql = "DELETE FROM likes WHERE post_id=? AND `user_id`=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$post_id, $user_id]);
        $like = $stmt->fetch();
    } catch (PDOEXCEPTION $e){
        exit($e);
    }
}
