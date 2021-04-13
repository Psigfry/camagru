<?php  
date_default_timezone_set("Europe/Moscow");
$footer_login = $_SESSION['logged_on_user']['login'];
?>

<div id='footer'>
    <a href='index.php'><span>Instagram</span></a>
    <a href='account.php'><?php if(isset($footer_login)) {?>Приветствую : <?php echo $footer_login;} else { ?>Аноним<?php } ?></a>
    <a href='#'>Создатель : Psigfry</a>
    <a href='https://21-school.ru'>School-21</a>
</div>