<?php

/*
global key word kullanımı
globalde tanımlı değişkenlere erişim için kullanılan keyword
    */

$a = 10;

function degerOku() {
    global $a;
    echo $a;
    $a++;
}

degerOku(); // Çıktı: 10
echo $a; //11
?>