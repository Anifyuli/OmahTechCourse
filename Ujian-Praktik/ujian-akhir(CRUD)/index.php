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
    <title>Beranda</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">e-Kontak</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#home">Beranda <span class="sr-only">(current)</span></a>
            <li class="nav-item">
                <a class="nav-link" href="#features">Fitur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Kontak Anda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://anifyuli.github.io">Tentang</a>
            </li>
            </ul>
        </div>
    </nav>
    
    <div class="container-fluid my-3 mx-auto">
        <div id="home">
            <div class="jumbotron jumbotron-fluid rounded">
                <div class="container">
                    <h1 class="display-4">Selamat Datang <br> di e-Kontak</h1>
                    <p class="lead"> <i>"Aplikasi berbasis web yang dapat mengolah nomor telepon yang penting untuk anda"</i> </p>
                </div>
            </div>
        </div>

        <div id="features" class="my-3">
            <h3>Fitur e-Kontak</h3>
            <ul class="list-group fluid">
                <li class="list-group-item active">Menyimpan kontak anda di basis data</li>
                <li class="list-group-item">Dapat memberikan nama dengan karakter lebih panjang</li>
                <li class="list-group-item active">Dapat menyimpan alamat kontak anda</li>
                <li class="list-group-item">Fitur dapat mengalami pembaruan sewaktu-waktu</li>
            </ul>
        </div>

        <div id="contact" class="my-3">
            <h4>Akun Anda</h4>
                <div class="card text-left">
                    <div class="card-body">
                        <h5 class="card-title">Anda ingin mencoba fitur e-Kontak</h5>
                        <p class="card-text">Silahkan ketuk tombol di bawah ini untuk mencobanya</p>
                        <a href="./lihat.php" class="btn btn-lg btn-success" target="blank">Coba Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
<br>
        <footer class="container-fluid p-3 text-center bg-dark text-light">
            <p>e-Kontak <br> Sidomukti 04/IV  Margoyoso, Pati, Jawa Tengah</p>
            <small>Web adalah merk terdaftar</small>
        </footer>
</body>
</html>