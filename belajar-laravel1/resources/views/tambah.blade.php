<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Data Siswa</h3>
<a href="/">kembali</a>
<br>
<br>
 <form action="/tambah/store" method="post">
 {{csrf_field()}}
 Nama <input type="text" name="nama" required="required"><br/>
 Umur <input type="number" name="umur" required="required"><br/>
 <input type="submit" value="simpan data" method="post">
 </form>
</body>
</html>