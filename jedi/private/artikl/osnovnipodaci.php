<div class="floated-label-wrapper">
            <?php if(!isset($greske["naziv"])): ?>
            <label for="naziv">Naziv</label>
            <input autocomplete="off" type="text" id="naziv" name="naziv" placeholder=""
            value="<?php echo isset($_POST["naziv"]) ? $_POST["naziv"] : "" ?>">

            <?php else:?>

            <label class="is-invalid-label">
              Zahtjevani unos
              <input type="text" 
              value="<?php echo  $_POST["naziv"]; ?>"
              class="is-invalid-input" aria-describedby="nazivGreska" data-invalid="" 
              aria-invalid="true" autocomplete="off" type="text" id="naziv" name="naziv" placeholder="Naziv artikla">
              <span class="form-error is-visible" id="nazivGreska">
              <?php echo $greske["naziv"]; ?>
              </span>
              </label>

              <?php endif;?>
          </div>

           <div class="grid-x">
            <div class="cell large-12">

            <label  <?php if(isset($greske["kategorija"])){
              echo ' class="is-invalid-label" ';
            } ?> for="kategorija">Kategorija</label>
            <select <?php if(isset($greske["kategorija"])){
              echo ' required="" class="is-invalid-input" data-invalid="" aria-invalid="true" ';
            } ?> id="kategorija" name="kategorija">
              <option value="0">Odaberi kategoriju</option>  
              <?php 
              
              $izraz = $veza->prepare("select * from kategorija order by naziv");
              $izraz->execute();
              $rezultat = $izraz->fetchAll(PDO::FETCH_OBJ);
               foreach($rezultat as $row):?>

             <option
             <?php 
             if(isset($_POST["kategorija"]) && $_POST["kategorija"]==$row->sifra){
               echo ' selected="selected" ';
             }
             ?>
              value="<?php echo $row->sifra ?>"><?php echo $row->naziv ?></option>  
            <?php endforeach;?>
              
              ?>
            </select>
            <?php if(isset($greske["kategorija"])): ?>
            <span class="form-error is-visible" id="nazivGreska">
              <?php echo $greske["kategorija"]; ?>
              </span>
              </label>
          <?php endif;?>
           

            </div>

           
           
            
            <div class="cell large-12">
            <?php if(!isset($greske["opis"])): ?>
            <label for="opis">Opis</label>
            <input autocomplete="off" type="text" id="opis" name="opis" placeholder=""
            value="<?php echo isset($_POST["opis"]) ? $_POST["opis"] : "" ?>">

            <?php else:?>

            <label class="is-invalid-label">
              Zahtjevani unos
              <input type="text" 
              value="<?php echo  $_POST["opis"]; ?>"
              class="is-invalid-input" aria-describedby="opisGreska" data-invalid="" 
              aria-invalid="true" autocomplete="off" type="text" id="opis" name="opis" placeholder="opis artikla">
              <span class="form-error is-visible" id="opisGreska">
              <?php echo $greske["opis"]; ?>
              </span>
              </label>

              <?php endif;?>
          </div>
          </div> 
            
          
            <div class="cell large-12">
            <label <?php if(isset($greske["cijena"])){
              echo ' class="is-invalid-label" ';
            } ?> for="cijena">Odaberi cijenu</label>
            <input 
            <?php if(isset($greske["cijena"])){
              echo ' class="is-invalid-input" data-invalid="" aria-invalid="true" ';
            } ?>
            value="<?php echo isset($_POST["cijena"]) ? $_POST["cijena"] : "10" ?>"
            style="text-align: right;" autocomplete="off" type="number" min="1" max="30" id="cijena" name="cijena" >
            <?php if(isset($greske["cijena"])): ?>
            <span class="form-error is-visible" id="nazivGreska">
              <?php echo $greske["cijena"]; ?>
              </span>
              </label>
          <?php endif;?>
          </div>
            
          

           