<!-- php operatörler -->
<!-- php 
Aritmetik operatörler
Atama operatörleri
Karşılaştırma operatörleri
Artırma/Azaltma operatörleri
Mantıksal operatörler
Dize operatörleri
Dizi operatörleri
Koşullu atama operatörleri

-->

<?php

/* aritmetiksel operatörler matematiksel iş ve işlemler yapmak için kullanılan operatörlerdir
sayısal veri tiplerinde kullanılır

+ toplama,
- çıkartma,
* çarpma,
/ bölme,
% mod alma,
** üs alma işlemlerinde kullanılır
*/

echo 5 + 10;
echo "<br>";
echo 5 - 10;
echo "<br>";
echo 5 * 10;
echo "<br>";
echo 5 / 10;
echo "<br>";
echo 50 / 10;
echo "<br>";
echo 11 % 4;
echo "<br>";
echo 3 ** 2;
echo "<br>";


// atama operatörleri sağ taraftaki değeri sol taraftaki değişkene atama için kullanılır

// Temel atama operatörü (=)
$a = 10;
echo "a = $a <br>";

// Topla ve ata (+=)
$a += 5; // a = a + 5 → 10 + 5 = 15
echo "a += 5 → a = $a <br>";

// Çıkar ve ata (-=)
$a -= 3; // a = a - 3 → 15 - 3 = 12
echo "a -= 3 → a = $a <br>";

// Çarp ve ata (*=)
$a *= 2; // a = a * 2 → 12 * 2 = 24
echo "a *= 2 → a = $a <br>";

// Böl ve ata (/=)
$a /= 4; // a = a / 4 → 24 / 4 = 6
echo "a /= 4 → a = $a <br>";

// Kalanı al ve ata (%=)
$a %= 4; // a = a % 4 → 6 % 4 = 2
echo "a %= 4 → a = $a <br>";

// String birleştirme ve atama (.=)
$metin = "Merhaba";
echo "metin = $metin <br>";

$metin .= " Dünya"; // metin = metin . " Dünya"
echo 'metin .= "Dünya" → $metin = ' . $metin . '<br>';


// karşılaştırma operatörleri

$a = 10;
$b = 5;
$c = "10";
$d = 10;


// Eşit mi? (==)
echo "\$a == \$b → " . ($a == $b ? 'true' : 'false') . "\n";

// Eşit değil mi? (!=)
echo "\$a != \$b → " . ($a != $b ? 'true' : 'false') . "\n";

// Aynı değer mi? (==)
echo "\$a == \$c → " . ($a == $c ? 'true' : 'false') . "\n";

// Aynı tip ve değer mi? (===)
echo "\$a === \$c → " . ($a === $c ? 'true' : 'false') . "\n";

// Farklı tip veya değer mi? (!==)
echo "\$a !== \$c → " . ($a !== $c ? 'true' : 'false') . "\n";

// Büyük mü? (>)
echo "\$a > \$b → " . ($a > $b ? 'true' : 'false') . "\n";

// Küçük mü? (<)
echo "\$a < \$b → " . ($a < $b ? 'true' : 'false') . "\n";

// Büyük veya eşit mi? (>=)
echo "\$a >= \$d → " . ($a >= $d ? 'true' : 'false') . "\n";

// Küçük veya eşit mi? (<=)
echo "\$a <= \$d → " . ($a <= $d ? 'true' : 'false') . "\n";


echo "<hr>";

// arttırma azaltma operatörleri
//bir değişkenin değerini 1 arttıran veya azaltan operatörlerdir 
//opeartörün bulunduğu yere göre arttırma ve azaltma zamanı değişir

// Başlangıç değeri
$a = 5;

echo "Başlangıç: a = $a\n";

// Sonek artırma
echo "a++ → " . $a++ . "\n"; // 5 kullanılır, sonra 6 olur
echo "Şimdi a = $a\n";

// Önek artırma
echo "++a → " . ++$a . "\n"; // 7 önce artar, sonra yazdırılır
echo "Şimdi a = $a\n";

// Sonek azaltma
echo "a-- → " . $a-- . "\n"; // 7 kullanılır, sonra 6 olur
echo "Şimdi a = $a\n";

// Önek azaltma
echo "--a → " . --$a . "\n"; // 5 önce azalır, sonra yazdırılır
echo "Şimdi a = $a\n";


echo "<hr>";
//mantıksal operatörler işlem sonucu boolean değer veren operatörlerdir

$a = true;
$b = false;


// VE (AND) operatörü
echo "\$a && \$b → " . ($a && $b ? 'true' : 'false') . "\n"; // false

// VEYA (OR) operatörü
echo "\$a || \$b → " . ($a || $b ? 'true' : 'false') . "\n"; // true

// DEĞİL (NOT) operatörü
echo "! \$a → " . (!$a ? 'true' : 'false') . "\n"; // false
echo "! \$b → " . (!$b ? 'true' : 'false') . "\n"; // true

// XOR (ÖZEL VEYA)
echo "\$a xor \$b → " . ($a xor $b ? 'true' : 'false') . "\n"; // true
echo "\$a xor \$a → " . ($a xor $a ? 'true' : 'false') . "\n"; // false

echo "<hr>";
//string operatörler

// .  birleştirmek için
// .= bir değişkene yeni bir string eklemek için
$ad = "Ahmet";
$soyad = "Yılmaz";

$adSoyad = $ad . " " . $soyad;

echo $adSoyad; // Çıktı: Ahmet Yılmaz

echo "<br>";
$mesaj = "Merhaba";
$mesaj .= " Dünya!";
$mesaj .= " Nasılsın?";

echo $mesaj; // Çıktı: Merhaba Dünya! Nasılsın?

echo "<hr>";


$a = ["elma", "muz", "kivi"];
$b = ["karpuz", "portakal", "kivi"];
$c = ["elma", "muz", "kivi"];
$d = ["isim" => "Ali", "yaş" => 25];
$e = ["yaş" => 25, "isim" => "Ali"];


// + : Dizi birleştirme
echo "1. a + b:\n";
print_r($a + $b);

// + : Anahtar çakışması durumu
echo "\n2. d + e:\n";
print_r($d + $e);

// == : Eşitlik kontrolü
echo "\n3. a == c → " . ($a == $c ? 'true' : 'false') . "\n";

// === : Tam eşitlik kontrolü
echo "4. a === c → " . ($a === $c ? 'true' : 'false') . "\n";

// === : Sıra farklıysa?
echo "5. d === e → " . ($d === $e ? 'true' : 'false') . "\n";

// != : Eşitsizlik kontrolü
echo "6. a != b → " . ($a != $b ? 'true' : 'false') . "\n";

print_r(array_diff($a, $b)); // $a'da olup $b'de olmayanlar
print_r(array_merge($a, $b)); // Daha esnek birleştirme

?>