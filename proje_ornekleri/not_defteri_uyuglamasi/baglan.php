<?php
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "not_defteri";

$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}
?>