<?php

class Conectar {

    protected $dbh;

    protected function Conexion(){
        try{

            $conectar = $this->dbh = new PDO('mysql:host=localhost;dbname=templatehtmlphp','root','');

            return $conectar;

        }catch(Exception $e){
            echo "Error:".$e->getMessage();
        }
    }

}