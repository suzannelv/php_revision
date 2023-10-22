<?php

if ($_SERVER['REQUEST_URI'] == '/') {
  require_once __DIR__ . '/../views/index.view.php';
}

if ($_SERVER['REQUEST_URI'] == '/about') {
  require_once __DIR__ . '/../views/about.view.php';
}

if ($_SERVER['REQUEST_URI'] == '/posts') {
  require_once __DIR__ . '/../views/posts.view.php';
}
