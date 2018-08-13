<?php
if(!isset($_POST["username"])){
exit;
}

    if($_POST["username"]===""){
        header("location: login.php");
        exit;
    }

    if(($_POST["username"]==="vojko" && $_POST["password"]==="v")
    ||
    ($_POST["username"]==="vinko" && $_POST["password"]==="c")
    ){
        //pusti dalje
    
        $_SESSION[$idAPP."o"]= $_POST["username"];
        header("location: private/controlPanel.php");
    }else{
        header("location: login.php");
    }
