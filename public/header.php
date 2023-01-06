<?php
require '../models/plantilla.php';
// Instanciamos la clase Socialmedia
$socialmedia = new Socialmedia;
$smx = $socialmedia->get_socialmedia();

$langProgramming = new LangProgramming;
$langP = $langProgramming->get_lang();

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cursos - AnderCode</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets\imgs\theme\favicon.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\widgets.css">
    <link rel="stylesheet" href="assets\css\responsive.css">
</head>