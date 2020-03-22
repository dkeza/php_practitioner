<?php

class Post {

    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post("First post", true),
    new Post("Second post", true),
    new Post("Third post", true),
    new Post("Forth post", false)
];

//$unpublishedPosts = array_filter($posts, function($post) {
//    return !$post->published;
//});

$modified = array_map(function($post) {
    return ['title', $post->title];
}, $posts);

var_dump($modified);

die();

require("core/bootstrap.php");
require("core/task.php");

$router = Router::load( "routes.php");

require($router->direct(Request::uri()));