<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <title>Daftar Siswa</title>
</head>

<body>

    <div class="container col-md-6 mt-4 ">
        <h1>Daftar Siswa</h1>
        <div class="card">
            <div class="card-header bg-success text-white ">
                Data Siswa <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
            </div>
            <div class="card-body">
                <?php
                include('../koneksi.php');

                $id = $_GET['id'];

                $data = mysqli_query($koneksi,"SELECT * FROM siswa where id = '$id'");

                $row = mysqli_fetch_assoc($data);

                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" require class="form-control" value="<?= $row['nama'];?>">
                        <input type="hidden" name="id" require class="form-control" value="<?= $row['id'];?>">
                    </div>
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="jumlah" class="form-control" value="<?= $row['no_hp'];?>">
                    </div>

                  
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
                </form>

                <?php
                include('../koneksi.php');

                if(isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $nama = $_POST['nama'];
                    $no_hp = $_POST['no_hp'];
   

                   mysqli_query($koneksi,"update siswa set nama='$nama',no_hp='$no_hp' where id = '$id'") or die(mysqli_error($koneksi));

                    
                    echo "<script>alert('Data berhasil disimpan.');window.location='index.php';</script>";
                }


                ?>
            </div>

        </div>

    </div>


</body>

</html>