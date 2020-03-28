<?php

namespace Application\Controllers;

Use Application\Core\App;

class TasksController {

    public function home() {
        $tasks = App::get('database')->selectAll('tasks','Application\Core\Task');

        return view('index', ['tasks' => $tasks]);
    }

    public function store() {
        App::get('database')->insert(
            'tasks',
            [
                'description' => $_POST['description'],
                'completed' => 0
            ]
        );

        $url = "/";
        redirect($url);
    }


}