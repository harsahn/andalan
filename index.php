<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


  <!-- MY CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <!-- ICON -->
  <link rel="stylesheet" href="assets/icon/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/icon/icofont/css/icofont.css">
  <title>Hello, world!</title>
</head>

<body>


  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">Andalan Properti</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Cari Properti <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Dijual</a>
          <a class="nav-item nav-link" href="#">Disewakan</a>
          <a class="nav-item nav-link" href="#">Kontak</a>
          <a class="nav-item nav-link" href="#">Berita</a>
          <a class="nav-item btn btn-primary tombol" href="#">Masuk</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- AKHIR NAVBAR -->

  <!-- JUMBUTRON -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">


      <div class="card card-cover">
        <div class="card-body">
          <h1 class="display-4">Tempat Terbaik <span>Menemukan</span> Properti Idaman <span>Anda</span></h1>
          <div class="input-group mb-5 justify-content-center align-items-center">
            <div class="input-group-prepend">
              <button class="btn btn-primary dropdown-toggle pilih" type="button" data-toggle="dropdown" aria-expanded="false">Pilih Properti</button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Rumah</a>
                <a class="dropdown-item" href="#">Ruko</a>
                <a class="dropdown-item" href="#">Gudang</a>
                <a class="dropdown-item" href="#">Tanah Kavling</a>

              </div>
            </div>
            <input type="text" class="form-control col-lg-6 col-sm-12 input" aria-label="Text input with dropdown button" placeholder="Masukkan lokasi atau pengembang">
            <button type="button" class="btn btn-primary ml-2"><i class="icofont icofont-ui-search cari"></i></button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <h1 class="text text-center text-slogan font-italic">AYO BERINVESTASI DENGAN AMAN BERSAMA KAMI</h1>


  <div class="card card-box">
    <div class="card-body">
      <div class="row  box-row">
        <?php
        $a = 15;
        for ($i = 0; $i < $a; $i++) { ?>
          <div class="col col-sm-12 col-lg-3 mb-5">
            <div class="card box-gambar">
              <img src="image/rumah.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <button class="badge badge-primary badge-sm">Dijual</button>
                <h4>Rp 430.000.000</h4>
                <p class="card-text">judul Dijual rumah graha cemerlang DP KPR dan model terserah anda</p>
                <p class="card-text">Batangase, Kabupaten Maros</p>

              </div>
            </div>
          </div>

        <?php } ?>
      </div>




    </div>
  </div>




  <!-- #JUMBUTRON -->



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>