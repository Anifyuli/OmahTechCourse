<!DOCTYPE html>
<html lang="in">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Edit Data</title>
</head>

<body>
    <div class="container my-3 mx-auto">
        <h1>Edit Data</h1>
        <div class="card">
            <div class="card-header bg-success text-white ">
                Data Pengguna <a href="./tambah-buku.php" class="btn btn-sm btn-primary float-right">Tambah</a>
            </div>
            <div class="card-body">
                <?php
                include('../connect.php');

                $id = $_GET['id']; //mengambil id barang yang ingin diubah

                //menampilkan pengguna berdasarkan id
                $data = mysqli_query($conn,"SELECT * FROM user WHERE id='$_GET[id]'");
                $row = mysqli_fetch_assoc($data);
                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="text" name="username" required="" class="form-control" value="<?= $row['username']; ?>">
                        <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">

                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" value="<?= $row['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Level (admin/user) </label>
                        <input type="text" name="level" class="form-control" value="<?= $row['level']; ?>">
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Perbarui</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {

                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];


                    $datas= mysqli_query($conn, "UPDATE user SET username='$username', password='$password', level='$level' where id ='$id'") or die(mysqli_error($conn));

                    echo "<script>alert('Data berhasil disimpan!');window.location='./home.php';</script>";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>