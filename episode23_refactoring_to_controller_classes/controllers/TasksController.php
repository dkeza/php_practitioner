<?php

class TasksController {

    public function home() {
        $tasks = App::get('database')->selectAll('tasks','Task');

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

        header("HTTP/1.1 303 See Other");
        header("Location: http://$_SERVER[HTTP_HOST]");
    }


}