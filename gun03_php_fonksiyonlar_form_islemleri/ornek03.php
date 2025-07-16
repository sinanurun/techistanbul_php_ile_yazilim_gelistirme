<?php

/*
return yani geriş dönüş değeri olan fonksiyonlar
bu fonksiyonlar bir kod bloğunu çalıştırdıktan sonra gerieye bir dönüş değeri döndürür 
böylece fonksiyonlar bir değişkene atanabilir
    */

function topla($a, $b) {
    $islem_sonucu = $a+ $b;
   // echo $islem_sonucu;
    return $islem_sonucu;
}

echo topla(8,9);

echo "<br>";
$sonuc = topla(3, 5);
echo $sonuc; // Çıktı: 8



?>