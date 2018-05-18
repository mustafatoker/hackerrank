<?php 

$array = [
    [ 11, 2, 4],
    [ 4, 5, 6],
    [ 10, 8, -12]
];

$primaryDiag = 0;
$secondaryDiag = 0;

$matrisCount = count($array);
$x = $matrisCount-1;
for ($i=0; $i<$matrisCount; $i++) {
	$primaryDiag 	+= $array[$i][$i];
	$secondaryDiag	+= $array[$i][$x];
	$x--;
}

echo abs($primaryDiag-$secondaryDiag);


