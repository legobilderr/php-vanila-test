<?php




$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('aboutculture', 'PagesController@aboutculture');

$router->get('contact', 'PagesController@contact');



$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->post('user', 'UsersController@ajax');

$router->get('checkEmail', 'UsersController@ajax');


$router->post('share', 'UsersController@share');


