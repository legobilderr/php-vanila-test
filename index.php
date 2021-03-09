<?php

use App\Core\{Request, Router};


require 'functions.php';
require 'Task.php';

require 'vendor/autoload.php';

$greeting = 'Hello world ';




require 'core/bootstrap.php';



Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
