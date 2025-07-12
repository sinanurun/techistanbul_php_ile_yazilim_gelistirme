<?php
//Cookie dizi olarak cookie de bilgileri tutma


// Dizi çerezi oluşturma
setcookie("kullanici[adi]", "Mehmet", time() + 3600);
setcookie("kullanici[soyadi]", "Demir", time() + 3600);
setcookie("kullanici[yas]", "35", time() + 3600);

// Okuma
if(isset($_COOKIE["kullanici"])) {
    echo "Adı: " . $_COOKIE["kullanici"]["adi"] . "<br>";
    echo "Soyadı: " . $_COOKIE["kullanici"]["soyadi"] . "<br>";
    echo "Yaş: " . $_COOKIE["kullanici"]["yas"];
}

?>