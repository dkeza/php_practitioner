<?php

require("functions.php");
require("task.php");
require("connection.php");
require("querybuilder.php");

$pdo = Connection::connectToDB();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('tasks');

require("index.view.php");