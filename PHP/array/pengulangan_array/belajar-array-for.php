<?php
$jurusan = array("Teknik Informatika","Teknik Siber","Teknik Komputer");
$jumlah_jurusan = count($jurusan);
echo "<br>";
print_r ($jumlah_jurusan);
echo "<br>";

for ($i = 0; $i < $jumlah_jurusan; $i++) {
    echo "<br>";
    echo "Jurusan" . $jurusan[$i];
    echo "<br>"; 
}

?>