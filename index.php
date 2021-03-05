<?php

require 'functions.php';
require 'Task.php';

$greeting = 'Hello world ';




require 'core/bootstrap.php';


// die(var_dump($app));


require Router::load('routes.php')
    ->direct(Request::uri());
