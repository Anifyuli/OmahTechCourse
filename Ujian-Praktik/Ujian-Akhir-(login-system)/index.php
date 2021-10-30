<!DOCTYPE html>
<html lang="in-ID">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Beranda</title>
</head>
<body class="bg-success">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
        <a class="navbar-brand" href="#">Perpustakaan Al-Hikmah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#home">Beranda <span class="sr-only">(current)</span></a>
            <li class="nav-item">
                <a class="nav-link" href="#card">Keunggulan kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#login/regist">Akun</a>
            </li>
            </ul>
        </div>
        </nav>

    <section id="home" class="container-fluid my-3 mx-auto">
            <div class="jumbotron jumbotron-fluid rounded bg-info text-white">
                <div class="container">
                    <h1 class="display-4">Selamat Datang <br> di Perpus Daring <br> Al-Hikmah</h1>
                    <p class="lead"> <i>"Perpustakaan yang menyediakan bermacam-macam jenis buku bacaan yang bermanfaat untuk dibaca"</i> </p>
                </div>
            </div>
    </section>

    <section id="card" class="container-fluid">
        <h4 class="text-white">Yang anda dapatkan dari Perpus daring</h4>
        <div class="card-deck my-3 text-dark">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">Koleksi buku lengkap</h5>
                    <p class="card-text">Kami memiliki bermacam-macam jenis buku yang cocok untuk mengisi waktu anda</p>
                </div>
            </div>
        </div>
        <div class="card-deck my-3 text-dark">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">Cara meminjam dengan mudah</h5>
                    <p class="card-text">Kami memberikan tata cara yang sangat mudah untuk meminjam buku di perpustakaan daring</p>
                </div>
            </div>
        </div>
        <div class="card-deck my-3 text-dark">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">Tanyakan jika kesulitan</h5>
                    <p class="card-text">Kami mencoba untuk memberikan solusi terbaik untuk menangani masalah yang ketika menikmati layanan kami</p>
                </div>
            </div>
        </div>
    </section>

    <section id="login/regist" class="container-fluid my-5">
        <h4 class="text-white">Akun Anda</h4>
        <div class="card bg-light py-2 text-left text-dark">
            <div class="card-body">
                <h5 class="card-title">Masuk/Daftar</h5>
                <p class="card-text">Silahkan ketuk tombol di bawah ini untuk mendaftar atau masuk ke akun anda</p>
                <a href="./login.php" class="btn btn-lg btn-primary" target="blank">Masuk</a>
                <a href="./sign-in.php" class="btn btn-lg btn-success" target="blank">Daftar</a>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-left text-white container-fluid py-3 m-n2">
        <div class="row mx-n2">
            <div class="col list-unstyled m-3">
                <p class="font-weight-bolder">Bantuan</p>
                <li>Cara meminjam buku</li>
                <li>Membuat akun</li>
                <li>Cara mengembalikan buku</li>
                <li>Lapor ke kami</li>
            </div>
            <div class="col list-unstyled m-3">
                <p class="font-weight-bolder">Tentang Kami</p>
                <li>Desa Sidomukti 04/IV, Margoyoso, Pati, Jateng</li>
                <li><i>Perpustakaan daring untuk semua</i></li>
            </div>
            <div class="col list-unstyled m-3">
                <p class="font-weight-bolder">Hubungi kami</p>
                <li><span class="fab fa-facebook"> </span> Facebook</li>
                <li><span class="fab fa-twitter"> </span> Twitter</li>
                <li><span class="fab fa-instagram"> </span> Instagram</li>
                <li><span class="fab fa-telegram"> </span> Telegram</li>
            </div>
        </div>
    </footer>

</body>
</html>