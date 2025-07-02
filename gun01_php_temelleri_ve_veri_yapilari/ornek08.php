<!-- php veri tipleri -->
<!-- php sabit constans
iki farklı şekilde sabit tanımlanmaktadır
define ve const ile
define her yerde sabit tanımlama kullanılırken 
const bloklar dışında sabit tanımlarken kullanılır
daha sonra değeri değişmeyecek tanımlamalarda kullanılırlar

-->

<?php

define("zam_orani",1.5);

echo zam_orani;

//zam_orani = 2.5;

if (true){
define ("kurum",    "techistanbul");
}

echo kurum;

const atolye = "Php Atolyesi";
echo atolye;
/*
if (true){
    const("ders","php Dersi");
}
    */

?>