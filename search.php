<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/form.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico?v=1">
    <script src="js/navbar.js"></script>
    <script src="js/index.js"></script>
    <script>
        let search = '<?=trim(htmlentities($_GET['search']))?>';
    </script>
</head>
<body>
    <div id="wrap">
        <?php require 'navbar.php';?>
        <div id="feed">
        </div>
        <?php require 'footer.php';?>
    </div>
</body>
<script src="js/search.js"></script>
</html>