<?php

$database = require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "core/bootstrap.php");
require($rootDir . "core/task.php");

$router = new Router();

require($rootDir . "routes.php");

$uri = trim($_SERVER['REQUEST_URI'],'/');

require($rootDir . $router->direct($uri));