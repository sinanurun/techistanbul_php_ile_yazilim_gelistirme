<form method="post">
    <input type="checkbox" name="renkler[]" value="kırmızı"> Kırmızı<br>
    <input type="checkbox" name="renkler[]" value="mavi"> Mavi<br>
    <input type="checkbox" name="renkler[]" value="yeşil"> Yeşil<br>
    <input type="submit" value="Gönder">
</form>


<?php

if (!empty($_POST['renkler'])) {
    foreach ($_POST['renkler'] as $renk) {
        echo "$renk seçildi.<br>";
    }
}


?>