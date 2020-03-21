<?php

$query = require("core/bootstrap.php");
require("core/task.php");

$tasks = $query->selectAll('tasks','Task');

//dd($tasks);

require("views/index.view.php");