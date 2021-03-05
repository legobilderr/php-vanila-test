<?php


class Conection
{

    public static function make($config)
    {
        try {
            // return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'admin', '123456Zx');

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['option']
            );
        } catch (PDOException $e) {
            die('cod not connect');
        }
    }
}
