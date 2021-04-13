<?php
session_start();
if (!isset($_SESSION['logged_on_user'])) {
    header("Location: /register.php");
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico?v=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/form.css">
    <script src="js/index.js"></script>
</head>

<body>

    <div id='wrap'>
        <?php require 'navbar.php'; ?>
        <div id='feed'>
            
        </div>
        
    </div>
</body>
<footer><?php require 'footer.php'; ?></footer>
<script src="js/infinite.js"></script>
</html>