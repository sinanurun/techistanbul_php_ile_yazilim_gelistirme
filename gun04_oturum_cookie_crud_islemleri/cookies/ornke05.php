<?php
//Cookie kullanarak bir ziyaretçi sayacı yapalım
// ziyaretçinin kaç kere farklı zamanlarda siteye girdiği bilginizi tutalım

if(isset($_COOKIE["ziyaretci"])) {
    $ziyaret = $_COOKIE["ziyaretci"] + 1;
} else {
    $ziyaret = 1;
}

setcookie("ziyaretci", $ziyaret, time() + 86400 * 30); // 30 gün geçerli

echo "Bu sayfayı " . $ziyaret . " kez ziyaret ettiniz.";

?>