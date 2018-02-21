<?php

$inputs = [];
while (false !== ($line = fgets(STDIN))) {
    $inputs[] = $line;
}

list($m_th, $list) = $inputs;
$m_th = intval($m_th);
$integerList = explode(' ', $list);

$sizeIntegerList = count($integerList);
if($m_th <= $sizeIntegerList) {
    echo $integerList[$sizeIntegerList - $m_th];
}else{
    echo 'NIL';
}
