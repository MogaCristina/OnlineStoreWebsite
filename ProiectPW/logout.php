<?php
session_start();
unset($_SESSION['username']);
setcookie("user", "", time()-3600);
session_destroy();
setcookie('user', null, time()-3600);
header('location:index.php');
?>