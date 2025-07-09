<?php
//basit form doğrulama


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ad"])) {
        echo "Ad alanı boş bırakılamaz.";
        // 5 saniye bekle
        sleep(5);

        // Başka bir sayfaya yönlendir
        header("Location: anasayfa.php");
        exit; // header()'dan sonra exit veya die kullanmak iyi bir uygulamadır
    } else {
        $ad = htmlspecialchars($_POST["ad"]);
        echo "Adınız: $ad";
    }
}


/*
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ad = $_GET['ad'];
    $sehir = $_GET['sehir'];

    echo "Adınız: $ad<br>";
    echo "Şehriniz: $sehir";
}
?>
*/
//<script>alert('Hileli kod!');</script>
/*
$ad = $_POST['ad'];
echo "<p>Hoş geldin, $ad</p>";
*/
/*
$ad = htmlspecialchars($_POST['ad'], ENT_QUOTES, 'UTF-8');
echo "<p>Hoş geldin, $ad</p>";
*/

?>