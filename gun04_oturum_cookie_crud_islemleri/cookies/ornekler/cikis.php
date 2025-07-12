<?php
// Tüm cookie'leri sil
setcookie('kullanici_adi', '', time() - 3600);
setcookie('giris_tarihi', '', time() - 3600);
setcookie('giris_yapan', '', time() - 3600);
setcookie('giris_zamani', '', time() - 3600);
//
setcookie('sepet', '', time() - 3600);

// Kullanıcıyı giriş sayfasına yönlendir
header("Location: giris_formu.php");
exit;
?>