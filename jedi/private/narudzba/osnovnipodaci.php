      <div class="floated-label-wrapper">
            <?php if(!isset($greske["narucitelj"])): ?>
            <label for="narucitelj">Naručitelj</label>
            <input autocomplete="off" type="text" id="narucitelj" name="narucitelj" placeholder="narucitelj"
            value="<?php echo isset($_POST["narucitelj"]) ? $_POST["narucitelj"] : "" ?>">

            <?php else:?>

            <label class="is-invalid-label">
              Zahtjevani unos
              <input type="text" 
              value="<?php echo  $_POST["narucitelj"]; ?>"
              class="is-invalid-input" aria-describedby="nazivGreska" data-invalid="" 
              aria-invalid="true" autocomplete="off" type="text" id="narucitelj" name="narucitelj" placeholder="narucitelj">
              <span class="form-error is-visible" id="nazivGreska">
              <?php echo $greske["narucitelj"]; ?>
              </span>
              </label>

              <?php endif;?>
          </div>

<div class="grid-x">
          <div class="cell large-12">
            <div class="floated-label-wrapper">
            <label <?php if(isset($greske["datum"])){
              echo ' class="is-invalid-label" ';
            } ?> for="datum">Datum</label>
            <input 
            <?php if(isset($greske["datum"])){
              echo ' class="is-invalid-input" data-invalid="" aria-invalid="true" ';
            } ?>
            value="<?php echo isset($_POST["datum"]) ? $_POST["datum"] : "" ?>"
             autocomplete="off" type="date"  id="datum" name="datum" >
             <?php if(isset($greske["datum"])): ?>
            <span class="form-error is-visible" id="nazivGreska">
              <?php echo $greske["datum"]; ?>
              </span>
              </label>
          <?php endif;?>
          </div>
            </div>
            <div class="grid-x">
            <div class="cell large-12">
            <label <?php if(isset($greske["brojstolica"])){
              echo ' class="is-invalid-label" ';
            } ?> for="brojstolica">Broj stolica</label>
            <input 
            <?php if(isset($greske["brojstolica"])){
              echo ' class="is-invalid-input" data-invalid="" aria-invalid="true" ';
            } ?>
            value="<?php echo isset($_POST["brojstolica"]) ? $_POST["brojstolica"] : "10" ?>"
            style="text-align: right;" autocomplete="off" type="number" min="1" max="30" id="brojstolica" name="brojstolica" >
            <?php if(isset($greske["brojstolica"])): ?>
            <span class="form-error is-visible" id="nazivGreska">
              <?php echo $greske["brojstolica"]; ?>
              </span>
              </label>
          <?php endif;?>
          </div>
            


            
            <div class="cell large-12">
            <?php if(!isset($greske["napomena"])): ?>
            <label for="napomena">napomena</label>
            <input autocomplete="off" type="text" id="napomena" name="napomena" placeholder="napomena"
            value="<?php echo isset($_POST["napomena"]) ? $_POST["napomena"] : "" ?>">

            <?php else:?>

            <label class="is-invalid-label">
              Zahtjevani unos
              <input type="text" 
              value="<?php echo  $_POST["napomena"]; ?>"
              class="is-invalid-input" aria-describedby="opisGreska" data-invalid="" 
              aria-invalid="true" autocomplete="off" type="text" id="napomena" name="napomena" placeholder="opis artikla">
              <span class="form-error is-visible" id="opisGreska">
              <?php echo $greske["napomena"]; ?>
              </span>
              </label>
              </div> 
              <?php endif;?>
            </div>
            </div> 
          </div>   
            
            
          

           