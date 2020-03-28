<?php

namespace Application\Core\Database;
use PDO;

class Connection {
    static function make($config) {
        $pdo = NULL;
        try {
            $pdo = new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $pdo;
    }
}