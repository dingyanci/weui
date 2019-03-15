<?php
class feibo{
    //第一个是非递归的方法
    function abc($n){
        //进行判断
        if($n<=0){
            return 0;
        }
        //定义数组下标当中的第一个值和第二个值
        $array[1]=$array[2]=1;
        //进行循环 从三开始进行
        for ($i=3;$i<=$n;$i++){
            //往数组中进行插入
            $array[$i]=$array[$i-1]+$array[$i-2];
        }
        return $array;
    }

    //第二个是进行递归的方法
    function digui($n){
        //进行判断
        if($n<=0) return 0;
        if($n==1||$n==2) return 1;
        return digui($n-1)+digui($n-2);
    }
    //打印第二个


}
print_r(abc(50));var_dump(digui(40));