<?php

/*
Anonim fonksiyonlar
fonksiona bir isim vermeden değişkene atanarak tanımlanan fonksiyonlardır
    */

$sayHello = function($isim) {
    echo "Merhaba $isim";
};

$sayHello("Ayşe"); // Çıktı: Merhaba Ayşe
$sayHello("Fatma"); // Çıktı: Merhaba Ayşe

?>