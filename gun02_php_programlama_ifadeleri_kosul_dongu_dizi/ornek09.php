<?php 
// switch case
// Aynı değişkenin farklı değerlerine göre farklı işlemler yapmak için kullanılır. 
// Özellikle birçok if...elseif yazmaktan kaçınmak için idealdir.

$gun = "10Temmuz";

switch ($gun) {
    case "2Temmuz":
        echo "Atölyede 1. gün.";
        break;
    case "9Temmuz":
        echo "Atölyede 2. gün.";
        break;
    case "16Temmuz":
        echo "Atölyede 3. gün.";
        break;
    case "23Temmuz":
        echo "Atölyede 4. gün.";
        break;
    default:
        echo "Bu Tarihte Atölye Yok";
}

?>