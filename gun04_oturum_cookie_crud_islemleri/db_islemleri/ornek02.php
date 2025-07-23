<?php
// veritabani baglantisi baska dosyadan alıp
// bu sayfada ver tabanına ekleme yapacağız

include 'ornek01.php';

$sql = "INSERT INTO kursiyerler (ad, email, durum) VALUES ('Ayşe', 'ayse@example.com',1)";
if ($baglanti->query($sql) === TRUE) {
    echo "Kayıt başarıyla eklendi.";
} else {
    echo "Hata: " . $baglanti->error;
}