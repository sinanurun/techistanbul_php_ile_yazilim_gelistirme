<?php
session_start();

// Giriş kontrolü
if(!isset($_SESSION['giris_yapan'])) {
    header('Location: giris.php');
    exit;
}

$oturum_suresi = time() - $_SESSION['giris_zamani'];
?>
<h1>Hoş geldiniz, <?php echo $_SESSION['giris_yapan']; ?></h1>
<p>Oturum süresi: <?php echo floor($oturum_suresi/60); ?> dakika</p>

<a href="cikis.php">Çıkış Yap</a>