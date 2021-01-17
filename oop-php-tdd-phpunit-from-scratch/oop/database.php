<?php

class Database
{
    static private $pdo;
    static public $operators  = ['=', '<>', 'and', 'or', 'like'];

    public static function connect(string $method)
    {
        self::$pdo = $method;
    }

    public static function create(array $data)
    {
        var_dump('Creating a new database with '. self::$pdo);
    }
}

header('Content-Type/plain', true);

var_dump(Database::$operators);
Database::connect('pdo');
Database::create([]);