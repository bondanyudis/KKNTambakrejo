<!-- Tutorial URL: http://sixrevisions.com/css/responsive-background-image/ -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Responsive Full Background Image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Six Revisions">
    <meta name="description" content="How to use the CSS background-size property to make an image fully span the entire viewport.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
    <link rel="icon" href="http://sixrevisions.com/favicon.ico" type="image/x-icon" />
    <link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/dropdown.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/theme.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>js/style.js"></script>
  </head>
  <body>
    <nav class="navbar" id="top">
      <div class="inner" id="inner">
        <div class="dropdownleft">
          <a  href="#"><i class="fa fa-facebook"></i></a>
          <a  href="#"><i class="fa fa-twitter"></i></a>
          <a  href="#"><i class="fa fa-youtube"></i></a>
        </div>
        <div class="dropdownright">
          <a href="">Bantuan</a>
          <a href="">Kontak</a>
          <a href="" >FAQ</a>
        </div>
      </div>
      <div class="inner2">
        <ul class="menu">
          <li><a class="homer" href="#"><i class="fa fa-home"></i> HOME</a></li>
          <li><a  href="#"><i class="fa fa-map-marker"></i> PETA LOKASI</a></li>
          <li><a  href="#"><i class="fa fa-envelope"></i> PROFIL</a>
          <ul class="sub-menu">
            <li><a href="#">DESA</a></li>
            <li><a href="#">PANTAI</a>
            <ul>
              <li><a href="#">PANTAI SENDIKI</a></li>
              <li><a href="#">PANTAI TAMBAN</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a  href="#"><i class="fa fa-bullhorn"></i>HOMESTAY</a></li>
      <li><a  href="#"><i class="fa fa-tags"></i>EVENT</a>
      <ul class="sub-menu">
        <li><a href="#">KEGIATAN BALAI DESA</a></li>
        <li><a href="#">KEGIATAN WARGA</a>
        <ul>
          <li><a href="#">KEMERDEKAAN</a></li>
          <li><a href="#">BESIH DESA</a></li>
          <li><a href="#">PETIK LAUT</a></li>
          <li><a href="#">GERAK JALAN</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a  href="#"><i class="fa fa-camera"></i> GALERI</a></li>
</ul>
</div>
</nav>
<header class="container">
<div class="content">
<h1>DESA WISATA TAMBAKREJO</h1>
<p class="sub-title" style="font-size: 25px">Kecamatan Sumbermanjing Wetan, Kabupaten Malang</p>
<p><a class="button" id="load-more-content" href="#top">Profil lengkap</a></p>
<!-- Some content to demonstrate viewport scrolling behavior -->
<div id="more-content">
  <p><br />Background image courtesy of <br /> <a href="http://unsplash.com/" target="_blank">Unsplash</a>.</p>
</div>
</div>
</header>
<div class="section">
  <div class="sendiki">
  <h1 class="judul">PANTAI SENDIKI</h1>
  <ul id="rig">
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/sendiki.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Lorem Ipsum Dolor</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/sendiki2.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Consectetur Adipiscing</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/sendiki3.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Vivamus ut Felis</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/sendiki.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Curabitur tempus</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/sendiki3.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Vivamus ut Felis</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/sendiki.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Curabitur tempus</span>
        </a>
    </li>
    </ul>
    </div>
    <div class="tamban">
      <h1 class="judul">PANTAI TAMBAN</h1>
   <ul id="rig">
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/tamban.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Lorem Ipsum Dolor</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/tamban2.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Consectetur Adipiscing</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/tamban3.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Vivamus ut Felis</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/tamban2.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Curabitur tempus</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/tamban3.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Vivamus ut Felis</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="<?php echo base_url() ?>images/tamban.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Curabitur tempus</span>
        </a>
    </li>
    </ul>
    </div>
</div>
<div class="profil">
  <h1 class="judulprofil">DESA WISATA TAMBAKREJO</h1>
  <p style="color:rgba(0,0,0,0.7)">Desa wisata Tambarejo terletak di Kecamatan Sumbermanjing Wetan Kabupaten Malang. Topografi wilayah merupakan dataran sedang dengan ketinggian 75 meter di atas permukaan laut.</p>
  <p><a class="button profilbutton" id="load-more-content" href="#top">Profil lengkap</a></p>
</div>
<div class="isi">
  <div class="col-sm-9 news">
      <!-- <h2>PARIWISATA</h2> -->
        <div class="col-md-6">
          <div class="thumbnail">
            <img src="<?php echo base_url() ?>images/tamban2.jpg" alt="...">
            <div class="caption" style="text-align:center">
              <h3>Bersih Desa Warga</h3>
              <div style="margin-top: 15px">
                <p style="text-align:left;border-bottom: 1px solid rgba(0,0,0,0.3);font-size: 15px">Admin, 24 Agustus 2017 11:40 AM</p>
                <p style="font-size: 18px">Acara bersih desa yang dilakukan pada hari kamis yang mana diiringin oleh hujan</p>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Selengkapnya...</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 announ">
          <div class="thumbnail">
            <img src="<?php echo base_url() ?>images/tamban3.jpg" alt="...">
            <div class="caption" style="text-align:center">
              <h3>Petik Laut di Sendang Biru</h3>
              <div style="margin-top: 15px">
                <p style="text-align:left;border-bottom: 1px solid rgba(0,0,0,0.3);font-size: 15px">Admin, 24 Agustus 2017 11:40 AM</p>
                <p style="font-size: 18px">Acara bersih desa yang dilakukan pada hari kamis yang mana diiringin oleh hujan</p>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Selengkapnya...</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail">
            <img src="<?php echo base_url() ?>images/sendiki2.jpg" alt="...">
            <div class="caption" style="text-align:center">
              <h3>Petik Laut di Sendang Biru</h3>
              <div style="margin-top: 15px">
                <p style="text-align:left;border-bottom: 1px solid rgba(0,0,0,0.3);font-size: 15px">Admin, 24 Agustus 2017 11:40 AM</p>
                <p style="font-size: 18px">Acara bersih desa yang dilakukan pada hari kamis yang mana diiringin oleh hujan</p>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Selengkapnya...</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail">
            <img src="<?php echo base_url() ?>images/tamban.jpg" alt="...">
            <div class="caption" style="text-align:center">
              <h3>Petik Laut di Sendang Biru</h3>
              <div style="margin-top: 15px">
                <p style="text-align:left;border-bottom: 1px solid rgba(0,0,0,0.3);font-size: 15px">Admin, 24 Agustus 2017 11:40 AM</p>
                <p style="font-size: 18px">Acara bersih desa yang dilakukan pada hari kamis yang mana diiringin oleh hujan</p>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Selengkapnya...</a>
            </div>
          </div>
        </div>
        
      </div>
      <div class="sampingan col-sm-3">
        <div class="list-group">
        <!-- <h3 style="color: rgba(0,0,0,0.5);text-align: center;margin-bottom: 5px">Berita</h3> -->
          <a href="#" class="list-group-item">
                <div class="col-md-6" style="padding:0;">
                        <img class="media-object img-rounded img-responsive"  src="<?php echo base_url() ?>images/sendiki.jpg" alt="placehold.it/350x250">
                </div>
                <div class="col-md-6" style="padding:0px 4px;">
                    <p class="list-group-item-text"> Kegiatan bersih desa dilakukan oleh segenap warga desa...
                    </p>
                </div>
          </a>
         <a href="#" class="list-group-item">
                <div class="col-md-6" style="padding:0;">
                        <img class="media-object img-rounded img-responsive"  src="<?php echo base_url() ?>images/sendiki.jpg" alt="placehold.it/350x250">
                </div>
                <div class="col-md-6" style="padding:0px 4px;">
                    <p class="list-group-item-text"> Kegiatan bersih desa dilakukan oleh segenap warga desa...
                    </p>
                </div>
          </a>
          <a href="#" class="list-group-item">
                <div class="col-md-6" style="padding:0;">
                        <img class="media-object img-rounded img-responsive"  src="<?php echo base_url() ?>/images/sendiki.jpg" alt="placehold.it/350x250">
                </div>
                <div class="col-md-6" style="padding:0px 4px;">
                    <p class="list-group-item-text"> Kegiatan bersih desa dilakukan oleh segenap warga desa...
                    </p>
                </div>
          </a>
          <a href="#" class="list-group-item">
                <div class="col-md-6" style="padding:0;">
                        <img class="media-object img-rounded img-responsive"  src="<?php echo base_url() ?>images/sendiki.jpg" alt="placehold.it/350x250">
                </div>
                <div class="col-md-6" style="padding:0px 4px;">
                    <p class="list-group-item-text"> Kegiatan bersih desa dilakukan oleh segenap warga desa...
                    </p>
                </div>
          </a>
          <a href="#" class="list-group-item">
                <div class="col-md-6" style="padding:0;">
                        <img class="media-object img-rounded img-responsive"  src="<?php echo base_url() ?>images/sendiki.jpg" alt="placehold.it/350x250">
                </div>
                <div class="col-md-6" style="padding:0px 4px;">
                    <p class="list-group-item-text"> Kegiatan bersih desa dilakukan oleh segenap warga desa...
                    </p>
                </div>
          </a>
        </div>
      </div>
      </div>
      <span class="clearfix"></span>
      <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Logo <span>Desa Tambakrejo</span></h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Profil</a>
          ·
          <a href="#">Peta Lokasi</a>
          ·
          <a href="#">Event</a>
          ·
          <a href="#">Galeri</a>
          ·
        </p>

        <p class="footer-company-name">LPPM UB &copy; 2017</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Jalan Veteran</span>Malang, Jawa Timur</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>0865 **** ****</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">lppm@ub.ac.id</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Tentang LPPM UB</span>
          LPPM UB (Universitas Brawijaya) adalah Lembaga yang mana menangani masalah.....
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>
</body>
</html>