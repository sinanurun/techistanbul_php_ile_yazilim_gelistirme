<!-- php veri tipleri -->
<!-- php sabit constans



-->

<?php

// String : alfanumerik veri tipidir "veri" veya 'veri' şeklinde tanımlanır  
$kurum = "TechIstanbul"; 
$kurum2 = 'TechIstanbul';

echo gettype($kurum);echo "<br>";
echo is_string( $kurum2 );echo "<br>";
var_dump($kurum);

echo "<br>";

// Integer : sisteme göre değişmekle birlikte 32 veya 64 bitlik değer alabilen tam sayıları tanımlar

$yil = 2025;
echo gettype($yil);echo "<br>";
echo is_string( $yil );echo "<br>";
echo is_integer( $yil );echo "<br>";
var_dump($yil);echo "<br>";

// Float : ondalikli değerleri tanımlamak için kullanılan veri tipidir

$pi = 3.14;
echo gettype($pi);echo "<br>";
echo is_float( $pi );echo "<br>";
echo is_integer( $pi );echo "<br>";
var_dump($pi);echo "<br>";

//boolean : mantıksal veri tipidir yalnızca iki değer alır true - false
$sinif_gecme = true;
echo gettype($sinif_gecme);echo "<br>"; 
echo is_bool( $sinif_gecme);echo "<br>";
var_dump($sinif_gecme);

//yukarıdaki veri tipleri genel olarak ilkel veri tipleri olarak tanımlanır 
// aşağıdaki veri tipleri ise gelişmiş veri tipi olarak ifade edilir

// array yani diziler: birden fazla veriyi bir arada tutmayı sağlayan veri tipidir.
// yapısına göre 3 farklı array bulunur ileride detaylıca bahsedilecek 

$gunler = array("2 Temmuz","9 Temmuz","16 Temmuz","23 Temmuz");
//echo $gunler;
print_r($gunler);echo "<br>";
echo gettype($gunler);echo "<br>";  
echo is_array( $gunler );echo "<br>";
var_dump($gunler);

echo "<br>";
// object nesne: kednimize özgü oluşturabileceğimiz veri tipini temsil eden yapıdır
class Kurs{
    public $kurulus;
    public $konu;
    public function __construct($kurulus,$konu){
        $this->kurulus = $kurulus;
        $this->konu = $konu;
}
public function kursBilgisi(){
    return $this->konu . " Kursu " . $this-> kurulus. " tarafından düzenlenmiştir ";
}
}


$yeni_kurs = new Kurs("TechIstanbul","Php");

echo $yeni_kurs->kursBilgisi();
var_dump( $yeni_kurs);

// null iceriksiz: bu veri tipi herhangi bir değere sahip olmayan bir veri tipidir 
// yani içeriğinde atanmış veri barındırmaz

$x = null;
var_dump($x);

?>