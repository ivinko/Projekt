<?php include_once "config.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "add/head.php" ?>
    <style>

      </style>
  </head>
  <body>
    <div class="grid-container">
      
    <?php include_once "add/heading.php" ?>

    <?php include_once "add/menu.php" ?>

    
    <div class="grid-x">
      <div class="cell large-6">
    <h3>Map</h3>
     
        <div id="googleMap" style="width:100%;height:400px;text-align:left;"></div>
          <script>
              //funcion for google maps
              function myMap() {
                var myCenter = new google.maps.LatLng(45.560455,18.680983);
                var mapCanvas = document.getElementById("googleMap");
                var mapOptions = {center: myCenter, zoom: 15};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
              }  
          </script>
      </div>
      
      
      
      <div class="cell large-4" >
  </br>
          <div class="info-details">
            <div class="info-icon">
              <i class="fas fa-map-marker-alt fa-3x"></i>
            </div>
            <div class="info-desc">
              <h3>Adresa</h3>
              <p>Vijenac Ivana Meštrovića, Osijek</p>
            </div>
          </div>
          </br>
          <div class="info-details">
            <div class="info-icon">
              <i class="fas fa-mobile-alt fa-3x"></i>
            </div>
            <div class="info-desc">
              <h3>Kontakt</h3>
              <p><strong>Email:</strong> jedi@gmail.com</p>
              <p><strong>Broj telefona: </strong> 0995049829</p>
            </div>
          </div>
          </div> 
          
  </div>



    <?php include_once "add/podnozje.php" ?>

    <?php include_once "add/script.php" ?>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2-OWWKXPagI2nZVi-uF7msqbfi0aYtqw&callback=myMap">
</script>
  </body>
</html>
