<?php

$router->get('', 'TasksController@home');
$router->post('store', 'TasksController@store');

$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');