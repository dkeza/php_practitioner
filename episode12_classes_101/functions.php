<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

function taskCompleted($task) {
    return $task['completed'];
}

function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}