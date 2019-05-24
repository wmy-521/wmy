<?php
$num1=10;
$num2=16;
function num($num1,$num2){
    $sum=array_sum($num1,$num2);
    return $sum;
}
$arr=array(1,2);
$sum=array_sum($arr);
var_dump($sum);


?>