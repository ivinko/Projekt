<?php
session_start();
include_once "postavke.php";
include_once "funkcije.php";
$appID="123456789";
$nazivAPP="JEDI";


switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/jedi/";
    $bojaIzbornika="style=\"background-color: blue;\"";
    $veza = new PDO("mysql:host=localhost;dbname=restoran","edunova","edunova");
    break;
    case "ivinko.byethost18.com":
    $putanjaAPP="/jedi/";
    $veza = new PDO("mysql:host=sql104.byethost.com;dbname=b18_22313237_restoran","b18_22313237","IcRj.388");
    $bojaIzbornika="";
    break;
}


$veza->exec("set names utf8;");