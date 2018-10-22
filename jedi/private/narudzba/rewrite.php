<?php include_once "../../config.php"; 

if(!isset($_SESSION[$appID."o"])){
    header('location:'.$putanjaAPP.'logout.php');
}
if(!isset($_GET["sifra"]) && !isset($_POST["uredi"])){
    header('location:'.$putanjaAPP.'logout.php');
}


  if(isset($_POST["uredi"])){
    $izraz = $veza->prepare("update narudzba set narucitelj=:narucitelj, datum=:datum, brojstolica=:brojstolica, napomena=:napomena where sifra=:sifra;"); 
    unset($_POST["uredi"]);
    $izraz->execute($_POST);
    header("location: index.php"); 
}else{
    $izraz = $veza->prepare("select * from narudzba where sifra=:sifra");
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
    <label for="narucitelj">Naručitelj</label>
    <select id="narucitelj" name="narucitelj">
    <option value="0">Odaberi narucitelj</option>  
              <?php 
              
              $izraz = $veza->prepare("select * from narucitelj order by ime");
              $izraz->execute();
              $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
               foreach($rezultati as $red):?>

             <option
             <?php 
             if($rezultat->narucitelj==$red->sifra){
               echo ' selected="selected" ';
             }
             ?>
              value="<?php echo $red->sifra ?>"><?php echo $red->ime ?></option>  
            <?php endforeach;?>
              
              ?>
            </select>
  </div>
  <div class="floated-label-wrapper">
    <label for="datum">Datum</label>
    <input value="<?php echo $rezultat->datum ?>" autocomplete="off" type="text" id="datum" name="datum" >
  </div>
  <div class="floated-label-wrapper">
    <label for="brojstolica">Broj stolica</label>
    <input value="<?php echo $rezultat->brojstolica ?>" autocomplete="off" type="number" id="brojstolica" name="brojstolica" >
  </div>
  <div class="floated-label-wrapper">
    <label for="napomena">Napomena</label>
    <input  value="<?php echo $rezultat->napomena ?>" autocomplete="off" type="text"   id="napomena" name="napomena" >
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