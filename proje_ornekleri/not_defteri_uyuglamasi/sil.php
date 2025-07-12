<?php
include 'baglan.php';

$id = $_GET['id'];
$sql = "DELETE FROM notlar WHERE id=$id";

if ($baglanti->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Hata: " . $baglanti->error;
}
?>