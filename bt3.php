<?php
function minDistance($arr)
{
    sort($arr);
    $arrNew = [];
    $min = $arr[1] - $arr[0];
    for ($i = 2; $i < count($arr); $i++) {
        if ($min > $arr[$i] - $arr[$i - 1]) {
            $min = $arr[$i] - $arr[$i - 1];
        }
    }
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] - $arr[$i - 1] == $min) {
            array_push($arrNew, array($arr[$i - 1], $arr[$i]));
        }
    }
    return $arrNew;

}

$arr4 = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
$arr5 = minDistance($arr4);
var_dump($arr5);


