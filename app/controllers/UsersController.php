<?php

namespace App\Controllers;

use App\Core\App;

session_start();

class UsersController
{


    public function ajax()
    {
        $_SESSION['Email'] = $_POST['Email'];
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


    public function  share()
    {

        if (move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/../../public/img/' . $_FILES["avatar"]['name'])) {
            echo "Uploaded";
        } else {
            echo "File was not uploaded";
        }

        App::get('query')->reinsert($_SESSION['Email'], 'Users', [
            'Company' => $_POST['Company'],
            'Position' => $_POST['Position'],
            'AboutMe' => $_POST['About'],
            'avatar' => $_FILES['avatar']['name'],
        ]);
    }

    public function index()
    {
        $greeting = 'Hello world ';




        $users = App::get('query')->selectAll('Users');
        return view('users', [
            'users' => $users,
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
