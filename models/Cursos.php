<?php

class Cursos extends Conectar
{

    public function consulta($sql)
    {
        $conectar = parent::Conexion();
        $stmt = $conectar->prepare($sql);
        $stmt->execute();
        return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar()
    {
        $sql = "SELECT * FROM tm_curso WHERE destacado = 1 AND estado = 1";
        $resultado = self::consulta($sql);
        return $resultado;
    }

    public function listaSinDestacar()
    {
        $sql = "SELECT * FROM tm_curso WHERE destacado = 0 AND estado = 1";
        $resultado = self::consulta($sql);
        return $resultado;
    }

    public function listarCursoUsuario($slug)
    {
        $sql = "SELECT id,curso_id,cur_titulo,cur_img,
        descripcion,slug,fecha,estado,episodio,iframe,actual
         FROM curso_cap INNER JOIN tm_curso ON curso_cap.curso_id=tm_curso.cur_id 
         WHERE slug = '$slug' ORDER BY episodio ASC";
        $resultado = self::consulta($sql);
        return $resultado;
    }
}
