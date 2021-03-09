<?php


class PagesController
{
    public function home()
    {

        $tasksFromDb = App::get('query')->selectAll('todos', 'Task');

        $users = App::get('query')->selectAll('users');

        $greeting = 'Hello world ';


        return view('index', [
            'users' => $users,
            'tasks' => $tasksFromDb,
            'greeting' => $greeting,
        ]);
    }

    public function about()
    {

        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


    public function aboutculture()
    {
        return view('about-culture');
    }
}
