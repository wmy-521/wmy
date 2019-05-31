<?php
$arr=[1,20,5,3,23,1];
$count=count($arr);
for ($i=0;$i<$count;$i++){
    $arr1=[];
    foreach ($arr1 as $k => $v){
        if($v<$arr){
            $v=$arr1;
        }
    }
}
?>