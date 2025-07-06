<?php 
//Birden fazla koşulu kontrol etmek için kullanılır.​

//Bir koşul doğruysa (true) if kod bloğunu çalıştırır değilse elseif diğer bir koşulu kontrol eder, 
//eğer elseif blok(ları) doğru koşulu sağlamaz ise else bloğuna ait kod bloğunu çalıştırır.

$not = 75;

if ($not >= 90) {
    echo "Notunuz: AA";
} elseif ($not >= 80) {
    echo "Notunuz: BA";
} elseif ($not >= 70) {
    echo "Notunuz: BB";
} else {
    echo "Kaldınız.";
}


?>