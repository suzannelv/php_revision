<?php

function dd($data){
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}
function filterByFeature($items, $condition){
  $result = [];
  foreach($items as $item){
    if($item['featured' == $condition]){
      $result[] = $item;
    }
   }
  return $result;
}
function featuredPost($posts){
 return array_filter($posts, function($post){
    return $post['featured' == true];
  });
}