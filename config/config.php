<?php

class Database
{
    private static $host = "localhost";
    private static $dbname = "kaaydem";
    private static $username = "root";
    private static $password = "";

    public static function connect()
    {
        try {
            $pdo = new PDO(
                "mysql:host=localhost;dbname=kaaydem;charset=utf8",
                "root",
                ""
            );

            return $pdo;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}