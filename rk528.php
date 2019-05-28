<?php
$num=7;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
function find($num,$array){
    $str=[];
    foreach ($array as $k =>$v){
        $str=[$v];
        if($v==$num){
            return true;
        }else{
            return false;
        }
    }
}

?>