<?php

class PagesController {

    public function home() {
        $tasks = App::get('database')->selectAll('tasks','Task');

        return view('index', ['tasks' => $tasks]);
    }

    public function about() {
        return view('about');
    }

    public function aboutCulture() {
        $company = "Acme Inc.";

        return view('about-culture', ['company'=>$company]);
    }

    public function contact() {
        return view('contact');
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