<?php

// count()
$data = [
          'username' => 'Bob', 
          'sex'=> 'H',
          'age'=> 12,
          'height'=> 150,
          'hobby'=>[
            "basketball",
            "football",
            "bike"
          ]
   ];
echo count($data, 1); // 8
echo "<hr/>";

// array_search()
echo array_search(12, $data, true);
echo "<hr/>";

// array_push()
$newData = $data;
array_push($newData, 'nouvel élément');
var_dump($newData);
echo "<hr/>";

// array_unique()
$arr = [2, 2, 4, 1, 99, 7, 5, 4];
$res = array_unique($arr);
var_dump($res);
echo "<hr/>";


// array_key()
var_dump(array_keys($arr));
var_dump(array_keys($arr, 1));//3

// array_merge()
$arr1 = [1, 2, 3];
$arr2 = ['20'=>'a', '12'=>'b', '2'=>'c', '3'=>'d'];
$arr3 = array_merge($arr2, $arr1 );
var_dump($arr3);