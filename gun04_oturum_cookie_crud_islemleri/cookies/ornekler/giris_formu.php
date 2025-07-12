<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kullanici = $_POST['kullanici'] ?? '';
    $sifre = $_POST['sifre'] ?? '';
    
    // Basit doğrulama
    if($kullanici == 'admin' && $sifre == '1234') {
        setcookie('giris_yapan', $kullanici, time() + 86400);
        setcookie('giris_zamani', time(), time() + 86400);
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