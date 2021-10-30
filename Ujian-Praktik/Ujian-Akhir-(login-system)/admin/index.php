<?php 
session_start();
if(!isset($_SESSION['admin'])){

      header("Location: ../login.php");
}

include "../connect.php";


?>
<!DOCTYPE html>
<html lang="in-ID">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Admin</title>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="#">Halaman Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link" href="./pengguna/lihat.php">Pengguna</a>
        <a class="nav-link" href="./buku/lihat.php/">Buku</a>
        <a class="nav-link active btn btn-danger" href="../logout.php"><span class="fas fa-sign-out-alt"> Keluar</span></a>
    </div>
    </nav>
    
    <div class="mt-5 mx-3 p-2 my-3 bg-info text-light rounded-sm row">
        <div class="col">
        <h1>Selamat datang, Admin</h1>
        <p>Semoga harimu menyenangkan</p>
        </div>
        <div class="col">
            <div class="mt-3 d-block fas fa-user fa-4x text-right"></div>
        </div>
    </div>

    <div class="container-fluid my-5 mx-auto">
        <h3 class="text-dark">Daftar Pengguna</h3>
        <div class="card">
            <div class="card-header bg-success text-white">
                Pengguna <a href="./tambah-pengguna.php" class="btn btn-sm btn-primary float-right"><span class="fas fa-user-plus"></span> Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Kata Sandi</th>
                            <th>Pengguna</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ("connect.php");
                            $data = mysqli_query($conn, "SELECT * FROM user") or die(mysqli_error($connect));

                            $no = 1;

                            while($row = mysqli_fetch_assoc($data)) {
                        ?>

                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td><?= $row['password']; ?></td>
                            <td><?= $row['level']; ?></td>
                            <td>
                               <a href="./edit-pengguna.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning"><span class="fas fa-edit"></span> Edit</a>
                               <a href="./hapus-pengguna.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span> Hapus</a>
                            </td>
                        </tr>

                        <?php $no++; } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 mx-auto">
        <h3 class="text-dark">Daftar Buku</h3>
        <div class="card">
            <div class="card-header bg-success text-white">
                Buku <a href="./tambah-buku.php" class="btn btn-sm btn-primary float-right"><span class="fas fa-plus"></span> Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Deskripsi</th>
                            <th>Jenis</th>
                            <th>Peminjam</th>
                            <th>Jumlah</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ("connect.php");
                            $data = mysqli_query($conn, "SELECT * FROM buku") or die(mysqli_error($connect));

                            $no = 1;

                            while($row = mysqli_fetch_assoc($data)) {
                        ?>

                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['idbuku']; ?></td>
                            <td><?= $row['judul']; ?></td>
                            <td><?= $row['pengarang']; ?></td>
                            <td><?= $row['penerbit']; ?></td>
                            <td class="text-md"><?= $row['deskripsi']; ?></td>
                            <td><?= $row['jenis']; ?></td>
                            <td><?= $row['terpinjam']?></td>
                            <td><?= $row['jumlah']?></td>
                            <td>
                               <a href="./edit-buku.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning"><span class="fas fa-edit"></span> Edit</a>
                               <a href="./hapus-buku.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span> Hapus</a>
                            </td>
                        </tr>

                        <?php $no++; } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white container-fluid py-3">
        <p>Administration pages, by Moh Anif Yuliansyah</p>
        <p>Hak cipta dibawah Undang-Undang</p>
    </footer>

</body>
</html>