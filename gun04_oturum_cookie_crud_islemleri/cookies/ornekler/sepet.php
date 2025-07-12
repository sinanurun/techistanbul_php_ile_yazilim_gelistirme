<?php
// Sepet boşsa oluştur
if(!isset($_COOKIE['sepet'])) {
    $sepet = array();
} else {
    // Cookie'deki JSON verisini diziye çevir
    $sepet = json_decode($_COOKIE['sepet'], true);
}

// Ürün ekleme
if(isset($_GET['urun_ekle'])) {
    $urun_id = $_GET['urun_ekle'];
    
    if(isset($sepet[$urun_id])) {
        $sepet[$urun_id]++;
    } else {
        $sepet[$urun_id] = 1;
    }
    
    // Diziyi JSON'a çevirip cookie'ye kaydet
    setcookie('sepet', json_encode($sepet), time() + 86400);
}

// Sepeti göster
echo "<h2>Alışveriş Sepetiniz</h2>";
if(!empty($sepet)) {
    foreach($sepet as $urun_id => $adet) {
        echo "Ürün $urun_id - Adet: $adet <br>";
    }
} else {
    echo "Sepetiniz boş";
}
?>

<a href="?urun_ekle=1">Ürün 1 Ekle</a><br>
<a href="?urun_ekle=2">Ürün 2 Ekle</a><br>
<a href="?urun_ekle=3">Ürün 3 Ekle</a>