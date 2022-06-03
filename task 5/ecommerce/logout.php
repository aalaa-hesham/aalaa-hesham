<?php
session_start();
unset($_SESSION['user']);
setcookie('rememberMe','',time()-1,'/');
header('location:login.php');
?>