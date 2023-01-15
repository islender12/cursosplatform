<?php

$request = $_SERVER['REQUEST_URI'];
$solicitudCurso = (string) htmlspecialchars(basename($request));
$cursos = new Cursos();
$cursoN = $cursos->listarCursoUsuario($solicitudCurso);
if(empty($cursoN)){
    header('location: /');
}
$socialmedia = new Socialmedia;
$smx = $socialmedia->get_socialmedia();
$langProgramming = new LangProgramming;
$langP = $langProgramming->get_lang();
