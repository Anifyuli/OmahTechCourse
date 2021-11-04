<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Nulis - Beranda</title>
</head>
<body style="font-family: 'Griffy', cursive;">
    
<!--navbar-->
<nav class="container-fluid sticky-top navbar navbar-expand-lg navbar-light bg-white">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand text-success" href="./index.php"><span><img src="./assets/images/favicon.svg" alt="" srcset=""></span> Nulis </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mx-auto">
      <li class="nav-item active">
        <a class="nav-link text-success" href="#ringkasan"><span class="fas fa-file alt"></span> Ringkasan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success" href="#keunggulan"><span class="fas fa-medal"></span> Keunggulan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success"><span class="fas fa-user-plus" href="#login"></span> Gabung/Masuk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success" href="https://anifyuli.github.io" target="blank"><span class="fab fa-github"></span> Tentang Saya</a>
      </li>
    </ul>
  </div>
</nav>
<!--  -->

<!--Ringkasan-->
<div id="top-text">
    <div id="ringkasan" class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="text-dark mt-3">
                Selamat datang di <i> <b>Nulis</b>, tuangkan perasaanmu melalui aksara</i>
                <hr>
                <b>Nulis</b> adalah salah satu dari sekian laman web yang sangat cocok bagi anda pecinta sastra dan tulisan <br> Disini Anda dapat menuliskan segala sesuatu yang dapat memberi motivasi yang indah melalui tulisan sederhana dari Anda
                </h3>
            </div>

            <div class="col">
                <img src="./assets/images/quote.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Akhir ringkasan -->

<!-- Keunggulan -->
<div id="keunggulan">
    <div class="container-fluid my-4">
        <h2 class="text-center">
            Keunggulan-keunggulan yang dapat Anda Dapatkan dari Nulis
        </h2>
        <div class="row container-s p-2">
            <div class="col my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="text-success fas fa-rocket"></>
                        <h5 class="card-title text-success">Cepat</h5>
                        <p class="card-text text-dark">Kami berusaha untuk meningkatkan kecepatan situs kami dan cara mengunggah tulisan anda dengan lebih singkat</p>
                    </div>
                </div>
            </div>
            <div class="col my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h2 class="text-success fas fa-pen-fancy"></h2>   
                        <h5 class="card-title text-success">Sederhana</h5>
                        <p class="card-text text-dark">Kesederhanaan adalah motto kerja kami untuk selalu memberikan hal terbaik bagi penulis</p>
                    </div>
                </div>
            </div>
            <div class="col my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="fas fa-tools text-success"></h2>
                        <h5 class="card-title">Kaya Fitur</h5>
                        <p class="card-text">Editor teks yang penuh dengan fitur terbaru dan sangat menunjang kemampuan luar biasa dari Anda</p>
                    </div>
                </div>
            </div>
            <div class="col my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="fas fa-user-friends text-success"></h2>
                        <h5 class="card-title">Kenyamanan untuk Anda</h5>
                        <p class="card-text">Kami memberikan pembaruan yang akan selalu kami uji di bagian ujicoba untuk memberi kenyamanan terbaik bagi Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir keunggulan -->

<!-- Gabung/Daftar -->
<div id="login" class="my-3 py-2">
    <div class="container-lg jumbotron">
    <h5 class="display-4">Semua aksara berada di benak dan jari-jemari Anda</h5>
    <p class="lead">Bagaimana? Apakah Anda tertarik bergabung dengan para penulis, penggiat sastra, dan keluarga besar Nulis?</p>
    <hr class="my-4">
    <p>Silahkan klik tombol "Gabung" untuk untuk membuat akun baru dan tombol "Masuk" untuk masuk ke akun Anda</p>
    <a class="btn btn-success btn-lg" href="./signin.php" role="button" target="blank">Gabung</a>
    <a class="btn btn-primary btn-lg" href="./login.php" role="button" target="blank">Masuk</a>
    </div>
</div>
<!-- Akhir dari Gabung/Daftar -->

<!-- Footer -->
<footer class="container-fluid bg-dark text-white p-3">
    <h4 class="text-center text-white"><i>"Tuangkan perasaanmu melalui aksara"</i></h4>
    <p class="text-center">Created on 2021 <br> Nulis by Moh. Anif Yuliansyah and teams <br> All rights reserved <br> <a class="mx-auto text-primary" href="#top-text"> Kembali ke atas</a> </p>
</footer>
<!-- Akhir footer -->

<script src="./assets/jquery/jquery-3.6.0.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>