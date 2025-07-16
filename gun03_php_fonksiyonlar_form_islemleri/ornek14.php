<?php

/*
Php'de hazır fonksiyonlar
zaman methodları
    */

echo date("d/m/Y H:i:s"); // Şu anki tarih ve saat bilgisi
echo "<br>";
echo time(); // Şu andaki zaman damgası

echo "<br>";
date_default_timezone_set('Europe/Istanbul');
echo date("d/m/Y H:i:s"); // Artık Türkiye saatine göre gösteriir



?>