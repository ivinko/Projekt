<?php 
include_once "config.php";
unset($_SESSION[$iddAPP . "o"]);
header("location: index.php");
?>