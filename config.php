<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'admin',
        'password' => '123456Zx',
        'connection' => 'mysql:host=127.0.0.1',
        'option' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]

];
