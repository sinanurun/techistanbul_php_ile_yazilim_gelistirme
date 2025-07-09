<?php
// Php Diziler
// dizi tanımlama
$dizi = array("elma", "armut", "muz");
# yeni tip dizi tanımlama 5.4 sonrası
$dizi = ["elma", "armut", "muz"];

// dizi elemanlarına erişim indexli
$mevsimler = ["İlkbahar", "Yaz", "Sonbahar", "Kış"];
echo $mevsimler[1]; // Yaz

echo "<hr>";
 // dizi elemanlarına erişim anahtarlı
$kisi = ["isim" => "Ahmet", "yas" => 30];
echo $kisi["isim"]; // Ahmet
echo $kisi["yas"]; // Ahmet
echo "<hr>";

// dizi methodları

#diziye eleman ekleme

$hayvanlar = ["köpek", "kedi"];
$hayvanlar[] = "kuş"; // Otomatik index atar
print_r($hayvanlar);
echo "<hr>";

$kisi = ["isim" => "Ayşe"];
$kisi["soyisim"] = "Demir";
print_r($kisi);
echo "<hr>";

// dizi uzunluğu eleman sayısı
$renkler = ["kırmızı", "yeşil", "mavi"];
echo count($renkler); // 3
echo "<hr>";


// dizi sonuna eleman ekleme 
$sebzeler = ["patates", "domates"];
array_push($sebzeler, "biber", "soğan");
print_r($sebzeler);
echo "<hr>";

//dizi sonunda eleman silme
$sebzeler = ["patates", "domates"];
$sonEleman = array_pop($sebzeler);
echo $sonEleman; // domates
print_r($sebzeler);


echo "<hr>";

//dizinin ilk elemanını silme
$sebzeler = ["patates", "domates"];
$ilkEleman = array_shift($sebzeler);
echo $ilkEleman; // patates
print_r($sebzeler);


echo "<hr>";

//diziden belirli bölümü alma
$renkler = ["kırmızı", "yeşil", "mavi", "turuncu"];
$parca = array_slice($renkler, 1, 2); // 1. indexten başlayıp 2 eleman al
print_r($parca); // yeşil, mavi
print_r($renkler);

echo "<br>";



// dizileri birleştirme 
$dizi1 = ["a", "b"];
$dizi2 = ["c", "d"];
$birlesim = array_merge($dizi1, $dizi2);
print_r($birlesim);
echo "<br>";

// dizide eleman varlığını kontrol etme
$renkler = ["kırmızı", "yeşil", "mavi"];
if (in_array("yeşil", $renkler)) {
    echo "Yeşil renk listede var.";
}

// anahtarın dizide olup olmadığını kontrol eder
$kisi = ["ad" => "Ali", "yas" => 25];
if (array_key_exists("ad", $kisi)) {
    echo "Ad bilgisi mevcut.";
}

echo "<br>";

// değerin anahtarını indexini bulu 
$renkler = ["kırmızı", "yeşil", "mavi"];
$index = array_search("yeşil", $renkler);
echo $index; // 1

// diziyi sıralama
/*
sort() → Küçükten büyüğe
rsort() → Büyükten küçüğe
*/
$puanlar = [85, 60, 95, 70];
sort($puanlar);
print_r($puanlar); // 60, 70, 85, 95

echo "<br>";

//anahtar değerine göre sıralama
/*
asort() / arsort()*/
$notlar = ["Ali" => 70, "Ayşe" => 85, "Mehmet" => 65];
asort($notlar);
print_r($notlar); // 65, 70, 85

echo "<br>";

//ksort() / krsort() – İlişkisel dizilerde anahtarlara göre sıralar
$notlar = ["Zeynep" => 80, "Ali" => 90, "Cem" => 70];
ksort($notlar);
print_r($notlar); // Ali, Cem, Zeynep

echo "<br>";

//array_flip() – Anahtarlar ile değerleri yer değiştirir

$dizi = ["a" => 1, "b" => 2];
$ters = array_flip($dizi);
print_r($ters); // 1 => a, 2 => b

echo "<br>";

//explode() ve implode() – Diziyi stringe çevirme ve tersi

$veri = "elma,armut,muz";
$dizi = explode(",", $veri); // string -> array

print_r($dizi);
$veri2 = implode(" - ", $dizi); // array -> string
echo $veri2; // elma - armut - muz
?>