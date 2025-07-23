<?php
session_start(); // Her zaman en başta olmalı!
?>


<?php
// Session (oturum), kullanıcı tarayıcısını kapattığında veya 
// belirli bir süre işlem yapmadığında sona eren sunucu taraflı veri saklama yöntemidir. 
// Çerezlere göre daha güvenlidir çünkü veriler sunucuda saklanır.

$_SESSION['kullaniciAdi'] = "Mehmet";
$_SESSION['email'] = "mehmet@example.com";
?>

