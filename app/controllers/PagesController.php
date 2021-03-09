<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {



        $greeting = 'Hello world ';


        return view('index', [
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
