<?php

$fiboArray = [];

function fibonacci($n)
{
    global $fiboArray;

    if (array_key_exists($n, $fiboArray)) {
        $number = $fiboArray[$n];
    } elseif ($n == 0) {
        $number = 0;
    } elseif ($n == 1 || $n == 2) {
        $number = 1;
    } else {
        $number = bcadd(fibonacci($n - 1), fibonacci($n - 2));
        $fiboArray[$n] = $number;
    }

    return $number;
}

while (false !== ($n = fgets(STDIN))) {
    echo fibonacci($n), PHP_EOL;
}