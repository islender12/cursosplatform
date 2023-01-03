<?php

class LangProgramming extends Conectar{
    public function get_lang(){
        // Invocamos el metodo que existe en la clase padre
        $conectar = parent::Conexion();
        $sql = "SELECT * FROM tm_lenguajes";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}