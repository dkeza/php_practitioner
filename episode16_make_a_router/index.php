<?php

$query = require("bootstrap.php");
require("task.php");

$tasks = $query->selectAll('tasks','Task');

//dd($tasks);

require("index.view.php");