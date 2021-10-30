<?php 
include "../connect.php";

$result = mysqli_query($conn,"SELECT * FROM barang WHERE id='$_GET[id]'");

$data = mysqli_fetch_assoc($result);

$fotoproduk = $data['gambar'];
if(file_exists("../assets/img/$fotoproduk"))
{
    unlink("../assets/img/$fotoproduk");
}

mysqli_query($conn,"DELETE FROM barang WHERE id='$_GET[id]'");

echo "<script>alert('Produk terhapus');</script>";
echo "<script>location='index.php';</script>";

?>