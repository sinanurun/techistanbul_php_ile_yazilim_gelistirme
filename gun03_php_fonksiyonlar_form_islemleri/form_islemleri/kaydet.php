<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ad = $_POST['ad']; // $_REQUEST['ad']
    $sehir = $_POST['sehir'];

    echo "Merhaba $ad<br>";
    echo "Şehriniz: $sehir";
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