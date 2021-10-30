<?php

$koneksi = mysqli_connect("localhost","anifyuli","sekolah_siang");

// check connection
if (mysqli_connect_error()){
    echo "Koneksi ke basis data gagal : " . mysqli_connect_error();
}

?>