<?php 
#if ... else eğer....değilse
//Bir koşul doğruysa (true) if kod bloğunu çalıştırır değilse else bloğuna ait kod bloğunu çalıştırır.

$yas = 20;

if ($yas >= 18) {
    echo '<p style="background-color: green; color: white;">';
    echo "Ehliyet alabilirsiniz.";
} else {
     echo '<p style="background-color: red; color: white;">';
    echo "Henüz ehliyet alamazsınız.";
}
echo "</p>";
?>