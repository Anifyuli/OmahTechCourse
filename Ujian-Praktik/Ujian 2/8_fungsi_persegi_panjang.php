<?php

function hitung_luas($p, $l) {
    $luas = $p * $l;
    return $luas;
}

$hasil_luas = hitung_luas(10,5);

echo "<br>";
echo "Luas persegi panjang adalah : $hasil_luas";

?>