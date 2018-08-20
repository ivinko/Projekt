<?php 
include_once "config.php";
unset($_SESSION[$appID . "o"]);
header("location: index.php");
?>