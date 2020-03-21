<?php

class Connection {
    static function connectToDB() {
        $pdo = NULL;
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=tasks','root','root');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $pdo;
    }
}