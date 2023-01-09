<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/public/index.php';
        break;
    case '':
        require __DIR__ . '/public/index.php';
        break;
    case '/about':
        print(__DIR__ . '/public/assets/');
        break;
    case "/route":
        require __DIR__ . './route.php';
    break;
    case "/controller/".substr($request,-1)."":
        require __DIR__ . './controllers/controller.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/public/404.php';
        break;
}