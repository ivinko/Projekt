<?php 
include_once "config.php";
unset($_SESSION[$idAPP . "o"]);
header("location: index.php");
?>