<?php
session_start();

// Tek bir session değişkenini silme
unset($_SESSION['kullaniciAdi']);

// Tüm session değişkenlerini silme
session_unset();

// Session'ı tamamen sonlandırma (tüm verileri siler + oturum ID'sini geçersiz kılar)
session_destroy();

echo "Session sonlandırıldı!";


  echo "eposta " . $_SESSION['email'];
    echo "kullanici adi " . $_SESSION['kullaniciAdi'];
?>

