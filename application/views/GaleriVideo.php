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
        <h1 class="judul">GALERI VIDEO</h1>
        <!-- Hidden video div -->
        <div style="display:none;" id="video1">
          <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
            <source src="" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
        <div style="display:none;" id="video2">
          <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
            <source src="videos/video2.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
        
        <!-- data-src should not be provided when you use html5 videos -->
        <ul id="video-gallery">
          <li data-poster="video-poster1.jpg" data-sub-html="video caption1" data-html="#video1" >
            <img src="img/thumb1.jpg" />
          </li>
          <li data-poster="video-poster2.jpg" data-sub-html="video caption2" data-html="#video2" >
            <img src="img/thumb2.jpg" />
          </li>
          ...
        </ul>
      </div>
    </div>
    <span class="clearfix"></span>
    <?php include('partials/Footer.php') ?>
  </body>
</html>