<?php 
// php 8 ile gelen bir nevi ternary kontrol operatörü 
// 
//PHP 8.0 itibariyle yeni bir özellik olan null coalescing operator (??) ve bazı kısa ifadeler yaygınlaştı.
$isim = "Muaz";
$ad = $isim ?? 'Misafir';
echo "Hoş geldin, $ad"; // Eğer $_GET['ad'] varsa onu, yoksa 'Misafir' kullanır

// değişkenin varlığını veya null olup olmadığını kontrol eder 
// eğer değişken varsa veya null'en farklı değer alıyorsa değeri yoksa ?? sağındaki değeri verir

?>