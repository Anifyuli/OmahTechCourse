<?php
	include '../connect.php';
    $id = $_GET['id'];

    $datas = mysqli_query($conn, "DELETE FROM artikel where id ='$id'") or die(mysqli_error($conn));

    echo "<script>alert('Artikel berhasil dihapus!');window.location='./home.php';</script>";

?>