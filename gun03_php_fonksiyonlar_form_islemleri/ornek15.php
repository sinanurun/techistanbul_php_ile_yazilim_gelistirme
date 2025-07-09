<?php

/*
Php'de hazır fonksiyonlar
dosya işlemleri
    */
/*
$a =  readfile("deneme.txt"); // dosyanın içeriğini okur kaç bayte olduğunu yazdırır
echo $a;
*/
/*
$myfile = fopen("deneme.txt", "r") or die("Unable to open file!"); //dosya açmak için
echo fread($myfile,filesize("deneme.txt")); //okumak için
fclose($myfile); // iş bitince kapatmak için
*/

/*
$myfile = fopen("deneme.txt", "r") or die("Unable to open file!");
echo fgets($myfile); // satır olur
echo fgets($myfile);

fclose($myfile);
*/
/*
$myfile = fopen("deneme.txt", "r") or die("Unable to open file!");
// dosyanın sonuna kadar sırayla satıları yazdırır
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
*/
/*
//dosya oluşturmak için
$myfile = fopen("testdosyasi.txt", "w");
*/

$myfile = fopen("testdosyasi.txt", "w") or die("Unable to open file!");
$txt = "Techistanbul\n";
fwrite($myfile, $txt);
$txt = "Php Atolyesi\n";
fwrite($myfile, $txt);
fclose($myfile);
?>