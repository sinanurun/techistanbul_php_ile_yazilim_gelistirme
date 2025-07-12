<?php
session_start();
include 'baglan.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ad = $_POST['ad'];
    $email = $_POST['email'];
    $sifre = password_hash($_POST['sifre'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO kullanicilar (ad, email, sifre) VALUES ('$ad', '$email', '$sifre')";

    if ($baglanti->query($sql) === TRUE) {
        echo "Kayıt başarılı! <a href='giris.php'>Giriş yap</a>";
    } else {
        echo "Hata: " . $baglanti->error;
    }
}
?>

<h2>Kayıt Ol</h2>
<form method="post">
    Ad: <input type="text" name="ad" required><br>
    Email: <input type="email" name="email" required><br>
    Şifre: <input type="password" name="sifre" required><br>
    <button type="submit">Kayıt Ol</button>
</form>