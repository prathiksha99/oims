<?php
//session_start();
if(!isset($_SESSION["uname"])){
header("Location: login/auth-login.php");
exit(); }
?>