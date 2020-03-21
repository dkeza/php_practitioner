<?php

require("functions.php");

class Task {

    public $description = "";
    public $completed = false;

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function __construct($description, $completed=false) {
        $this->description = $description;
        $this->completed = $completed;
    }
}

$tasks = [
    new Task("Clean Up"),
    new Task("Read book", true)
];


require("index.view.php");