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
        <h1 class="judul">PANTAI SENDIKI</h1>
        <ul id="rig">
          <?php foreach($sendiki as $gambar){ ?>
          <li>
            <a class="rig-cell" href="#">
              <img class="rig-img" src="<?php echo base_url().'uploads/'.$gambar->link; ?>">
              <span class="rig-overlay"></span>
              <span class="rig-text">Lorem Ipsum Dolor</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class="tamban">
        <h1 class="judul">PANTAI TAMBAN</h1>
        <ul id="rig">
          <?php foreach($tamban as $gambar){ ?>
          <li>
            <a class="rig-cell" href="#">
              <img class="rig-img" src="<?php echo base_url().'uploads/'.$gambar->link; ?>">
              <span class="rig-overlay"></span>
              <span class="rig-text">Lorem Ipsum Dolor</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="profil">
      <h1 class="judulprofil">DESA WISATA TAMBAKREJO</h1>
      <p style="color:rgba(0,0,0,0.7)">Desa wisata Tambarejo terletak di Kecamatan Sumbermanjing Wetan Kabupaten Malang. Topografi wilayah merupakan dataran sedang dengan ketinggian 75 meter di atas permukaan laut.</p>
      <p><a class="button profilbutton" id="load-more-content" href="#top">Profil lengkap</a></p>
    </div>
    <div class="isi">
      <div class="col-sm-12 news">
        <div id="columns">
          <?php foreach($event as $event){ ?>
          <figure>
            <img src="<?php echo base_url().'uploads/'.$event->link; ?>">
            <figcaption>
            <h4><?php echo $event->judul ?></h4>
            <p class="admin">Admin, <?php echo $event->tgl ?></p>
            <?php ECHO $event->deskripsi ?></figcaption>
            <p><a href="#" class="btn btn-primary" role="button">Selengkapnya</a></p>
          </figure>
          <?php } ?>
          
          
        </div>
        <!--  -->
      </div>
      
    </div>
    
  </div>
  <span class="clearfix"></span>
  <?php include('partials/Footer.php') ?>
</body>
</html>