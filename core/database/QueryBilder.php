<?php


class QueryBilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }



    public function selectAll($table)
    {
        $statment = $this->pdo->prepare("select * from {$table}");

        $statment->execute();

        return $tasksFromDb = $statment->fetchAll(PDO::FETCH_CLASS);
    }

    public function reinsert($table, $parameters){
        $columns = implode(', ', array_keys($parameters));

        $values = ':' . implode(', :', array_keys($parameters));
//        select *from Users  ORDER BY id DESC LIMIT 1;
        $sqlString = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            $columns,
            $values
        );

    }

    public function insert($table, $parameters)
    {

        $columns = implode(', ', array_keys($parameters));


        $values = ':' . implode(', :', array_keys($parameters));

        $sqlString = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            $columns,
            $values
        );

        try {
            $query = $this->pdo->prepare($sqlString);

            $query->execute($parameters);
        } catch (Exception $e) {
            die('Something went wrong.');
        }
    }
}
