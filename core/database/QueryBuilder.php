<?php 


class QueryBuilder {

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table) 
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectLast($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} ORDER BY id DESC LIMIT 3");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    } 

    public function insert($table, $parameters)
    {
       
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode( ",", array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $parameters) {
        $sql = sprintf(
            'update into %s (%s) values (%s)',
            $table,
            implode( ",", array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
    }

    public function deletePost($table, $parameters) {
        // $sql = sprintf(
        //     'delete from `%s` WHERE id = %s',
        //     $table,
        //     implode(array_keys($parameters))
        // );
            $param = implode(array_keys($parameters));

            $sql = "DELETE FROM `{$table}` WHERE id = {$param}";

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute();

        } catch(PDOException $e) {
            die($e->getMessage());
        }

       

    }
}