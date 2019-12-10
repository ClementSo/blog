<?php

function run() {
  $url = $_SERVER['REQUEST_URI'];
  $method = $_SERVER['REQUEST_METHOD'];
  if ($url == '/articles') {
    require CONTROLLER . 'ArticleController.php';
    articleIndex();
  }
  elseif ($url == '/articles/create' && $method == "POST") {
    require CONTROLLER . 'ArticleController.php';
    articleStore();
  }
  elseif ($url == '/articles/create') {
    require CONTROLLER . 'ArticleController.php';
    articleCreate();
  }
  elseif (preg_match('#^\/articles\/([a-zA-Z0-9-_]+)$#', $url, $matches)) {
    require CONTROLLER . 'ArticleController.php';
    articleShow($matches[1]);
  }
  else if ($url == '/404') {
    require VIEW . '404.php';
  }
}
