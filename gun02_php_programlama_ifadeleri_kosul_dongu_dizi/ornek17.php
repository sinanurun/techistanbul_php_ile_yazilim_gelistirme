<?php
// continue: O turu atlar, döngü devam eder.

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue;
    echo "$i ";
}


$renkler = array("Kırmızı", "Yeşil", "Mavi");

foreach ($renkler as $renk) {
    if ($renk == "Yeşil") continue;
    echo "Renk: $renk <br>";
}  


?>