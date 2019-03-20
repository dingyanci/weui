<?php
/**
 * Created by PhpStorm.
 * User: 丁延赐
 * Date: 2019/3/20
 * Time: 8:47
 */
class choushu{
    public function GetUglyNumber_Solution($index){
        if($index>0&&$index!=1){
            if($index%2==0){
                $data=$index/2;
                echo $data;
            }elseif($index%3==0){
                $data=$index/3;
                echo $data;
            }elseif ($index%5==0){
                $data=$index/5;
                echo $data;
            }else{
                return "对不起不能被整除";
            }
        }
    }
}
$choushu=new choushu();
$index=25;
print_r($choushu->GetUglyNumber_Solution($index));