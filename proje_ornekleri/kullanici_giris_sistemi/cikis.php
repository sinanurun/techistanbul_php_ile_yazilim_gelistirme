<?php
session_start();
session_destroy();

setcookie("kullaniciAdi", "", time() - 3600, "/");

header("Location: index.php");
?>