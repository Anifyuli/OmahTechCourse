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

@foreach($siswa as $data)
 <form action="/edit/update" method="post">
 {{csrf_field()}}
 <input type="hidden" name="id" value="{{$data->id_siswa}}"><br/>
 Nama <input type="text" name="nama" required="required"value="{{$data->nama_siswa}}"><br/>
 Umur <input type="number" name="umur" required="required"value="{{$data->umur_siswa}}"><br/>
 <input type="submit" value="simpan data" >
 </form>
 @endforeach
</body>
</html>
</body>
</html>