<?php
//Cookie okuma işemleri

if(isset($_COOKIE['kullaniciAdi'])) {
    echo "Cookie değeri: kullaniciAdi" . $_COOKIE['kullaniciAdi'];
} else {
    echo "Cookie bulunamadı. kullaniciAdi";
}
// bir önceki örnekte cookie oluşturmuştuk

echo "<hr>";

if(isset($_COOKIE['kullaniciDili'])) {
    echo "Cookie değeri: kullaniciDili" . $_COOKIE['kullaniciDili'];
} else {
    echo "Cookie bulunamadı.kullaniciDili";
}

?>