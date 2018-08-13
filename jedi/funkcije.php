<?php


function stavkaIzbornika($putanjaAPP, $page, $label){
        ?>
        <li<?php 
        if ($putanjaAPP . $page == $_SERVER["PHP_SELF"]){
          echo " class=\"active\"";
        }
        ?>><a href="<?php echo $putanjaAPP . $page; ?>"><?php echo $label;  ?></i></a></li>
        <?php
}