<?php

session_start();

define("SRC", __DIR__."/../src/");
define("CONTROLLER", __DIR__."/../src/controller/");
define("MODEL", __DIR__."/../src/model/");
define("VIEW", __DIR__."/../src/view/");


// connexion bdd
try {
  $bdd = new PDO('mysql:host=localhost;dbname=Blog;charset=utf8', 'root', 'root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  require SRC . 'router.php';
  run();
}
catch(Exception $e) {
  var_dump($e);
}
