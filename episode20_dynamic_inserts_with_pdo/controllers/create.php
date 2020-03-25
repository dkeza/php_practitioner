<?php

$app['database']->insert(
    'tasks',
    [
        'description' => $_POST['description'],
        'completed' => 0
    ]
);

header("HTTP/1.1 303 See Other");
header("Location: http://$_SERVER[HTTP_HOST]");