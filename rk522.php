<?php
$arr='student a am I';
//function dao($arr){
$srt=explode(' ',$arr);
//print_r($srt);
foreach ($srt as $k=>$v){
    $a=strrev($v);
    echo $a;
}
$str=strrev($arr);
    echo $str;

//    return $str;
//}


?>