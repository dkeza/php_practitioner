<?php

$database = require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "core/bootstrap.php");
require($rootDir . "core/task.php");

$router = Router::load($rootDir . "routes.php");

require($router->direct(Request::uri()));