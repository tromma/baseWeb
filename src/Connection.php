<?php
namespace App;
use \PDO;

class Connection {
    public static function getPDO(): PDO{
        return $pdo = new PDO('mysql:host=; dbname=','','',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}