<?php
// Giriş kontrolü
if(!isset($_COOKIE['giris_yapan'])) {
    header('Location: giris_formu.php');
    exit;
}

$oturum_suresi = time() - $_COOKIE['giris_zamani'];
?>
<h1>Hoş geldiniz, <?php echo $_COOKIE['giris_yapan']; ?></h1>
<p>Oturum süresi: <?php echo floor($oturum_suresi/60); ?> dakika</p>

<a href="cikis.php">Çıkış Yap</a>