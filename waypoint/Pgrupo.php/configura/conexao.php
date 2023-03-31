<?php


function conectar()
{
    try {
        $conn = new PDO('mysql:host=localhost; charset=utf8mb4; dbname=waypoint;', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados" . $e->getMessage();
        die();
    }
    return $conn;
}
