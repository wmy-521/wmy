<?php
$a=[1,3,6,9];
$b=[2,4,5,8,20];
function combine($a,$b){
    $str=[];
foreach ($a as $k =>$v){
    if($str<$v){
        $str['']=$k[''];
        return $str;
    }
}
}

?>