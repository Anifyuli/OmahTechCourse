<?php
    //create variable property in the database
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sekolah_siang";
   
    //create variable to connect property in the database
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn){
        echo "Koneksi ke basis data berhasil  ";
    } 
    else {
        echo"Koneksi data gagal";
    }


?>