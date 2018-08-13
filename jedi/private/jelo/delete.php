<?php include_once "../../config.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "logout.php");
}

if(!isset($_GET["sifra"])){
  header("location: " . $putanjaAPP . "logout.php");
}




  $izraz = $veza->prepare("delete from jelo
                          where sifra=:sifra;");
  $izraz->execute($_GET);
  header("location: index.php");
