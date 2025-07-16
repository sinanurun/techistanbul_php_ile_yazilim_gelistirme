<?php

/*
Php'de hazır fonksiyonlar
dosya işlemleri
    */
/*
$a =  readfile("deneme.txt"); // dosyanın içeriğini okur kaç byte olduğunu yazdırır
echo $a;
*/
/*
$myfile = fopen("deneme.txt", "r") or die("Dosyaya erişelemiyor - Unable to open file!"); //dosya açmak için
echo fread($myfile,filesize("deneme.txt")); //okumak için
echo fread($myfile,10); //10 karakter okur
fclose($myfile); // iş bitince kapatmak için
*/

/*
$myfile = fopen("deneme.txt", "r") or die("Unable to open file!");
echo fgets($myfile); // satır olur
echo "<br>";
echo fgets($myfile);

fclose($myfile);
*/
/*
$myfile = fopen("deneme.txt", "r") or die("Unable to open file!");
// dosyanın sonuna kadar sırayla satıları yazdırır
while(!feof($myfile)) { //dosyanın sonuna kadar okundu mu?
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
*/
/*
//dosya oluşturmak için
$myfile = fopen("testdosyasi.txt", "w");
*/
/*
$myfile = fopen("testdosyasi.txt", "w") or die("Unable to open file!");
$txt = "Techistanbul\n";
fwrite($myfile, $txt);
$txt = "Php Atolyesi\n";
fwrite($myfile, $txt);
fclose($myfile);
*/
?>