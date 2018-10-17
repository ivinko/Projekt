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


   $izraz =  $veza->prepare("select concat(b.ime,' ',b.prezime) as narucitelj, a.datum,
                                     a.brojstolica, a.napomena from
                                    narudzba a left join narucitelj b on a.narucitelj=b.sifra
                                    ;");
   $izraz->execute(); 
   $rezultat = $izraz->fetchAll(PDO::FETCH_OBJ); 
  ?>
        <h3>Narudžbe</h3>

    <table>
  <thead>
    <tr>
      <th width="200">Naručitelj</th>
      <th width="150">Datum</th>
      <th width="150">Broj stolica</th>
      <th width="150">Napomena</th>
      <th width="150">Uredi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($rezultat as $row): ?>
              <tr>
                <td><?php echo $row->narucitelj; ?></td>
                <td><?php echo ($row->datum!=null) ? date("d.m.Y.",strtotime($row->datum)) : "Nije definirano "; ?></td>
                <td><?php echo $row->brojstolica; ?></td>
                <td><?php echo $row->napomena; ?></td>
                <td>
                <a onclick="return confirm('Delete -><?php echo $row->narucitelj; ?>?')" href="delete.php?sifra=<?php echo $row->sifra; ?>">
                <i class="fas fa-2x fa-trash-alt"></i>
                </a>  
                  <a href="rewrite.php?sifra=<?php echo $row->sifra; ?>"><i class="fas fa-2x fa-edit"></i></a>
                </td>
              </tr>
          <?php endforeach; ?>
    
  </tbody>
</table>
<a href="new.php" class="success button expanded">Dodaj narudžbu</a>

    <?php include_once "../../add/podnozje.php" ?>

    <?php include_once "../../add/script.php" ?>
  </body>
</html>
