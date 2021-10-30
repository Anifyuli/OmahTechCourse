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
    <title>Edit Data</title>
</head>

<body>
    <div class="container my-3 mx-auto">
        <h1>Edit Data</h1>
        <div class="card">
            <div class="card-header bg-success text-white ">
                Data Buku <a href="./tambah-buku.php" class="btn btn-sm btn-primary float-right">Tambah</a>
            </div>
            <div class="card-body">
                <?php
                include('../connect.php');

                $id = $_GET['id']; //mengambil id barang yang ingin diubah

                //menampilkan barang berdasarkan id
                $data = mysqli_query($conn,"SELECT * FROM buku WHERE id='$_GET[id]'");
                $row = mysqli_fetch_assoc($data);
                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="idbuku" required="" class="form-control" value="<?= $row['idbuku']; ?>">
                        <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">

                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?= $row['judul']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" value="<?= $row['pengarang']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" value="<?= $row['penerbit']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="<?= $row['deskripsi']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Jenis</label>
                        <input type="text" name="jenis" class="form-control" value="<?= $row['jenis']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Terpinjam</label>
                        <input type="text" name="terpinjam" class="form-control" value="<?= $row['terpinjam']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" value="<?= $row['jumlah']; ?>">
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Perbarui</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {

                    $id = $_POST['id'];
                    $idbuku = $_POST['idbuku'];
                    $judul = $_POST['judul'];
                    $pengarang = $_POST['pengarang'];
                    $penerbit = $_POST['penerbit'];
                    $deskripsi = $_POST['deskripsi'];
                    $jenis = $_POST['jenis'];
                    $terpinjam = $_POST['terpinjam'];
                    $jumlah = $_POST['jumlah'];


                    $datas= mysqli_query($conn, "UPDATE buku SET idbuku='$idbuku', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', deskripsi='$deskripsi', jenis='jenis',terpinjam='$terpinjam', jumlah='$jumlah' where id ='$id'") or die(mysqli_error($conn));

                    echo "<script>alert('Data berhasil disimpan!');window.location='./index.php';</script>";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>