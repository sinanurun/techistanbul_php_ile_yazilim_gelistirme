<?php

/*
Php'de hazır fonksiyonlar
dizi methodlar
    */

$dizi = [1, 2, 3];
echo count($dizi); // Çıktı: 3 dizideki eleman sayısını verir


$a1 = ["a", "b"];
$a2 = ["c", "d"];
print_r(array_merge($a1, $a2)); 
// Çıktı: Array ( [0] => a [1] => b [2] => c [3] => d ) iki diziyi birleştirir

if(in_array("elma", ["armut", "muz", "elma"])) {
    echo "Var";
} else {
    echo "Yok";
}
// Çıktı: Var bir varlığın dizi içinde olup olmadığını kontrol eder geri true veya false döndürür




?>