<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kullanici = $_POST['kullanici'] ?? '';
    $sifre = $_POST['sifre'] ?? '';
    
    // Basit doğrulama (gerçek uygulamada veritabanı kontrolü yapılmalı)
    if($kullanici == 'admin' && $sifre == '1234') {
        $_SESSION['giris_yapan'] = $kullanici;
        $_SESSION['giris_zamani'] = time();
        header('Location: profil.php');
        exit;
    } else {
        $hata = "Geçersiz kullanıcı adı veya şifre!";
    }
}
?>

<form method="post">
    Kullanıcı Adı: <input type="text" name="kullanici"><br>
    Şifre: <input type="password" name="sifre"><br>
    <button type="submit">Giriş Yap</button>
</form>

<?php if(isset($hata)) echo "<p style='color:red'>$hata</p>"; ?>