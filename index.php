<?php 
error_reporting(-1);
// Найти целое число в диапазоне от N до M с наибольшей суммой  делителей. 
$n = 16;
$m = 220;

    $number = 0;
    $summ = 0; 
    for($i = $n; $i <= $m; $i++){
        $sum = 0;
        for($a = 1; $a <= $i; $a++){
            if($i % $a == 0){
                $sum = $sum + $a;
            }
        }
        if($sum > $summ){
            $summ = $sum;
            $number = $i;
        }
    }
    echo("Целое число с  наибольшей суммой делителей в дипапзоне от {$n} до {$m} является {$number} с суммой делителей {$summ}");

