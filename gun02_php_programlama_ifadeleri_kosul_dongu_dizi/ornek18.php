<?php
// Php Diziler
/*
Bir değişkenin içinde birden fazla değer tutmamızı sağlar.​

Php'de 3 farklı türde dizi yapısı bulunur:​

Sayısal Diziler (indexed arrays)​

İlişkisel Diziler (Associative Arrays)​

Çok Boyutlu Diziler (Multidimensional Arrays)
*/


/*
1. Sayısal Diziler (Indexed Arrays)
Elemanlar otomatik veya manuel olarak sayısal anahtarlarla atanır.
*/
$sehirler = array("İstanbul", "Ankara", "İzmir");
// Veya kısa yol (PHP 5.4+)
$sehirler = ["İstanbul", "Ankara", "İzmir"];
print_r($sehirler);

echo "<hr>";
/*2. İlişkisel Diziler (Associative Arrays)
Anahtarlar kullanıcı tarafından belirlenen dizilerdir (string ya da sayı olabilir).
*/
$kullanici = array("ad" => "Ali", "yas" => 25);
// Kısa yol:
$kullanici = ["ad" => "Ali", "yas" => 25];
print_r($kullanici);

/*3. Çok Boyutlu Diziler (Multidimensional Arrays)
Dizinin içinde başka bir dizi barındırır.
*/
echo "<hr>";
//ogrenciler[3][2]
$ogrenciler = [
    ["Adem", 20],
    ["Zeynep", 22],
    ["Mehmet", 21]
];

echo $ogrenciler[1][0]; // Zeynep

print_r($ogrenciler);
?>