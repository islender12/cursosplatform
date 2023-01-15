<?php

$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/':
        require __DIR__ . '/public/index.php';
        break;
    case '':
        require __DIR__ . '/public/index.php';
        break;
    case "/route":
        require __DIR__ . './route.php';
        break;
    case "/cursos/" . basename($request) . "":
        require __DIR__ . './public/Cursos/index.php';
        break;
    case "/login":
        require __DIR__ . '/public/login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/public/404.php';
        break;
}
