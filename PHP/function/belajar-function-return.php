<?php

function hitungluas($panjang,$lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

$luas1 = hitungluas(10,5);
$luas2 = hitungluas(20,20);

echo "Luas bangun datar tersebut adalah $luas1";
echo "<br>";
echo "Luas bangun datar tersebut adalah $luas2";

?>