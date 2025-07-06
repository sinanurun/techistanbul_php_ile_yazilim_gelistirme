<?php 
// foreach döngüsü 
//Dizilerde (array) ve nesnelerde (objects) gezinmek için kullanılır.


$ogrenciler = [
    ["isim" => "Ali", "notlar" => [85, 90, 75]],
    ["isim" => "Ayşe", "notlar" => [95, 80, 88]],
    ["isim" => "Veli", "notlar" => [70, 65, 80]]
];

foreach ($ogrenciler as $ogrenci) {
    echo "Öğrenci: " . $ogrenci["isim"] . "\n";
    echo "Notlar: ";
    
    $toplam = 0;
    foreach ($ogrenci["notlar"] as $not) {
        echo $not . " ";
        $toplam += $not;
    }
    
    $ortalama = $toplam / count($ogrenci["notlar"]);
    $harfNotu = ($ortalama >= 90) ? 'AA' : 
    ($ortalama >= 80 ? 'BA' : ($ortalama >= 70 ? 'BB' : 'FF'));
    
    echo "\nOrtalama: $ortalama, Harf Notu: $harfNotu\n\n";
    echo "<br>";
}

?>