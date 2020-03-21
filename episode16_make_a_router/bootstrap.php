<?php

require("functions.php");
require("connection.php");
require("querybuilder.php");

$config = require("config.php");

return new QueryBuilder(Connection::make($config['database']));