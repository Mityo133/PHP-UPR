<?php

class Database
{
    public $pdo;
    public $statement;
    
    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
        $this->pdo = new PDO($dsn, $config['username'], $config['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    }

    public function getPdo($sql,$prams=[])
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($prams);
        return $statement;
    }
    public function find(){
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
   public function findOrFail($sql, $params = [])
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        $result = $statement->fetch();

        if (!$result) {
            abort(404); // or any other code, depending on your use case
        }

        return $result;
    }
}
