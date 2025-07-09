<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST["ad"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $sifre = password_hash($_POST["sifre"], PASSWORD_DEFAULT);

    if (!$email) {
        echo "Geçersiz e-mail adresi.";
    } else {
        echo "Hoş geldiniz $ad<br>";
        echo "E-mail: $email";
        // Burada veritabanına kaydetme işlemi yapılabilir
    }

  //  echo $ad, $email, $sifre;
}
?>