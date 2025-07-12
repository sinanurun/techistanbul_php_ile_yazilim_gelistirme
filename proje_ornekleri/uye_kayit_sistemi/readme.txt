Kullanıcı kayıt olabilir, giriş yapabilir, çıkış yapabilir.

 Dosyalar:
baglan.php → Veritabanı bağlantısı
kayit.php → Üye kayıt formu
giris.php → Giriş formu
anasayfa.php → Giriş yaptıktan sonraki sayfa
cikis.php → Oturumu kapatma


CREATE DATABASE uyelik_sistemi;

USE uyelik_sistemi;

CREATE TABLE kullanicilar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    sifre VARCHAR(255)
);