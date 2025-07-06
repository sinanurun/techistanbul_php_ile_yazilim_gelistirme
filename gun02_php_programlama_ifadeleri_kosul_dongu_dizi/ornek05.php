<style>
    .grade { padding: 10px; margin: 5px; border-radius: 5px; text-align: center; }
    .grade-aa { background-color: #4CAF50; color: white; }
    .grade-ba { background-color: #2196F3; color: white; }
    .grade-bb { background-color: #FFC107; color: black; }
    .grade-fail { background-color: #F44336; color: white; }
</style>


<?php 
//Birden fazla koşulu kontrol etmek için kullanılır.​

//Bir koşul doğruysa (true) if kod bloğunu çalıştırır değilse elseif diğer bir koşulu kontrol eder, 
//eğer elseif blok(ları) doğru koşulu sağlamaz ise else bloğuna ait kod bloğunu çalıştırır.

$not = 90;
/*
echo '<style>
    .grade { padding: 10px; margin: 5px; border-radius: 5px; text-align: center; }
    .grade-aa { background-color: #4CAF50; color: white; }
    .grade-ba { background-color: #2196F3; color: white; }
    .grade-bb { background-color: #FFC107; color: black; }
    .grade-fail { background-color: #F44336; color: white; }
</style>';
*/
if ($not >= 90) {
    echo '<p class="grade grade-aa">Notunuz: AA</p>';
} elseif ($not >= 80) {
    echo '<p class="grade grade-ba">Notunuz: BA</p>';
} elseif ($not >= 70) {
    echo '<p class="grade grade-bb">Notunuz: BB</p>';
} else {
    echo '<p class="grade grade-fail">Kaldınız.</p>';
}

?>