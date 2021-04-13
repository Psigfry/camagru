<?php
require '../config/database.php';

$id = $_GET['id'];

$DB_DSN .= ";dbname=" . $DB_NAME;
try {
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    exit($e);
}

try {
    $sql = "SELECT users.email, users.name, verify.code FROM verify JOIN users ON verify.user_id=users.id
            WHERE users.id=? AND verify.verified=0";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $user = $stmt->fetch();
} catch (PDOEXCEPTION $e) {
    exit($e);
}

if ($user === false) {
    header("Location: ../email.php?error=failure");
    exit();
}

$link = "http://" . $_SERVER['HTTP_HOST'] . "/back/verify.php?id=" . $id . "&code=" . $user['code'];

if (!preg_match("/^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$/", $user['email'])) {
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
  <a href="' . $link . '">Confirmation of registration</a>

  </tbody>
</table>

</body>');

$boundary = "-----=" . md5(rand());

$subject = "Подтверждение регистрации";

$header = "From: \"InstagraM\"<instagram@psigfry.com>" . $nl;
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

if (mail($user['email'], $subject, $msg, $header)) {
    header("Location: ../email.php?verify=success");
} else {
    header("Location: ../email.php?verify=failure");
}
