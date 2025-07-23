<?php
// veritabani baglantisi baska dosyadan alıp
// bu sayfada veritabanindan okuma yapacağız

include 'ornek01.php';

$sql = "SELECT id, ad, email FROM kursiyerler";
$sonuc = $baglanti->query($sql);

if ($sonuc->num_rows > 0) {
    while($satir = $sonuc->fetch_assoc()) {
        echo "ID: " . $satir["id"]. " - Ad: " . $satir["ad"]. " - Email: " . $satir["email"]. "<br>";
    }
} else {
    echo "Kayıt bulunamadı.";
}