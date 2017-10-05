<!-- Tutorial URL: http://sixrevisions.com/css/responsive-background-image/ -->
<!doctype html>
<html lang="en">
  <head>
   <?php include('partials/Head.php') ?>
  </head>
  <body>
    <?php include('partials/Header.php') ?>
    <h1 >Peta Desa Tambakrejo</h1>
    <div id="googleMap" style="width:100%;height:1000px;" align="center"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(-8.4109855,112.7071755),
    zoom:16,};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZG6z9_tXeHTn7BQ6WU2BECcNrV5hcrys&callback=myMap"></script>
<span class="clearfix"></span>
<?php include('partials/Footer.php') ?>
</body>
</html>