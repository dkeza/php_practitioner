<?php

require("functions.php");
require("task.php");

$pdo = connectToDB();

$tasks = fetchAllTasks($pdo);


require("index.view.php");