<!-- Tutorial URL: http://sixrevisions.com/css/responsive-background-image/ -->
<!doctype html>
<html lang="en">
  <head>
    <?php include('partials/Head.php') ?>
  </head>
  <body>
    <?php include('partials/Header.php') ?>
    <div class="isi">
    <?php foreach($news as $news) {?>
      <div class="col-sm-12 news">
        <h2 style="color: rgba(0,0,0,0.8);text-align: center;margin-bottom: 30px"><?php echo $news->judul ?></h2>
        <div class="col-sm-4">
          <img class="col-sm-12 img-thumbnail" src=" <?php echo base_url().'uploads/'.$news->link ?>" alt="">
        </div>
        <div class="col-sm-8" style="color:rgba(0,0,0,0.5)">
          <p><?php echo $news->deskripsi ?></p>
        </div>
      </div>
      <?php } ?>
    </div>
    <span class="clearfix"></span>
    <?php include('partials/Footer.php') ?>
  </body>
</html>