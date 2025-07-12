Kullanıcı adı ve şifre ile giriş yapılabilecek, 
başarılı girişte $_SESSION ile kullanıcı bilgisi tutulacak. 
"Beni hatırla" seçeneği varsa setcookie() ile otomatik giriş sağlanacak.

📁 Dosyalar:
baglan.php → Veritabanı bağlantısı
index.php → Giriş formu ve hoş geldin mesajı
giris.php → Giriş kontrolü
cikis.php → Oturumu kapatma


CREATE DATABASE kullanici_girisi;

USE kullanici_girisi;

CREATE TABLE kullanicilar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad VARCHAR(50),
    sifre VARCHAR(50)
);

-- Örnek kullanıcı ekleme
INSERT INTO kullanicilar (ad, sifre) VALUES ('admin', '1234');