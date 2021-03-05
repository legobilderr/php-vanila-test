<?php

$tasksFromDb = $app['query']->selectAll('todos', 'Task');


require 'views/index.view.php';
