<?php

$array = [51, 78, 9, 23];


function insertElArray(array &$arr, $pos, $el){
 $newArr = [];
 $length = count($arr);
 for($i = 0; $i<$length; $i++){
    if($i == $pos){
      $newArr[] = $el;
    }
    $newArr[]=$arr[$i];
 } 
 $arr = $newArr;
};

insertElArray($array, 2, 11);
var_dump($array);