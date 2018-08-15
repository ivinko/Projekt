<?php 
include_once "../../config.php";

if(!isset($_SESSION["o"])){
  header('location:'.$putanjaAPP.'logout.php');
} 

if(isset($_POST["dodaj"])){
    $izraz = $veza->prepare("insert into artikl(ime, prezime, oib, email) values
                            (:ime, :prezime, :oib, :email)");
    unset($_POST["dodaj"]);
    $izraz->execute($_POST); 
    header("location: index.php"); 
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

   
   <div class="grid-x" style="justify-content:center;">
        <div class="cell medium-4 large-3">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                            <h4 class="text-center">Novi naručitelj</h4>
                            <label>Ime
                                <input type="text"  name="ime">
                            </label>
                            <label>Prezime
                                <input type="text"  name="prezime" >
                            </label>
                            <label>Oib
                                <input type="number"  name="oib">
                            </label>
                            <label>Email
                                <input type="text"  name="email">
                            </label>
                            <br>
                            <input type="submit" name="dodaj" class="button" value="Dodaj"></input>
                            <a href="index.php" class="alert button">Cancel</a>
                </form>
        </div>
    </div>

    <?php include_once "../../add/podnozje.php" ?>

    <?php include_once "../../add/script.php" ?>
  </body>
</html>
