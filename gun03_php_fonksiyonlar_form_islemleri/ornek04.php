<?php

/*
varsayılan parametreli fonksiyonlar
fonksiyonun çalışması için bir parametreye gerek olduğunda kullanılır 
fakat bu fonksiyon türünde her zaman parametre olarak bir değer gönderilmedne de çalışır 
çünkü fonksiyon tanımlanırken gerekli olan parametreye varsayılan bir değer ataması yapılır
    */

function mesajGoster($mesaj = "Varsayılan mesaj") {
    echo $mesaj;
}

mesajGoster(); // Çıktı: Varsayılan mesaj
mesajGoster("Özel mesaj"); // Çıktı: Özel mesaj



?>