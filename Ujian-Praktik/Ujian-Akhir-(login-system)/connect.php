<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "perpus_daring";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // test-connection
    // if (mysqli_error($conn)){
    //     echo "Koneksi Gagal";
    // }
    // else {
    //     echo "Koneksi Berhasil";
    // }
?>