<!-- Tutorial URL: http://sixrevisions.com/css/responsive-background-image/ -->
<!doctype html>
<html lang="en">
  <head>
    <?php include('partials/Head.php') ?>
  </head>
  <body style="padding:0;margin:0">
    <?php include('partials/Header.php') ?>
    <div class="section">
      <div class="sendiki">
        <a href="<?php echo base_url('index.php/C_GaleriFoto/index') ?>"><h1 class="judul">PANTAI SENDIKI</h1></a>
        <ul id="rig">
          <?php foreach($sendiki as $gambar){ ?>
          <li>
            <a class="rig-cell" href="#">
              <img class="rig-img" src="<?php echo base_url().'uploads/'.$gambar->link; ?>">
              <span class="rig-overlay"></span>
              <span class="rig-text"><?php echo $gambar->judul ?></span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class="tamban">
        <a href="<?php echo base_url('index.php/C_GaleriFoto/index') ?>"><h1 class="judul">PANTAI TAMBAN</h1></a>
        <ul id="rig">
          <?php foreach($tamban as $gambar){ ?>
          <li>
            <a class="rig-cell" href="#">
              <img class="rig-img" src="<?php echo base_url().'uploads/'.$gambar->link; ?>">
              <span class="rig-overlay"></span>
              <span class="rig-text"><?php echo $gambar->judul ?></span>
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
    <div class="isi" style="margin-top: -100px">
      <div class="col-sm-12 news">
        <section class="banner-sec">
          <div class="container">
          <!-- <h1 class="judulprofil">Berita Tentang Desa</h1> -->
            <div class="row">
             
              <div class="col-md-9 top-slider">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                  <?php $i = 0; ?>
                  <?php foreach($event2 as $data){ ?>
                    <div class="carousel-item <?php if($i==0){echo "active";} ?>">
                      <div class="news-block">
                        <div class="news-media"><img class="img-fluid" src="<?php echo base_url().'uploads/'.$data->link ?>" alt=""></div>
                        <div class="news-title">
                          <a href="<?php echo base_url("index.php/C_news/index/").$data->id ?>"><h2 class=" title-large" style="font-size: 26px"><?php echo $data->judul ?></h2></a>
                        </div>
                        <h2 class=" title-small"><?php echo $data->deskripsi ?></h2>
                        <div class="time-text"><?php echo date ("d/m/Y h:ia",strtotime($data->tgl)); ?></div>
                        <div></div>
                      </div>
                    </div>
                    <?php $i++;} ?>
                  </div>
                </div>
              </div>
               <div class="col-md-3" style="">
              
              <?php foreach($event as $event) {?>
                <div class="col-md-12 card" style="margin-bottom: 20px;padding:0"> <img class="img-fluid" src="<?php echo base_url().'uploads/'.$event->link ?>" alt="">
                  <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
                  <div class="card-body">
                    <div class="news-title">
                      <h2 class=" title-small"><a href="#"><?php echo $event->judul ?></a></h2>
                    </div>
                    <p class="card-text"><small class="text-time"><em><?php echo date ("d/m/Y h:ia",strtotime($event->tgl));?></em></small></p>
                  </div>
                </div>
                <?php } ?>
                
              </div>
            </div>
          </div>
        </section>
      </div>
      
    </div>
    
  </div>
  <span class="clearfix"></span>
  <?php include('partials/Footer.php') ?>
</body>
</html>