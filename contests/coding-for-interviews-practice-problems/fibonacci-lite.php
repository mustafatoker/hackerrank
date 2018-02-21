<?php

echo fibonacci(intval(fgets(STDIN)));

function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }

    return fibonacci($n - 1) + fibonacci($n - 2);
}
