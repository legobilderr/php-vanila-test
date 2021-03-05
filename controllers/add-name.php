<?php

App::get('query')->insert('users', [
    'name' => $_POST['name']
]);


header('Location: /');
