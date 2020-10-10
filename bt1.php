<?php
function sortFunction($arr)
{
    $arrNew = [];
    $n = count($arr) / 3;
    for ($i = 0; $i <= $n - 1; $i++) {
        for ($j = 0; $j <= 2; $j++) {
            array_push($arrNew, $arr[$n * $j + $i]);
        }
    }
    return $arrNew;
}

$arrNew1 = [11, 2, 8, 10, 5, 99, 1, 8, 9];
foreach (sortFunction($arrNew1) as $value) {
    echo $value . ",";
}