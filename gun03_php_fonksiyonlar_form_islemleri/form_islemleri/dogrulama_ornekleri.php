<?php

//eposta doğrulama

$email = "ornek@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Geçerli e-mail adresi.";
} else {
    echo "Geçersiz e-mail adresi.";
}


//url doğrulama

$url = "https://www.example.com ";

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "Geçerli URL.";
} else {
    echo "Geçersiz URL.";
}

//ip adresi doğrulama

$ip = "192.168.1.1";

if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "Geçerli IP adresi.";
} else {
    echo "Geçersiz IP adresi.";
}

// sayısal veri temizleme

$sayi = "123abc456";

$sayi = filter_var($sayi, FILTER_SANITIZE_NUMBER_INT);

echo $sayi; // Çıktı: 123456

// url temizleme

$url = "https://example.com/?id=1<script>alert(1)</script>";

$temizUrl = filter_var($url, FILTER_SANITIZE_URL);

echo $temizUrl; // Çıktı:  https://example.com/?id=1alert1
// Not: Burada script gibi zararlı kodlar silinmez, sadece URL formatına uygun olmayan karakterler temizlenir.


/*
filter_var(degisken, kontrol_parametresi)
FILTER_VALIDATE_EMAIL Geçerli bir e-posta mı?
FILTER_VALIDATE_URL Geçerli bir URL mi?
FILTER_VALIDATE_IP Geçerli bir IP adresi mi?
FILTER_VALIDATE_INT Tam sayı mı?
FILTER_VALIDATE_FLOAT Ondalıklı sayı mı?
FILTER_SANITIZE_STRING HTML etiketlerini ve özel karakterleri temizler (PHP 8.1 ile artık önerilmemektedir)
FILTER_SANITIZE_NUMBER_INT Sadece rakamları bırakır
FILTER_SANITIZE_EMAIL E-mail içinde geçersiz karakterleri temizler
FILTER_SANITIZE_URL URL içinde geçersiz karakterleri temizler
*/
?>