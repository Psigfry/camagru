<?php
function send_reset_email($id, $name, $email, $code)
{
    $link = "http://" . $_SERVER['HTTP_HOST'] . "/reset-pwd.php?id=" . $id . "&code=" . $code;

    if (!preg_match("/^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$/", $email)) {
        $nl = "\r\n";
    } else {
        $nl = "\n";
    }

    $msg_txt = "Смена пароля : " . $link;
    $msg_html = utf8_decode('<head>
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    </head>
    
    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; box-sizing: border-box; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 22px; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important">
    <table>
      <tbody>
      <a href="' . $link . '">Reset pass</a>
    
      </tbody>
    </table>
    
    </body>');

    $boundary = "-----=" . md5(rand());

    $subject = "Смена пароля";

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

    return (!mail($email, $subject, $msg, $header));
}
