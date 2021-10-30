<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>

<h3>Edit Data Siswa</h3>

<a herf="/">Kembali</a>


<br>
<br>

@foreach($siswa as $data)
<form action="/edit/update" method="post"> 
{{csrf_field()}}
<input type="hidden" name="id" value="{{ $data->id }}"> <br/>
Nama <Input type="text" name="nama" required="required" value="{{ $data->nama_siswa }}"> <br/>
Umur <Input type="number" name="umur" required="required" value="{{ $data->umur_siswa }}"> <br/>
Alamat <Input type="text" name="alamat" required="required" value="{{ $data->alamat_siswa }}"> <br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach
   
</body>
</html>