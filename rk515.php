<?php
$arr=[1,2,3,4,5,6,7,8,9];
$len=count($arr);
function arr($arr,$len){
    for($i=0;$i<$len;$i++){
        if($arr[$i]%2==1){
            $a=$i[''];
        }
    }
    for($i=0;$i<$len;$i++){
        if($arr[$i]%2!=1){
            $a=$i[''];
        }
    }
    return $a;
    print_r($a);
}

?>