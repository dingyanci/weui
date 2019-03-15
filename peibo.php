<?php
function abc($n){
    //首先进行判断
    if($n<=0){
        return 0;
    }
    //定义第一个下键和第二个 为一
    $array[1]=$array[2]=1;
    //进行循环输出
    for ($i=3;$i<=$n;$i++){
        $array[$i]=$array[$i-1]+$array[$i-2];
    }
    return $array;
}
print_r(abc(50));
function abc2($q){
    if($q<=0) return 0;
    if($q==1||$q==2) return 1;
    //retuen
    return abc2($q-1)+abc2($q-2);
}
var_dump(abc2(20));