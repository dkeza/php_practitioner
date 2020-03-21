<?php

require("bootstrap.php");
require("task.php");

$pdo = Connection::connectToDB();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('tasks');

require("index.view.php");