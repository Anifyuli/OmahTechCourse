<!DOCTYPE html>
<html lang="in">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Tambah pengguna</title>
</head>

<body>
    <div class="container my-3 mx-auto">
        <h1>Daftar Pengguna</h1>
        <div class="card">
            <div class="card-header bg-success text-white ">
                Data Pengguna <a href="./tambah.php" class="btn btn-sm btn-primary float-right"><span class="fas fa-plus"></span> Tambah</a>
            </div>
            <div class="card-body">
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
				include('../connect.php');
                // $data = mysqli_query($conn, "SELECT * FROM buku where id = '$id'");
                // while($row = mysqli_fetch_assoc($data)) {}
				if (isset($_POST['submit'])) {
				
					$username = $_POST['username'];
					$password = $_POST['password'];
					$level = $_POST['level'];

					
					$datas = mysqli_query($conn, "INSERT into user (username,password,level)values('$username','$password','$level')") or die(mysqli_error($conn));
				
					echo "<script>alert('Kontak berhasil disimpan!');window.location='home.php';</script>";
				}
				?>
            </div>
        </div>
    </div>

</body>

</html>