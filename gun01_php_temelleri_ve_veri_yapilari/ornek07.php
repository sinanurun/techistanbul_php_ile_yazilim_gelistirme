<!-- php veri tipleri -->
<!-- php veri tipi dönüşümü
(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL
-->

<?php
/*
$z = null;
echo $z;
var_dump($z);
*/

$a = 2025;
echo $a * 2;
echo "<br>";
$a_string = (string) $a;
echo $a_string ." yılı" ; // . ile string ifadeler birleşir string olmayanlar ise stringe dönüşür
echo $a_string[0];

var_dump($a_string);


echo "<br>";

$a = 55;       // Integer
$b = 35.34;    // Float
$c = "25 kilometere"; // String başlangıç önemli
$d = "kilometere 25"; // String
$e = "merhaba"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;      // Zaten integer olduğu için değişmez
$b = (int) $b;      // Float → Int: ondalık kısmı atılır
$c = (int) $c;      // String başı sayı ise o sayı alınır
$d = (int) $d;      // String başı harf ise 0 döner
$e = (int) $e;      // Harfle başlayan string → 0
$f = (int) $f;      // true → 1 false → 0
$g = (int) $g;      // NULL → 0

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);


echo "<br>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);



// bool

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);
 //If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. 
 // Even -1 converts to true



//array dönüşümü

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//When converting into arrays, most data types converts into an indexed array with one element.
// NULL values converts to an empty array object.

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);




// object dönüşümü

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

/*
PHP'de basit veri tiplerini (object) ile nesneye çevirirsen, PHP otomatik olarak stdClass sınıfından bir nesne oluşturur.
Bu nesnenin içinde varsayılan olarak "scalar" isimli bir özelliği olur.
NULL ise özel durumdur, boş bir stdClass nesnesi döner.
*/

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

// Değişkenleri "unset" etmek için:
unset($a, $b, $c, $d, $e);

// Bu değişkenler artık tanımsız olduğundan var_dump kullanılamaz!
// Aşağıdaki satırlar hata verir:
echo $a;
var_dump($a); // HATA: Undefined variable
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

?>