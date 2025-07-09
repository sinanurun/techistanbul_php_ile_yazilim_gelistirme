<?php

/*
static key word kullanımı
static tanımlı değişkenler oluşturmak için kullanılır
bu yöntemle tanımlanan değişkenler fonksiyon her çağırıldığında son değeri üzerindne işlem yapar
    */

function sayac() {
    static $sayi = 0;
    echo $sayi;
    $sayi++;
}

sayac(); // Çıktı: 0
sayac(); // Çıktı: 1
sayac(); // Çıktı: 2

?>