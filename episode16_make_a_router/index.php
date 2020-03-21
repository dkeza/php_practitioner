<?php

$database = require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "core/bootstrap.php");
require($rootDir . "core/task.php");

$router = new Router();

require($rootDir . "routes.php");


require($rootDir . $router->direct(''));