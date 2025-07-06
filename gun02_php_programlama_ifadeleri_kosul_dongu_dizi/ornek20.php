<?php
$ogrenciler = [
    "Ali" => 85,
    "Ayşe" => 92,
    "Mehmet" => 76
];

echo "<h2>Not Listesi</h2>";
foreach ($ogrenciler as $isim => $not) {
    echo "$isim: $not <br>";
}

asort($ogrenciler); // En düşükten en yükseğe
echo "<h2>Sıralı Liste</h2>";
foreach ($ogrenciler as $isim => $not) {
    echo "$isim: $not <br>";
}

?>