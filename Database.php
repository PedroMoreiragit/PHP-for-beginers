<?php 

class Database
{
    public $connection;

    public function __construct($config, $usernmae = 'root', $password = '')
    {
        
        $dsn = ('mysql:' . http_build_query($config, '', ';'));

        $this->connection = new PDO($dsn, $usernmae, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($query, $params = [])
    {


        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}