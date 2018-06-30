<div class="title-bar" data-responsive-toggle="menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="menu"></button>
  <div class="title-bar-title"><?php echo $nameAPP; ?></div>
</div>

<div class="top-bar" id="menu" <?php echo $bojaIzbornika ?>>
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    <?php 
      stavkaIzbornika($putanjaAPP,"index.php","<i class=\"fas fa-home\" style=\"color: #2a6182;\"></i>");
      if(isset($_SESSION["o"])):
        stavkaIzbornika($putanjaAPP,"private/controlPanel.php","Nadzorna ploča");
      endif;
      stavkaIzbornika($putanjaAPP,"aboutus.php","O nama");
        stavkaIzbornika($putanjaAPP,"contact.php","Kontakt");
      
      ?>
   
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
    <?php if(isset($_SESSION["o"])): ?>
      <li style="width:100%; text-align: center;"><a href="<?php echo $putanjaAPP; ?>logout.php">Odjava</a></li>
    <?php else:?>
      <li style="width:100%; text-align: center;"><a href="<?php echo $putanjaAPP; ?>login.php">Prijava</a></li>
    <?php endif?>
    </ul>
  </div>
</div>