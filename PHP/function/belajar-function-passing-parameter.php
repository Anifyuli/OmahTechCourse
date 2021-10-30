<?php
function display($salam, $produk1, $produk2, $produk3){
    echo $salam ."". $produk1 .",". $produk2 .",". $produk3;
}
echo "<br>";
display ("Selamat datang di Toko Syukur, kami menyediakan :"," Baju Muslim", " Peralatan Shalat", " Buku-Buku islami");
echo "<br>";
display ("Selamat datang, kami menyediakan : ", " Alat tulis", " Buku-Buku bacaan", " Peralatan perkantoran");
// jumlah parameter/variabel harus sesuai dengan banyaknya nilai yang dimasukkan

?>