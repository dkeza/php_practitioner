<?php

require("vendor/autoload.php");
require("core/bootstrap.php");

$router = Router::load( "routes.php");
$router->direct(Request::uri(), Request::method());