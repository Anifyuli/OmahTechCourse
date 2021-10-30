<h2> Tabel </h2>
<table border="1">
<tr>
    <td>ID</td>
    <td>Nama</td>
    <td>Umur</td>
    <td>Alamat</td>
</tr>

<?php
    include "conn.php";

    $siswa = mysqli_query ($conn, SELECT * FROM 'siswa');
    $no = 1;
    foreach ($siswa as $data){
        echo "<tr>
    <td>$no</td>
    <td>".$data['nama_siswa']."</td>
    <td>".$data['umur_siswa']."</td>
    <td>".$data['alamat']."</td>
    </tr>";
    $no++;
    
?>
</table>