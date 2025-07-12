<?php
include 'baglan.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];

    $sql = "INSERT INTO notlar (baslik, icerik) VALUES ('$baslik', '$icerik')";
    if ($baglanti->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Hata: " . $baglanti->error;
    }
}
?>

<h2>Yeni Not Ekle</h2>
<form method="post">
    Başlık: <input type="text" name="baslik" required><br>
    İçerik: <textarea name="icerik" required></textarea><br>
    <button type="submit">Kaydet</button>
</form>