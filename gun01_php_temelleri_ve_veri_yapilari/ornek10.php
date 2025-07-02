<!-- php string ve string işlemleri -->
<!-- php 
string alfanumeric veri tipidir
"" veya '' ile tanımlanabilir

-->

<?php

$ad = "Ali";
$soyad = "Demir";

$tamAd = $ad . " " . $soyad; // Ali Demir
$mesaj = "Merhaba ";
$mesaj .= $ad; // Merhaba Ali

echo strlen("Hello"); // 5

echo strtoupper("küçük harf"); // KÜÇÜK HARF
echo strtolower("BÜYÜK HARF"); // büyük harf
echo ucfirst("merhaba dünya"); // Merhaba dünya
echo ucwords("merhaba php dersi"); // Merhaba Php Dersi

echo trim("   Boşluklu Metin   "); // Boşluklu Metin
echo ltrim("   Sol boşluk"); // Sol boşluk
echo rtrim("Sağ boşluk    "); // Sağ boşluk

echo substr("Bu bir cümledir.", 0, 2); // Bu
echo substr("abcdef", -2); // ef

echo strpos("Merhaba Dünya", "Dünya"); // 8
echo strrpos("Merhaba Dünya", "a"); // 12 (son a'nın pozisyonu)

echo str_replace("kötü", "iyi", "Bu Kötü bir cümle."); // Bu iyi bir cümle.
echo str_ireplace("merhaba", "Selam", "MERHABA Dünya"); // Selam Dünya

echo str_repeat("Ha ", 3); // Ha Ha Ha 
echo substr_count("Merhaba Dünya", "a"); // 2

$cumle = "Elma, Muz, Portakal, Karpuz";
$liste = explode(", ", $cumle); // Diziye çevir
print_r($liste);

$yenidenCumle = implode(" - ", $liste); // Diziyi tekrar metne çevir
echo $yenidenCumle;

?>