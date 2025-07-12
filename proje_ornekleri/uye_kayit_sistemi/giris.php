<?php
session_start();
include 'baglan.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    $sql = "SELECT * FROM kullanicilar WHERE email='$email'";
    $sonuc = $baglanti->query($sql);

    if ($sonuc->num_rows > 0) {
        $kullanici = $sonuc->fetch_assoc();

        if (password_verify($sifre, $kullanici['sifre'])) {
            $_SESSION['kullanici_email'] = $kullanici['email'];
            header("Location: anasayfa.php");
        } else {
            echo "Şifre hatalı.";
        }
    } else {
        echo "Kullanıcı bulunamadı.";
    }
}
?>

<h2>Giriş Yap</h2>
<form method="post">
    Email: <input type="email" name="email" required><br>
    Şifre: <input type="password" name="sifre" required><br>
    <button type="submit">Giriş</button>
</form>