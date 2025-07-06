<?php 
// do ... while düngüsü
//Koşul yanlış olsa bile en az bir kez çalışır. Önce çalışır, sonra koşula bakar.

/*
do {
    // Kod burada en az bir kez çalışır
} while (koşul);
 */

$i = 6;
do {
    echo "Sayı: $i <br>";
    $i++;
} while ($i <= 5);


?>