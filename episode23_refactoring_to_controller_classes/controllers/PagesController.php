<?php

class PagesController {

    public function home() {
        $tasks = App::get('database')->selectAll('tasks','Task');

        require("views/index.view.php");
    }

    public function about() {
        require("views/about.view.php");
    }

    public function aboutCulture() {
        $company = "Acme Inc.";

        require("views/about-culture.view.php");
    }

    public function contact() {
        require("views/contact.view.php");
    }

    public function create() {
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