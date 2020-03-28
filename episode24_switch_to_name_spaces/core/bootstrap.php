<?php

use Application\Core\App;
use Application\Core\Database\QueryBuilder;
use Application\Core\Database\Connection;

App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database']))
);

function view($name, $data = []) {

    extract($data);

    return require("views/{$name}.view.php");
}

function redirect($url) {
    header("HTTP/1.1 303 See Other");
    header("Location: {$url}");
}