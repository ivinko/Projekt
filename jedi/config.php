<?php
session_start();
include_once "postavke.php";
include_once "funkcije.php";
$iddAPP="123456789";
$nazivAPP="JEDI";


switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/jedi/";
    $bojaIzbornika="style=\"background-color: blue;\"";
    break;
    case "ivinko.byethost18.com":
    $putanjaAPP="/";
    $bojaIzbornika="";
    break;
}

$veza = new PDO("mysql:host=localhost;dbname=restoran","edunova","edunova");
$veza->exec("set names utf8;");