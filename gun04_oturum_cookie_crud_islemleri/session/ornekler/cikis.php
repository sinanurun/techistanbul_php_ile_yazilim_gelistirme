<?php
session_start();

// Session'ı tamamen sonlandırma (tüm verileri siler + oturum ID'sini geçersiz kılar)
session_destroy();

header('Location: giris_formu.php');
?>
