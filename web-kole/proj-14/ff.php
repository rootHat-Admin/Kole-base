<?php 
    $x = 5;
    $y = 2;
    $z = null;

    $sum1 = $x + $y;
    $sum2 = $x - $y;
    $sum3 = $x * $y;
    $sum4 = $x / $y;
    $sum5 = $x ** $y;
    $sum6 = $x % $y;
    
    echo "$x + $y = $sum1 <br>";
    echo "$x - $y = $sum2 <br>";
    echo "$x * $y = $sum3 <br>";
    echo "$x / $y = $sum4 <br>";
    echo "$x ** $y = $sum5 <br>";
    echo "$x % $y = $sum6 <br>";
    echo "z = $z <- нөлге тен<br>";
?>

<?php 
    $ball = 12344;

    if ($ball >= 90 && $ball <= 100) {
        echo "Баға: $ball <br>";
        echo "Тамаша | 5";
    } else if ($ball >= 70 && $ball <= 89) {
        echo "Баға: $ball <br>";
        echo "Жақсы | 4";
    } else if ($ball >= 50 && $ball <= 69) {
        echo "Баға: $ball <br>";
        echo "Қанағаттанарлық | 3";
    } else if ($ball >= 0 && $ball <= 49) {
        echo "Баға: $ball <br>";
        echo "Нашар | 2";
    } else {
        echo "Былай $ball-мәні жоқ!";
    }

?>
