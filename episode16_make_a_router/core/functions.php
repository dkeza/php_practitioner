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

function connectToDB() {
    $pdo = NULL;
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=tasks','root','root');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    return $pdo;
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('SELECT id, description, completed FROM tasks');

    $statement->execute();
    $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    return $tasks;
}