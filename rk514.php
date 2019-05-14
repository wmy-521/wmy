<?php
$n=5;
print_r(index($n));
function index($n){
    if($data['n']=0){
        return 1;
    }
    $str=[0,1,2];
    if($data['n']<3){
        return index($data['n']-1)+index($data['n']-2);

    }
    return $str;

}

?>