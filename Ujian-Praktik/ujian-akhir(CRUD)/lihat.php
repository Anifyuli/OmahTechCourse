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
    <title>e-Kontak</title>
</head>
<body>
    <div class="container my-3 mx-auto">
        <h1>e-Kontak</h1>
        <div class="card">
            <div class="card-header bg-success text-white ">
				Daftar Kontak <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
            <div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            include ("connect.php");
                            $data = mysqli_query($connect, "SELECT * FROM contact") or die(mysqli_error($connect));

                            $no = 1;

                            while($row = mysqli_fetch_assoc($data)) {
                        ?>

                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['no_tlp']; ?></td>
                            <td>
                               <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                               <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        

                        </tr>

                        <?php $no++; } ?>

					</tbody>
				</table>
			</div>
        </div>
    </div>
    
</body>
</html>