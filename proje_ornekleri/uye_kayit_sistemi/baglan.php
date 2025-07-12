<?php
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "uyelik_sistemi";

$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}
?>