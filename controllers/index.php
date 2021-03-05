<?php

$tasksFromDb = App::get('query')->selectAll('todos', 'Task');

$users = App::get('query')->selectAll('users');



require 'views/index.view.php';
