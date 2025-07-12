<?php
include 'baglan.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];

    $sql = "UPDATE notlar SET baslik='$baslik', icerik='$icerik' WHERE id=$id";
    if ($baglanti->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Hata: " . $baglanti->error;
    }
}

$sql = "SELECT * FROM notlar WHERE id=$id";
$sonuc = $baglanti->query($sql);
$not = $sonuc->fetch_assoc();
?>

<h2>Notu Düzenle</h2>
<form method="post">
    Başlık: <input type="text" name="baslik" value="<?= $not['baslik'] ?>" required><br>
    İçerik: <textarea name="icerik" required><?= $not['icerik'] ?></textarea><br>
    <button type="submit">Güncelle</button>
</form>