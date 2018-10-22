<?php include_once "../../config.php"; 

if(!isset($_SESSION[$appID."o"])){
    header('location:'.$putanjaAPP.'logout.php');
}
if(!isset($_GET["sifra"]) && !isset($_POST["uredi"])){
    header('location:'.$putanjaAPP.'logout.php');
}


  if(isset($_POST["uredi"])){
    $izraz = $veza->prepare("update narucitelj set ime=:ime, prezime=:prezime,oib=:oib, email=:email where sifra=:sifra;"); 
    unset($_POST["uredi"]);
    $izraz->execute($_POST);
    header("location: index.php"); 
}else{
    $izraz = $veza->prepare("select * from narucitelj where sifra=:sifra");
    $izraz->execute($_GET);
    $rezultat = $izraz->fetch(PDO::FETCH_OBJ);  
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../../add/head.php" ?>
  </head>
  <body>
    <div class="grid-container">
      
    <?php include_once "../../add/heading.php" ?>

    <?php include_once "../../add/menu.php" ?>

    <form class="callout text-center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
  
  <div class="floated-label-wrapper">
    <label for="ime">Ime</label>
    <input value="<?php echo $rezultat->ime ?>" autocomplete="off" type="text" id="ime" name="ime" >
  </div>
  <div class="floated-label-wrapper">
    <label for="prezime">Prezime</label>
    <input value="<?php echo $rezultat->prezime ?>" autocomplete="off" type="text" id="prezime" name="prezime" >
  </div>
  <div class="floated-label-wrapper">
    <label for="oib">OIB</label>
    <input value="<?php echo $rezultat->oib ?>" autocomplete="off" type="number" min="11" id="oib" name="oib" >
  </div>
  <div class="floated-label-wrapper">
    <label for="email">Email</label>
    <input  value="<?php echo $rezultat->email ?>" autocomplete="off" type="text"   id="email" name="email" >
  </div>
  <br>
          <div class="grid-x">
            <div class="cell large-6">
            <a href="index.php" class="alert button expanded">Nazad</a>
            </div>
            <div class="cell large-6">
            <input type="hidden" name="sifra" value="<?php echo $rezultat->sifra ?>" />
            <input type="submit" name="uredi" class="button expanded" value="Uredi"></input>
             </div>
          </div>
  
</form>


   


    <?php include_once "../../add/podnozje.php" ?>

    <?php include_once "../../add/script.php" ?>
  </body>
</html>
