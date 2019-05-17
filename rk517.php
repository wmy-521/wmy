<?php
$index=12;
function chou($index){
    if(!is_numeric($index)){
        return "不是一个整数";
    }
    while($index%2==0){
        $index/2==$index;
    }
    while($index%3==0){
        $index/3==$index;
    }
    while($index%5==0){
        $index/5==$index;
    }
    if($index%$index==1){
//        echo "<pre>";
        return "是丑数";
    }
    else{
        return "不是丑数";
    }
}

?>