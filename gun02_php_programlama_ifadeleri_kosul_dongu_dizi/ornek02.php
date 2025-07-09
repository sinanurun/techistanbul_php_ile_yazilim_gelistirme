<?php 
#if ... else eğer....değilse
//Bir koşul doğruysa (true) if kod bloğunu çalıştırır değilse else bloğuna ait kod bloğunu çalıştırır.

$yas = 16;

if ($yas >= 18) // eğer yaş büyük eşit 18 ise
{
    echo "Ehliyet alabilirsiniz.";
} else // (değilse) yaş 18den küçükse
{
    echo "Henüz ehliyet alamazsınız.";
}

if ($yas >= 18) echo "Ehliyet alabilirsiniz.";
else echo "Henüz ehliyet alamazsınız.";


?>