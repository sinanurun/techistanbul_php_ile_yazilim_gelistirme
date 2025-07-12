<?php
// Cookie'yi sil
setcookie('sepet', '', [
    'expires' => time() - 3600,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

// Sayfayı yenile (cookie silindikten sonra)
header("Location: sepet.php");
exit;
?>