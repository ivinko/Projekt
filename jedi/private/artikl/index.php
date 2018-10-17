<?php include_once "../../config.php" ;

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

  
  <?php
if(!isset($_SESSION[$appID . "o"])){
  header('location:'.$putanjaAPP.'logout.php');
} 


   $izraz =  $veza->prepare("select a.naziv as naziv, b.naziv as kategorija, a.opis, a.cijena 
                                from artikl a
                                inner join kategorija b on a.kategorija=b.sifra
                            ;");
   $izraz->execute(); 
   $rezultat = $izraz->fetchAll(PDO::FETCH_OBJ); 
  ?>
        <h3>Artikli</h3>

    <table>
  <thead>
    <tr>
      <th width="200">Naziv</th>
      <th width="150">Kategorija</th>
      <th width="150">Opis</th>
      <th width="150">Cijena</th>
      <th width="150">Uredi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($rezultat as $row): ?>
              <tr>
                <td><?php echo $row->naziv; ?></td>
                <td><?php echo $row->kategorija; ?></td>
                <td><?php echo $row->opis; ?></td>
                <td><?php echo $row->cijena; ?></td>
                <td>
                <a onclick="return confirm('Delete -><?php echo $row->naziv; ?>?')" href="delete.php?sifra=<?php echo $row->sifra; ?>">
                <i class="fas fa-2x fa-trash-alt"></i>
                </a>  
                  <a href="rewrite.php?sifra=<?php echo $row->sifra; ?>"><i class="fas fa-2x fa-edit"></i></a>
                </td>
              </tr>
          <?php endforeach; ?>
    
  </tbody>
</table>
<a href="new.php" class="success button expanded">Dodaj artikl</a>

    <?php include_once "../../add/podnozje.php" ?>

    <?php include_once "../../add/script.php" ?>
  </body>
</html>
