<?php

/*
varsayılan parametreli fonksiyonlar
fonksiyonun çalışması için bir parametreye gerek olduğunda kullanılır 
fakat bu fonksiyon türünde her zaman parametre olarak bir değer gönderilmedne de çalışır 
çünkü fonksiyon tanımlanırken gerekli olan parametreye varsayılan bir değer ataması yapılır
    */

    /*
function mesajGoster($mesaj = "Varsayılan mesaj") {
    echo $mesaj;
}

mesajGoster(); // Çıktı: Varsayılan mesaj
mesajGoster("Özel mesaj"); // Çıktı: Özel mesaj
*/

function daireAlan($r=1, $pi=3.14){

    return $r * $r * $pi;
}

$yaricap = 3;
$sonuc1 = daireAlan($yaricap);
echo $sonuc1;
echo "<br>";
echo daireAlan(5);
echo "<br>";
echo daireAlan(6, 3);

?>