<?php
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "kullanici_girisi";

$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}
/*
else{
    echo "bağlantı başarılı";
}
    */
?>