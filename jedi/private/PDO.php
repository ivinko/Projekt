<?php include_once "../config.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "logout.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../add/head.php" ?>
  </head>
  <body>
    <div class="grid-container">
      
    <?php include_once "../add/heading.php" ?>

    <?php include_once "../add/menu.php" ?>


  PDO
  <div class="grid-x">
  <div class="cell large-6">
 <?php
 $veza = new PDO("mysql:host=localhost;dbname=restoran","edunova","edunova");
 $izraz = $veza->prepare("select * from jelo");
 $izraz->execute();
 $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
 l($rezultati);

 ?>

  </div>
  <div class="cell large-6">
    <?php 
    
    
    
    ?>
    <table>
    <thead>
    <tr>
    <th>Šifra</th>
    <th>Naziv</th>
    <th>Opis</th>
    <th>Cijena</th>
    
    </tr>
    </thead>
    <tbody>
    <?php foreach($rezultati as $red):?>
      <tr>
      <td><?php echo $red->sifra; ?></td>
      <td><?php echo $red->naziv; ?></td>
      <td><?php echo $red->opis; ?></td>
      <td><?php echo $red->cijena; ?></td>
      
      </tr>
    <?php endforeach;?>
    </tbody>
    </table>
  </div>
  </div>
    <?php include_once "../add/podnozje.php" ?>

    <?php include_once "../add/script.php" ?>
  </body>
</html>
