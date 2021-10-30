<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <h3>Data Siswa</h3>

    <a href="/tambah">Tambah Siswa</a>


    <br>
    <br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($siswa as $data)
        <tr>
            <td>{{$data->nama}}</td>
            <td>{{$data->umur}}</td>
            <td>
            <a href="/edit/{{$data->id}}">EDIT</a>
            <a href="/hapus/{{$data->id}}">HAPUS</a>
            </td>

        </tr>
        @endforeach
    </table>
</body>
</html>