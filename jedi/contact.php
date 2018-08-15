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

    <div class="grid-container">
    <h3>Map</h3>
      <div class="grid-x">
      <div class="cell large-6">
        <div id="googleMap" style="width:100%;height:400px;"></div>
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
      </div>  
  </div>



    <?php include_once "add/podnozje.php" ?>

    <?php include_once "add/script.php" ?>
  </body>
</html>
