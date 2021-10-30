<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "toko-sore";

        $koneksi = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($koneksi){
        echo "Koneksi ke basis data berhasil  ";
    } 
    else {
        echo"Koneksi data gagal";
    }
?>