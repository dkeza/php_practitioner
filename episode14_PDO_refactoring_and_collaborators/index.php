<?php

require("functions.php");
require("task.php");
require("connection.php");

$pdo = Connection::connectToDB();

$tasks = Connection::fetchAllTasks($pdo);


require("index.view.php");