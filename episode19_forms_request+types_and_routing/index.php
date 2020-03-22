<?php

require("core/bootstrap.php");
require("core/task.php");

$router = Router::load( "routes.php");

require($router->direct(Request::uri(), Request::method()));