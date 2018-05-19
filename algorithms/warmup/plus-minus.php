<?php

function plusMinus($arr) {
    $n = count($arr);
    
    $positiveCount = $negativeCount = $zeroCount = 0;
    for ($i=0; $i < $n; $i++) {
        if ($arr[$i] > 0) {
            $positiveCount += 1;
        }else if ($arr[$i] < 0) {
            $negativeCount += 1;
        }else {
           $zeroCount += 1; 
        }
    }

	$fractionPositive = number_format(($positiveCount / $n) , 7);
	$fractionNegative = number_format(($negativeCount / $n) , 7);
	$fractionZero 	  = number_format(($zeroCount / $n) , 7);

    return [$fractionPositive, $fractionNegative, $fractionZero];
}

$arr = [-4, 3, -9, 0, 4, 1];

echo implode(PHP_EOL, plusMinus($arr));