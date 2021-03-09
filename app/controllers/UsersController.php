<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{

    public function index()
    {
        $greeting = 'Hello world ';


        $tasksFromDb = App::get('query')->selectAll('todos', 'Task');

        $users = App::get('query')->selectAll('users');
        return view('users', [
            'users' => $users,
            'tasks' => $tasksFromDb,
            'greeting' => $greeting,
        ]);
    }

    public function store()
    {
        App::get('query')->insert('users', [
            'name' => $_POST['name']
        ]);


        return redirect('users');
    }
}
