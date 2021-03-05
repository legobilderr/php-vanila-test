<?php


class Conection
{

    public static function make($config)
    {
        try {

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
