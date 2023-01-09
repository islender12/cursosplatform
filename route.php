<?php

function section(string $url)
{

    $require = require __DIR__ . '/public/' . $url;
    return $require;
}

function recursos($url)
{
    $require = require __DIR__ . '/' . $url;
    return $require;
}

function assets(string $url)
{
    $redirect = print('/public/assets/' . $url);
    return $redirect;
}
