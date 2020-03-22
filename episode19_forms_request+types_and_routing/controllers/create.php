<?php

$app['database']->Insert($_POST['description']);

header("HTTP/1.1 303 See Other");
header("Location: http://$_SERVER[HTTP_HOST]");