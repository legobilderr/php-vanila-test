<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function ajax()
    {

        App::get('query')->insert('Users', [
            'FirstName' => $_POST['FirstName'],
            'LastNAme' => $_POST['LastNAme'],
            'birthday' => $_POST['birthday'],
            'ReportSubject' => $_POST['ReportSubject'],
            'country' => $_POST['country'],
            'phone_num' => $_POST['phone_num'],
            'Email' => $_POST['Email'],

        ]);
    }


    public function  share(){
        var_dump($_POST);
        App::get('query')->insert('Users', [
            'Company' => $_POST['Company'],
            'Position' => $_POST['Position'],
            'About' => $_POST['About'],
            'avatar' => $_POST['avatar'],
        ]);

//        return redirect('users');
    }

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
        App::get('query')->insert('Users', [
            'FirstName' => $_POST['FirstName']
        ]);


        return redirect('users');
    }
}
