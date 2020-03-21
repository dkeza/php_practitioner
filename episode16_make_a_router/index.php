<?php

$rootDir = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR;

require($rootDir . "core/bootstrap.php");
require($rootDir . "core/task.php");

$router = Router::load($rootDir . "routes.php");

require($router->direct(Request::uri()));