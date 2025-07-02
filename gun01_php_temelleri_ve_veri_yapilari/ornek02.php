<!-- temel yazdırma komutları -->

<?php
echo "Merhaba Dünya";
echo "Birinci", "İkinci", "üçüncü"; //çoklu parametre
echo("dönrüncü"."beşinci");
echo "altıncı"."yedinci"; // tek parametre

print "<br> bu print ile yazılmıştır<br>"; //yalnızca bir parametre alır

$dizi = ["elma", "armut"];
echo "<br> dizi (print_r): ";
print_r($dizi); //dizi yazdırma işlemi

echo "<br> dizi (var_dump): ";
var_dump($dizi);
echo "<br>";

var_dump("merhaba");
var_dump(77);




?>