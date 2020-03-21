<?php

$database = require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "core/bootstrap.php");
require($rootDir . "core/task.php");

$routes = [
  '' => 'controllers/index.php',
  'about' => 'controllers/about.php',
  'about/culture' => 'controllers/about-culture.php',
  'contact' => 'controllers/contact.php'
];


require($rootDir . "controllers/index.php");