<div class="title-bar" data-responsive-toggle="menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="menu"></button>
  <div class="title-bar-title"><?php echo $nameAPP; ?></div>
</div>

<div class="top-bar" id="menu" <?php echo $bojaIzbornika ?>>
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><a href="<?php echo $putanjaAPP; ?>index.php"><i class="fas fa-home" style="color: #2a6182;"></i></a></li>
      <li><a href="<?php echo $putanjaAPP; ?>private/controlPanel.php">Nadzorna ploča</a></li>
      <li><a href="<?php echo $putanjaAPP; ?>aboutus.php">About us</a></li>
      <li><a href="<?php echo $putanjaAPP; ?>contact.php">Kontakt</a></li>
      
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
    <li style="width:100%; text-align: center;"><a href="#">Login</a></li>
    </ul>
  </div>
</div>