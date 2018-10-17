<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title"><?php echo $nazivAPP; ?></div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>

      <?php 
      stavkaIzbornika($putanjaAPP,"index.php","<i class=\"fas fa-home\" style=\"color: #2a6182;\"></i>");
      stavkaIzbornika($putanjaAPP,"onama.php","O nama");
      stavkaIzbornika($putanjaAPP,"contact.php","Kontakt");
      if(isset($_SESSION[$appID . "o"])):
        stavkaIzbornika($putanjaAPP,"private/controlPanel.php","Nadzorna ploča");
      
      ?>
      <li>
        <a href="#"><i class="fas fa-2x fa-archive"></i>Izbornik</a>
        <ul class="menu vertical">
          <li><a href="<?php echo $putanjaAPP.'private/narucitelj/index.php'?>">Naručitelji</a></li>
          <li><a href="<?php echo $putanjaAPP.'private/jelo/index.php'?>">Jelo</a></li>
          <li><a href="<?php echo $putanjaAPP.'private/artikl/index.php'?>">Artikli</a></li>
          <li><a href="<?php echo $putanjaAPP.'private/narudzba/index.php'?>">Narudžbe</a></li>
        </ul>
      </li>
    </ul>
    <?php endif?>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
    <?php if(isset($_SESSION[$appID . "o"])): ?>
      <li style="width:100%; text-align: center;"><a href="<?php echo $putanjaAPP; ?>logout.php">Odjava</a></li>
    <?php else:?>
      <li style="width:100%; text-align: center;"><a href="<?php echo $putanjaAPP; ?>login.php">Prijava</a></li>
    <?php endif?>
    </ul>
  </div>
</div>

