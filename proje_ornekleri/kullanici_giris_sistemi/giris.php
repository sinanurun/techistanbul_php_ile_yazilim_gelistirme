<?php
session_start();
include 'baglan.php';

$ad = $_POST['ad'];
$sifre = $_POST['sifre'];
$hatirla = isset($_POST['hatirla']);

// Basit kontrol (gerçekte hash ile yapılmalı)
$sql = "SELECT * FROM kullanicilar WHERE ad='$ad' AND sifre='$sifre'";
$sonuc = $baglanti->query($sql);

if ($sonuc->num_rows > 0) {
    $_SESSION['kullaniciAdi'] = $ad;

    if ($hatirla) {
        setcookie("kullaniciAdi", $ad, time() + (60*60*24*7), "/");
    }

    header("Location: index.php");
} else {
    echo "Hatalı kullanıcı adı veya şifre.";
    echo "<br><a href='index.php'>Geri Dön</a>";
}
?>