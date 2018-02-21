<?php

$uncoupledInteger = array_reduce(explode(', ', fgets(STDIN)), function ($a, $b) {
    return $a ^ $b;
});

echo $uncoupledInteger;
