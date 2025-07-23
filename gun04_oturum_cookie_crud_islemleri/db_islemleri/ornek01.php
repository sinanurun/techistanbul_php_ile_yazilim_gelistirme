<?php
// veritabani baglantisi
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "techistanbul";

$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}else{
echo "bağlanti gerçekleşti";
}