<?php
/**
 * Created by PhpStorm.
 * User: 丁延赐
 * Date: 2019/3/25
 * Time: 9:00
 */
class zhoukao{
//    public function mn($n,$m){
//        //进行循环遍历
//        for($i=0;$i<$n;$i++){
//            if($i==$m){
//                //echo "删除".$m;
//               // return $this->mn($i,$m);
//            }else{
//                echo $i."<br>";
//            }
//
//        }
//
//    }
//    public function shuzu($array1,$array2,$array3){
//     print_r(array_sum($array1))."<br>";
//     print_r(array_sum($array2))."<br>";
//     print_r(array_sum($array3))."<br>";
//
//    }

public function maobao($array2){
    $count=count($array2);
    for ($i=0;$i<$count-1;$i++){
        for($j=$i+1;$j<$count;$j++){
            if($array2[$i]>$array2[$j]){
                $p=$array2[$i];
                $array2[$i]=$array2[$j];
                $array2[$j]=$p;
            }
        }
    }
    echo $p;
}


}
 $zhoukao=new zhoukao();
//$zhoukao->mn(18,6);
//$array1=[1,2,3,4,5,6,7,8,9];
//$array2=[2,3,4,5,8,6,7,5,7];
//$array3=[1,2,3,4,5,6,6,9,10];
//$zhoukao->shuzu($array1,$array2,$array3);
$array2=[2,3,10,5,8,6,7,5,7];
$zhoukao->maobao($array2);