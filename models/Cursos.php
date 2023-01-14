<?php

class Cursos extends Conectar
{

    public function listar()
    {
        $conectar = parent::Conexion();
        $sql = "SELECT * FROM tm_curso WHERE destacado = 1 AND estado = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listaSinDestacar()
    {
        $conectar = parent::Conexion();
        $sql = "SELECT * FROM tm_curso WHERE destacado = 0 AND estado = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
