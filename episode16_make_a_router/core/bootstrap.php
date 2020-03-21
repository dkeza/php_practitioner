<?php

$rootDir = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR;

require($rootDir . "core/functions.php");
require($rootDir . "core/database/connection.php");
require($rootDir . "core/database/querybuilder.php");

$config = require($rootDir . "config.php");

return new QueryBuilder(Connection::make($config['database']));