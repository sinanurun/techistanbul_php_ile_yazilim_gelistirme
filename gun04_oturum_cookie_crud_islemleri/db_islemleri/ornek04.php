<?php
// veritabani baglantisi baska dosyadan alıp
// bu sayfada veritabanindan güncelleme yapacağız

include 'ornek01.php';

$sql = "UPDATE kursiyerler SET ad='Fatma' WHERE id=1";
if ($baglanti->query($sql) === TRUE) {
    echo "Kayıt güncellendi.";
} else {
    echo "Hata: " . $baglanti->error;
}