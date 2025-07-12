<?php
include 'baglan.php';

$sql = "SELECT * FROM notlar ORDER BY tarih DESC";
$sonuc = $baglanti->query($sql);
?>

<h2>Notlarım</h2>
<ul>
<?php while($satir = $sonuc->fetch_assoc()): ?>
    <li>
        <strong><?= $satir['baslik'] ?></strong><br>
        <?= $satir['icerik'] ?><br>
        <small><?= $satir['tarih'] ?></small><br>
        <a href="duzenle.php?id=<?= $satir['id'] ?>">Düzenle</a> |
        <a href="sil.php?id=<?= $satir['id'] ?>">Sil</a>
    </li><hr>
<?php endwhile; ?>
</ul>

<a href="ekle.php">Yeni Not Ekle</a>