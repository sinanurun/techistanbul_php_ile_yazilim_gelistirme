Kullanıcı notlarını oluşturabilir, düzenleyebilir, silebilir ve görebilir.

📁 Dosyalar:
baglan.php → Veritabanı bağlantısı
index.php → Tüm notları listeleme
ekle.php → Not ekleme
duzenle.php?id=1 → Not düzenleme
sil.php?id=1 → Not silme

CREATE DATABASE not_defteri;

USE not_defteri;

CREATE TABLE notlar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    baslik VARCHAR(100),
    icerik TEXT,
    tarih DATETIME DEFAULT CURRENT_TIMESTAMP
);