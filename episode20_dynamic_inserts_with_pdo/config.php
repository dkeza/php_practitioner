<?php

return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1',
        'name' => 'tasks',
        'username' => 'root',
        'password' => 'root',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];