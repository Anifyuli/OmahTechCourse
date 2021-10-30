<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>

<h3>Tambah Data Siswa</h3>

<a herf="/">Kembali</a>


<br>
<br>

<form action="/tambah/store" method="post"> 
{{csrf_field()}}
Nama <Input type="text" name="nama" required="required"> <br/>
Umur <Input type="number" name="umur" required="required"> <br/>
<input type="submit" value="Simpan Data">
</form>
   
</body>
</html>