<!-- Tutorial URL: http://sixrevisions.com/css/responsive-background-image/ -->
<!doctype html>
<html lang="en">
  <head>
   <?php include('partials/Head.php') ?>
  </head>
  <body>
  <?php include('partials/Header.php') ?>
<div class="section">
  <div class="sendiki">
  <h1 class="judul">GALERI FOTO</h1>
  <ul id="rig">
  <?php foreach($user as $foto) {?>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url().'uploads/'.$foto->link ?>">
            <span class="rig-overlay"></span>
            <span class="rig-text"><?php echo $foto->judul ?></span>
        </a>
    </li>
    <?php } ?>
    </ul>
    </div>
</div>
      <span class="clearfix"></span>
      <?php include('partials/Footer.php') ?>
</body>
</html>