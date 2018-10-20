<?php include_once "../../config.php"; 

if(!isset($_SESSION[$appID."o"])){
    header('location:'.$putanjaAPP.'logout.php');
}
if(!isset($_GET["sifra"]) && !isset($_POST["uredi"])){
    header('location:'.$putanjaAPP.'logout.php');
}


  if(isset($_POST["uredi"])){
    $izraz = $veza->prepare("update artikl set naziv=:naziv, kategorija=:kategorija, opis=:opis, cijena=:cijena where sifra=:sifra;"); 
    unset($_POST["uredi"]);
    $izraz->execute($_POST);
    header("location: index.php"); 
}else{
    $izraz = $veza->prepare("select * from artikl where sifra=:sifra;");
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
    <label for="naziv">Naziv</label>
    <input value="<?php echo $rezultat->naziv ?>" autocomplete="off" type="text" id="naziv" name="naziv" >
  </div>
  <div class="floated-label-wrapper">
    <label for="kategorija">Kategorija</label>
    <select id="kategorija" name="kategorija">
              <option value="0">Odaberi kategorija</option>  
              <?php 
              
              $izraz = $veza->prepare("select * from kategorija order by naziv");
              $izraz->execute();
              $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
               foreach($rezultati as $red):?>

             <option
             <?php 
             if($rezultat->kategorija==$red->sifra){
               echo ' selected="selected" ';
             }
             ?>
              value="<?php echo $red->sifra ?>"><?php echo $red->naziv ?></option>  
            <?php endforeach;?>
              
              ?>
            </select>
  </div>
  <div class="floated-label-wrapper">
    <label for="opis">Opis</label>
    <input value="<?php echo $rezultat->opis ?>" autocomplete="off" type="text" id="opis" name="opis" >
  </div>
  <div class="floated-label-wrapper">
    <label for="cijena">Cijena</label>
    <input  value="<?php echo $rezultat->cijena ?>" autocomplete="off" type="number" min="1" max="10000" id="cijena" name="cijena" >
  </div>
  <br>
            <input type="hidden" name="sifra" value="<?php echo $rezultat->sifra ?>" />
            <input type="submit" name="uredi" class="button" value="Uredi"></input>
            <a href="index.php" class="alert button">Cancel</a>
  
</form>


    <?php include_once "../../add/podnozje.php" ?>

    <?php include_once "../../add/script.php" ?>
  </body>
</html>
