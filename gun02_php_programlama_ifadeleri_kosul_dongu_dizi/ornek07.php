<?php 
//Ternary Operatör ​- üçlü koşul operatörü

//koşul ? doğruysa_değer : yanlışsa_değer;

// aşağıda zincirlemeTernary işlemi yapılmış 7.4 versiyonu öncesi desteklenmiyor veya hata verebilir



$is_logged_in = true; // kullanıcı giriş yaptı mı?   
$balance = 24; // bakiye
$price = 30; // ürün fiyatı
$message = $is_logged_in
			? ($balance === $price? 'Ürünü satın almak için yeterli bakiyeniz var': 'Ürünü satın almak için yeterli bakiyeniz yok')
			: 'Ürünü satın almak için önce hesabınıza giriş yapın';
echo $message;
// Ürünü satın almak için yeterli bakiyeniz yok

/*
$not = 75;
$harfNotu = ($not < 70) ? 'FF' : ($not <80 ? 'BB' : ($not <90 ? 'BA' : 'AA'));

echo $harfNotu; // BB
*/
/*
$not = 75;
$harfNotu = ($not >= 90) ? 'AA' : 
            ($not >= 80 ? 'BA' : 
            ($not >= 70 ? 'BB' : 'FF'));
echo $harfNotu; // Çıktı: BB

*/
?>