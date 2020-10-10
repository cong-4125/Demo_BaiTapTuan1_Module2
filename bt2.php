<?php
function sumMax($arr){
   sort($arr) ;
   $i = count($arr) -1;
   $max = $arr[$i] + $arr[$i - 1];
   return $max;
}
$arr3 = [0, 100, -4, 8, 143, 5, 99, 100];
echo sumMax($arr3);