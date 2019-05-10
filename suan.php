<?php
function arr($str){
    $arr=str_split($str);
    foreach ($arr as $k =>$v){
        if(isset($res[$v])){
            $res[$v] ++;
        }else{
            $res[$v]=1;
        }
        if($res[$v]>=3){
            return $v;
            break;
        }
    }
}
$res=arr('ferfsffgsgsgtdt');

echo $res;

function suan($str){
    $arr=str_split($str);

    foreach ($arr as $k=>$v){
        if(isset($str[$v])){
            $str[$v]++;
        }else{
            $str[$v]=1;
        }
        if($str[$v]>=3){
            return $v;
            break;
        }
    }
}
$str=suan('defsfrvrtgrgrtgtgtg');
echo $str;
?>