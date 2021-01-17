<?php

class Database
{
    static private $pdo;
    static public $operators  = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(string $method)
    {
        //static binding
        // $obj = new static;
        // $obj->table;

        self::$pdo = $method;
        return new static; //return entire class object
    }

    public function table(string $name)
    {
        $this->table = $name;
        return $this;
    }

    public function insert(array $data)
    {
        var_dump('Connected to the database using '. self::$pdo);
        var_dump("INSERTING INTO {$this->table} VALUES ('.json_encode($data).')");
    }

    public function getMethod()
    {
        return static::$pdo;
    }
}

header('Content-Type/plain', true);

Database::connect('pdo')->table('user')->insert(['username'=>'Peter', 'password'=> 'test']);
