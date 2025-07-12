<?php
session_start();

if (!isset($_SESSION['kullanici_email'])) {
    header("Location: giris.php");
}

echo "Hoş geldin, " . $_SESSION['kullanici_email'] . "!<br>";
echo "<a href='cikis.php'>Çıkış Yap</a>";
?>