<?php

/*
Referans ile Parametre Geçme (& operatörü)
referans ile bir değişkeni parametre olarak fonksiyona verince 
yapılan işlemlerden gönderilen değerde etkilenir
değişkenler aslında veriyi referans eden kavramlardır
    */

   // $sayi => $a
function arttir(&$sayi) {
    $sayi++;
}

$a = 5;
arttir($a);
echo $a; // Çıktı: 6

?>