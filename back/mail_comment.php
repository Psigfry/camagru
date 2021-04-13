<?php
function send_comment_email($post, $from, $comment){
    require '../config/database.php';

    $DB_DSN .= ";dbname=" . $DB_NAME;
    try {
        $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOEXCEPTION $e) {
        exit($e);
    }
    try {
        $sql = "SELECT users.name, users.email FROM users
                JOIN notifications ON users.id=notifications.user_id
                JOIN posts ON users.id=posts.user_id
                WHERE posts.id=? AND notifications.comments=1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$post]);
        $to = $stmt->fetch();
    } catch (PDOEXCEPTION $e) {
        exit($e);
    }
    if ($to === false || $to['name'] === $from){
        exit();
    }
    $email = $to['email'];
    $link = "http://" . $_SERVER['HTTP_HOST'] . "/search.php?search=" . $post;
    if (!preg_match("/^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$/", $email)) {
        $nl = "\r\n";
    } else {
        $nl = "\n";
    }
    $msg_txt = "Перейдите по ссылке : " . $link;
    $msg_html = utf8_decode('<head>
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    </head>
    
    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; box-sizing: border-box; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 22px; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important">
    <table>
      <tbody>
      <a href="' . $link . '">U have noviy commentariy</a>
    
      </tbody>
    </table>
    
    </body>');
    $boundary = "-----=" . md5(rand());
    $subject = "У вас новый комментарий";
    $header = "From: \"Instagram\"<instagram@psigfry.com>" . $nl;
    $header .= "MIME-Version: 1.0" . $nl;
    $header .= "Content-Type: multipart/alternative;" . $nl . " boundary=\"$boundary\"" . $nl;


    $msg = $nl . "--" . $boundary . $nl;

        
    $msg .= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $nl;
    $msg .= "Content-Transfer-Encoding: 8bit" . $nl;
    $msg .= $nl . $msg_txt . $nl;
    $msg .= $nl . "--" . $boundary . $nl;

    $msg .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $nl;
    $msg .= "Content-Transfer-Encoding: 8bit" . $nl;
    $msg .= $nl . $msg_html . $nl;
    $msg .= $nl . "--" . $boundary . "--" . $nl;
    $msg .= $nl . "--" . $boundary . "--" . $nl;

    mail($email, $subject, $msg, $header);
}