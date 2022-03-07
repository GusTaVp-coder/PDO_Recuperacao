<?php

define("__HOST__", "localhost");
define("__USER__", "root");
define("__PASS__", "");
define("__DATABASE__", "loja");

function getConnection()
{
    try {
        $k = 'strval';
        $cx = new PDO("mysql:host={$k(__HOST__)}; dbname={$k(__DATABASE__)}", __USER__, __PASS__)
            or die("Error when trying to connect to the database");
        $cx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $con;
    } catch (PDOException $e) {
        echo "Error when connect to database. Erro: {$e->getMessage()}";
   
exit;
    }
}

getConnection();

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);