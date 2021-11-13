<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../login.php");
}

include "../connect.php"

?>

<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/x-icon">
    <title>Nulis - Halaman Admin</title>
</head>
<body>
<div class="container-fluid">
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
                    Pengguna <a href="./tambah.php" class="btn btn-sm btn-primary float-right"><span class="fas fa-user-plus"></span> Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengguna</th>
                                <th>Kata Sandi</th>
                                <th>Level</th>
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
                                <a href="./edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning"><span class="fas fa-edit"></span> Edit</a>
                                <a href="./hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span> Hapus</a>
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
                            <th>Tanggal</th>
                            <th>Penulis</th>
                            <th>Konten</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ("connect.php");
                            $data = mysqli_query($conn, "SELECT * FROM artikel") or die(mysqli_error($connect));

                            $no = 1;

                            while($row = mysqli_fetch_assoc($data)) {
                        ?>

                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['judul']; ?></td>
                            <td><?= $row['tanggal']; ?></td>
                            <td><?= $row['penulis']; ?></td>
                            <td><?= $row['konten']; ?></td>
                            <td>
                               <a href="./edit-artikel.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning"><span class="fas fa-edit"></span> Edit</a>
                               <a href="./hapus-artikel.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span> Hapus</a>
                            </td>
                        </tr>

                        <?php $no++; } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>