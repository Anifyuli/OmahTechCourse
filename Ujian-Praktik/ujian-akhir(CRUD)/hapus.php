<?php
	include 'connect.php';
    $id = $_GET['id'];

    $datas = mysqli_query($connect, "DELETE FROM contact where id ='$id'") or die(mysqli_error($connect));

    echo "<script>alert('Kontak berhasil dihapus!');window.location='lihat.php';</script>";

?>