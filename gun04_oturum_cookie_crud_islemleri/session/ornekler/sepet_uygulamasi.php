<?php
session_start();

// Sepet boşsa oluştur
if(!isset($_SESSION['sepet'])) {
    $_SESSION['sepet'] = array();
}

// Ürün ekleme
if(isset($_GET['urun_ekle'])) {
    $urun_id = $_GET['urun_ekle'];
    
    if(isset($_SESSION['sepet'][$urun_id])) {
        $_SESSION['sepet'][$urun_id]++;
    } else {
        $_SESSION['sepet'][$urun_id] = 1;
    }
}

// Sepeti göster
echo "<h2>Alışveriş Sepetiniz</h2>";
foreach($_SESSION['sepet'] as $urun_id => $adet) {
    echo "Ürün $urun_id - Adet: $adet <br>";
}
?>

<a href="?urun_ekle=1">Ürün 1 Ekle</a><br>
<a href="?urun_ekle=2">Ürün 2 Ekle</a><br>
<a href="?urun_ekle=3">Ürün 3 Ekle</a>