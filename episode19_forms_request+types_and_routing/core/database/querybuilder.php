<?php

class QueryBuilder {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
}

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);;
    }

    public function Insert($description)
    {
        $statement = $this->pdo->prepare("INSERT INTO tasks (description) VALUES (?)");

        $statement->execute([$description]);

        return true;;
    }

}