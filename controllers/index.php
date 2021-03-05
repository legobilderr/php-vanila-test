<?php

$tasksFromDb = $app['query']->selectAll('todos', 'Task');

$users = $app['query']->selectAll('users');


require 'views/index.view.php';
