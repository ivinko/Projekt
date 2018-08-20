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
if(!isset($_SESSION[$appID."o"])){
  header('location:'.$putanjaAPP.'logout.php');
} 


   $izraz =  $veza->prepare("select * from narucitelj a;");
   $izraz->execute(); 
   $rezultat = $izraz->fetchAll(PDO::FETCH_OBJ); 
  ?>

        <h3>Naručitelji</h3>
        
<table>
  <thead>
    <tr>
      <th width="100">Ime</th>
      <th width="150">Prezime</th>
      <th width="150">Oib</th>
      <th width="150">Email</th>
      <th width="150">Uredi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($rezultat as $row): ?>
              <tr>
                <td><?php echo $row->ime; ?></td>
                <td><?php echo $row->prezime; ?></td>
                <td><?php echo $row->oib; ?></td>
                <td><?php echo $row->email; ?></td>
                <td>
                <a onclick="return confirm('Delete -><?php echo $row->ime; ?>?')" href="delete.php?sifra=<?php echo $row->sifra; ?>">
                <i class="fas fa-2x fa-trash-alt"></i>
                </a>  
                  <a href="rewrite.php?sifra=<?php echo $row->sifra; ?>"><i class="fas fa-2x fa-edit"></i></a>
                </td>
              </tr>
          <?php endforeach; ?>
    
  </tbody>
</table>


<a href="new.php" class="success button expanded">Dodaj naručitelja</a>

</div>
    <?php include_once "../../add/podnozje.php" ?>

    <?php include_once "../../add/script.php" ?>
  </body>
</html>
