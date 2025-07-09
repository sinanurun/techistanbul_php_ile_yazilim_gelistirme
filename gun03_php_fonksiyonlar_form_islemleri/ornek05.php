<?php

/*
Dinamik Sayıda Parametre (Variadic Functions) Alan fonksiyonlar
bu fonksiyonlara farklı adette parametre gönderilebilir 
method gelen değerleri bir dizi gibi algılar ve ona göre işlem yapar
    */

function sayilariTopla(...$sayilar) {
   
    /*
    var_dump($sayilar);
    foreach($sayilar as $sayi)
    {echo "$sayi";
    }
*/
    return array_sum($sayilar);
}

echo sayilariTopla(1, 2, 3, 4); // Çıktı: 10

?>