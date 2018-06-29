<?php

$nameAPP="RESTORAN";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/MojProjekt/";
    $bojaIzbornika="style=\"background-color: blue;\"";
    break;
    case "ivinko.byethost18.com":
    $putanjaAPP="/";
    $bojaIzbornika="";
    break;
}