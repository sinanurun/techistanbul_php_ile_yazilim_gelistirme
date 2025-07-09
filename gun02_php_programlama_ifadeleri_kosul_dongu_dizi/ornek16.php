<?php
// break: Döngüyü tamamen durdurur.

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) break;
    echo "$i ";
}

$renkler = array("Kırmızı", "Yeşil", "Mavi");

foreach ($renkler as $renk) {
    if($renk == "Yeşil") break;
    echo "Renk: $renk <br>";
}  


?>