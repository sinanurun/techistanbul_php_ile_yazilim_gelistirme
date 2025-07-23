<?php
// veritabani baglantisi baska dosyadan alıp
// bu sayfada veritabanindan güncelleme yapacağız

include 'ornek01.php';
/*
$sql = "DELETE FROM kursiyerler WHERE id=1";
if ($baglanti->query($sql) === TRUE) {
    echo "Kayıt silindi.";
} else {
    echo "Hata: " . $baglanti->error;
}
*/

$sql = "DELETE FROM kursiyerler WHERE id=1";
if ($baglanti->query($sql) === TRUE) {
    if ($baglanti->affected_rows > 0) {
        echo "Kayıt başarıyla silindi.";
    } else {
        echo "Silinecek kayıt bulunamadı.";
    }
} else {
    echo "Sorgu hatası: " . $baglanti->error;
}
    

    /*
    $id = 99999;

$sql = "DELETE FROM kullanicilar WHERE id=$id";

if ($baglanti->query($sql) === TRUE) {
    if ($baglanti->affected_rows > 0) {
        echo "ID'si $id olan kayıt başarıyla silindi.";
    } else {
        echo "ID'si $id olan kayıt bulunamadı.";
    }
} else {
    echo "Sorgu hatası: " . $baglanti->error;
}*/