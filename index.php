<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>LSP Digital ID</title>
</head>
<style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        background-image : url("https://image.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg");
        background-repeat : no-repeat;
        background-size : cover;
      }
      .hero-text{
        text-align: center;
        position: absolute;
        top: 35%;
        left: 50%;
        transform: translate(-50%, -50%);
        color : black;
      }
      .mapouter{
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        
      }

      .footer{
        position: absolute;
        left :1100px;
        bottom: 0;
      }
</style>
<body>
   

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">
    <img src="https://png2.cleanpng.com/sh/2bd2c5cb247203d05f80ae8e02b54d82/L0KzQYm3VcE4N6tAfZH0aYP2gLBuTfNpbZJ5Rdd3Z3nxdX7qiPVifJpzf59ybj35ebXsj71oaZ5qi59qbnT1f7rrTcVibpU2SaRuMkm1Q4m5Tsc2PmoAUKQBMUW1Roa6VMQ1PmI7UKc3cH7q/kisspng-cheat-engine-cheating-in-video-games-android-5afd112e292382.7569982615265344461685.png" width="30" height="30" alt="">
    LSPDIGITAL  |
    </a>
   
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li nav-item >
    <a class = "nav-link active" href="#">Menu</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Information
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">FAQ</a>
          <a class="dropdown-item" href="#">Event</a>
          <a class="dropdown-item" href="#">Learning</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Media
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Instagram</a>
          <a class="dropdown-item" href="#">Facebook</a>
          <a class="dropdown-item" href="#">Youtube</a>
        </div>
      </li>
    </div>
  </div>
    </ul>
      <ul id="uwu" class="navbar-nav ml-auto">
      <li nav-item>
        <a class="nav-link active mr-2" href="#">Login</a>
      </li>
      <li nav-item>
        <a class="nav-link active " > |</a>
      </li>
      <li nav-item>
        <a class="nav-link active mr-5" href="#">Register</a>
      </li>
    </ul>
</nav>
<div class="w3-sidebar w3-sand w3-bar-block" style="width:10%">
  <u><h3 class="w3-bar-item w3-sand" >Menu</h3></u>
  <a href="#" class="w3-bar-item w3-button w3-sand">Visi Misi</a>
  <a href="#" class="w3-bar-item w3-button w3-sand">Mitra Kerja</a>
  <a href="#" class="w3-bar-item w3-button w3-sand">Struktur Organisasi</a>
</div>
<div class="hero-text">
  <h1>Lembaga Sertifikasi Profesi</h1>
      <br>
  <h3>Mengapa Kami?</h3>
  
  <h5>Karena komitmen kami untuk meningkatkan kebertrimaan Sertifikat Kompetensi oleh industri baik di tingkat nasional maupun internasional.</h5>
</div>
<br>
<div class="mapouter"><div class="gmap_canvas"><iframe width="200" height="200" id="gmap_canvas"
     src="https://maps.google.com/maps?q=medan%20tuntungan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <br><style>.mapouter{position:fixed;text-align:center;height:210px;width:700px;}</style>
    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
</body>
<footer>
      <div class="footer">
        <?php 
        require 'vendor/autoload.php';
        use Carbon\Carbon;
        $waktuskrg = Carbon::now();
        echo "Waktu Sekarang : $waktuskrg :"; ?>
        </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>