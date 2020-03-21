<?php

require("functions.php");
require("connection.php");
require("querybuilder.php");

return new QueryBuilder(Connection::connectToDB());