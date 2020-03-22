<?php

$app = [];

require("core/functions.php");
require("core/router.php");
require("core/request.php");
require("core/database/connection.php");
require("core/database/querybuilder.php");

$app['config'] = require("config.php");
$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));