<?php

use App\Core\{Request, Router};


require 'functions.php';
require 'vendor/autoload.php';

require 'core/bootstrap.php';



Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
