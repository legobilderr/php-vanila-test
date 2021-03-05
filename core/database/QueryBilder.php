<?php


class QueryBilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }



    public function selectAll($table, $intoClass)
    {
        $statment = $this->pdo->prepare("select * from {$table}");

        $statment->execute();

        return $tasksFromDb = $statment->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}
