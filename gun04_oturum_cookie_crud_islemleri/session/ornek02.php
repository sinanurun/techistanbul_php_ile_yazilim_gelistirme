<?php
session_start(); // Her zaman en başta olmalı!
//sessiondan veri alma
?>


<?php
// Session (oturum), kullanıcı tarayıcısını kapattığında veya 
// belirli bir süre işlem yapmadığında sona eren sunucu taraflı veri saklama yöntemidir. 
// Çerezlere göre daha güvenlidir çünkü veriler sunucuda saklanır.

if(isset($_SESSION['kullaniciAdi'])) {
    echo "Hoş geldin, " . $_SESSION['kullaniciAdi'];
}else{
    echo 'Daha önce oturum açma işlemi gerçekleşmemiş lütfen oturum açısınız';
}

?>

