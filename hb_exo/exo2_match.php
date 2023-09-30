<?php
$str = 'php';

echo match($str) {
  'php'=>'php',
  'vue' => 'vue',
  'react'=> 'react',
};