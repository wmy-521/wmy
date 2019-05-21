<?php
$array=[1,2,2,4,4,5,7,7];
//print_r($array);
$arr=[];
function num($array){
    foreach ($array as $k =>$v){
        if($v==1){
            return $array;
        }
    }
}

?>