<?php
session_start();
include 'baglan.php';

if (isset($_SESSION['kullaniciAdi'])) {
    echo "Hoş geldin, " . $_SESSION['kullaniciAdi'] . "!";
    echo "<br><a href='cikis.php'>Çıkış Yap</a>";
} else {
    // Cookie varsa otomatik giriş
    if (isset($_COOKIE['kullaniciAdi'])) {
        $_SESSION['kullaniciAdi'] = $_COOKIE['kullaniciAdi'];
        header("Location: index.php");
    } else {
        // Giriş formu
        echo '
        <form action="giris.php" method="post">
            Kullanıcı Adı: <input type="text" name="ad"><br>
            Şifre: <input type="password" name="sifre"><br>
            <input type="checkbox" name="hatirla"> Beni hatırla<br>
            <button type="submit">Giriş Yap</button>
        </form>';
    }
}
?>