<div id='navbar'>
    <a href="index.php" id="logo">Instagram</a>    
    <div class='right'>
        <a href='camera.php'><img src='assets/camera.png' title='Камера' alt='Camera'></a>
        <a href='index.php'><img src='assets/feed.png' title='Лента' alt='Tape'></a>
        <a href='account.php'><img src='assets/account.png' title='Аккаунт' alt='Account'></a>
        <?php if($_SESSION['logged_on_user'] != '') {?>
            <a href='back/logout.php'><img src='assets/logout.png' title='Выход' alt='logout'></a>
        <?php }?>
    </div>
</div>