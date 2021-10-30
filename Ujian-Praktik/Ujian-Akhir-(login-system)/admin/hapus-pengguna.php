<?php
	include '../connect.php';
    $id = $_GET['id'];

    $datas = mysqli_query($conn, "DELETE FROM user where id ='$id'") or die(mysqli_error($conn));

    echo "<script>alert('Pengguna berhasil dihapus!');window.location='./index.php';</script>";

?>