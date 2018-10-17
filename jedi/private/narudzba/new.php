<?php 
include_once "../../config.php";

if(!isset($_SESSION[$appID."o"])){
  header('location:'.$putanjaAPP.'logout.php');
} 

if(isset($_POST["dodaj"])){
    $izraz = $veza->prepare("insert into narudzba(narucitelj, datum, brojstolica, napomena) values
                            (:narucitelj, :datum, :brojstolica, :napomena)");
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
                            <h4 class="text-center">Nova narudžba</h4>
                            <label>Naručitelj
                                <input type="text"  name="narucitelj">
                            </label>
                            <label>Datum
                                <input type="text"  name="datum" >
                            </label>
                            <label>Broj stolica
                                <input type="number"  name="brojstolica">
                            </label>
                            <label>Napomena
                                <input type="text"  name="napomena">
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
