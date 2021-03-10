<?php




$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('aboutculture', 'PagesController@aboutculture');

$router->get('contact', 'PagesController@contact');



$router->get('users', 'UsersController@index');

$router->post('user', 'UsersController@avatar');

$router->post('users', 'UsersController@store');
