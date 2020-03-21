<?php

$tasks = $database->selectAll('tasks','Task');

require("views/index.view.php");