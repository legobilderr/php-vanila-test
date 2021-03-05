<?php

$app['query']->insert('users', [
    'name' => $_POST['name']
]);


header('Location: /');
