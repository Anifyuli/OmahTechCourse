<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
<h3>Data Siswa</h3>
<a href="/tambah">Tambah</a>
<br>
<br>
 
    <table border="4">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        @foreach($siswa as $data)
        <tr>
        <td>{{$data->nama_siswa}}</td>
        <td>{{$data->umur_siswa}}</td>
        <td>
        <a href="/edit/{{$data->id_siswa}}">||Edit||</a>
        <a href="/hapus/{{$data->id_siswa}}">||Hapus||</a>
        </td>
        </tr>
        @endforeach
    </table>
</body>
</html>