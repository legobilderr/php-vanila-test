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

    public function reinsert($email, $table, $parameters)
    {
        $columns =  array_keys($parameters);

        $values =  array_values($parameters);
        //        select *from Users  ORDER BY id DESC LIMIT 1;
        // "select * FROM %s WHERE Email = '%s'",
        if ($values[3] == NULL) {
            $values[3] = '/public/img/rick.png';
        };
        $sqlString = "UPDATE $table SET $columns[0]='$values[0]' ,$columns[1]='$values[1]',$columns[2]='$values[2]',$columns[3]='$values[3]'  WHERE Email = '$email' ";



        var_dump($sqlString);

        try {
            $query = $this->pdo->prepare($sqlString);

            $query->execute($parameters);
        } catch (Exception $e) {
            die('Something went wrong.');
        }
    }
}
