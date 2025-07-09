<?php

/*
return yani geriş dönüş değeri olan fonksiyonlar
bu fonksiyonlar bir kod bloğunu çalıştırdıktan sonra gerieye bir dönüş değeri döndürür 
böylece fonksiyonlar bir değişkene atanabilir
    */

function topla($a, $b) {
    return $a + $b;
}

$sonuc = topla(3, 5);
echo $sonuc; // Çıktı: 8




?>