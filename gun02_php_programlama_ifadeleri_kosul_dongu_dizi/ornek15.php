<?php
$matris = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];



$satirSayisi = count($matris);
$sutunSayisi = count($matris[0]); // Her satırın aynı sayıda sütun içerdiği varsayılır

for ($i = 0; $i < $satirSayisi; $i++) {
    for ($j = 0; $j < $sutunSayisi; $j++) {
        echo $matris[$i][$j] . " ";
    }
    echo "<br>"; // Web tarayıcısında satır sonu için
}


foreach ($matris as $satir) {
    foreach ($satir as $eleman) {
        echo $eleman . " ";
    }
    echo "<br>";
}



$rehber = [
    "Ali" => ["telefon" => "123", "email" => "ali@example.com","sehir"=>"istanbul"],
    "Ayşe" => ["telefon" => "456", "email" => "ayse@example.com"]
];

foreach ($rehber as $isim => $bilgiler) {
    echo "$isim:<br>";
    foreach ($bilgiler as $tip => $veri) {
        echo "- $tip: $veri<br>";
    }
}
    

?>