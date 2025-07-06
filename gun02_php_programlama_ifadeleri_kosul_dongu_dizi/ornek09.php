<?php 
// switch case
// Aynı değişkenin farklı değerlerine göre farklı işlemler yapmak için kullanılır. 
// Özellikle birçok if...elseif yazmaktan kaçınmak için idealdir.

$gun = "pazar";

switch ($gun) {
    case "pazartesi":
        echo "Bugün Pazartesi.";
        break;
    case "salı":
        echo "Bugün Salı.";
        break;
    case "pazar":
        echo "Bugün Pazar.";
        break;
    default:
        echo "Diğer günler...";
}

?>