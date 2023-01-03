<?php

class Socialmedia extends Conectar{

    public function get_socialmedia(){

        $conectar = parent::Conexion();

        $sql = "SELECT * FROM tm_socialmedia WHERE estado=1";

        $sql = $conectar->prepare($sql);

        $sql->execute();

        $resultado =  $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;

    }

}