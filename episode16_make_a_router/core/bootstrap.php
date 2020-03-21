<?php

$app = [];

require($rootDir . "core/functions.php");
require($rootDir . "core/router.php");
require($rootDir . "core/request.php");
require($rootDir . "core/database/connection.php");
require($rootDir . "core/database/querybuilder.php");

$app['config'] = require($rootDir . "config.php");
$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));