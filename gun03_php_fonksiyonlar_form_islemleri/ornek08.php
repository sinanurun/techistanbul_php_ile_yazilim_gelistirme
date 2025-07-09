<?php

/*
Callback Fonksiyonlar
Callback fonksiyon , başka bir fonksiyona parametre olarak geçirilen 
ve o fonksiyon içinde çağrılan (kullanılan) fonksiyondur.
    */

/*
    function merhaba($isim) {
    echo "Merhaba $isim";
}

function cagirma($fonksiyonAdi) {
    $fonksiyonAdi("Ali");
}

cagirma("merhaba"); // Burada 'merhaba' fonksiyonu callback olarak kullanıldı
*/

function islem($deger, $fonksiyon) {
    $fonksiyon($deger);
}

islem("PHP", function($text) {
    echo strtoupper($text); // Çıktı: PHP
});

?>