<?php
if(!isset($_POST["submit"])){
exit;
}
include_once "config.php";

    if($_POST["username"]===""){
        header("location: login.php");
        exit;
    }

    if(($_POST["username"]==="vojko" && $_POST["password"]==="v")
    ||
    ($_POST["username"]==="vinko" && $_POST["password"]==="c")
    ){
        //pusti dalje
    
        $_SESSION[$appID."o"]= $_POST["username"];
        header("location: private/controlPanel.php");
    }else{
        header("location: login.php");
    }
