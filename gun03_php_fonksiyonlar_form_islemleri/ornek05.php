<?php

/*
Dinamik Sayıda Parametre (Variadic Functions) Alan fonksiyonlar
bu fonksiyonlara farklı adette parametre gönderilebilir 
method gelen değerleri bir dizi gibi algılar ve ona göre işlem yapar
    */


    function ortalamaHesapla(...$sayilar){
        echo"<br>";
        var_dump($sayilar);
echo"<br>";
        return array_sum($sayilar)/count($sayilar);
    }
function sayilariTopla(...$sayilar) {
   
    echo"<br>";
    var_dump($sayilar);
    echo"<br>";
    foreach($sayilar as $sayi)
    {echo "$sayi";
    }

    return array_sum($sayilar);
}

echo sayilariTopla(1, 2, 3, 4); // Çıktı: 10
echo ortalamaHesapla(50,64,85,32,14,74); // Çıktı: ortalama

?>