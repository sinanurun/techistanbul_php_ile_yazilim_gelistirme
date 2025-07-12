<?php
//Cookies, kullanıcı bilgilerini tarayıcıya saklamamızı sağlar. 
// Tarayıcıda belirli bir süre kalır. Genellikle kullanıcı oturum açma durumu, 
// dil tercihi gibi şeyleri saklamak için kullanılır.

// setcookie( isim, değer, süresi, path )
setcookie("kullaniciAdi", "Ahmet", time() + (60*60*24*7), "/"); // 7 gün geçerli

/*
time() + saniye cinsinden süre → cookie'nin ne kadar süre tutulacağını belirtir.
"Ahmet" → cookie'nin değeri
path → hangi dizinde kullanılacağı (/ tüm site için)
*/

?>