<?php
  function random_string($count){
   $str='';

   //定义一个数组存放0-9的数字字符和26个大写英文字符
   $arr=array('0','1','2','3','4','5','6','7','8','9',
             'A','B','C','D','E','F','G','H','I','J','K','L',
             'M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

             //利用随机函数生成指定长度的字符串
             for($i=0;$i<$count;$i++){
                $index=rand(0,35);
                $str.=$arr[$index];

             }
             return $str;
            }
            $testStr=random_string(6);
            echo $testStr;

?>