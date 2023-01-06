<?php

class Conectar
{

    private $dsn = 'mysql:dbname=templatehtmlphp;host=localhost';
    private $user = 'root';
    private $passwd = '';

    public function Conexion()
    {

        try {
            $conexion = new PDO($this->dsn, $this->user, $this->passwd);
            return $conexion;
        } catch (PDOException $e) {
            echo 'Ha Ocurrido Un Error: ' . $e->getMessage();
        }
    }
}
