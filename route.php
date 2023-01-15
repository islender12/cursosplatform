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

function cursos_url(string $slug)
{
    $url = print("/cursos/$slug");
    return $url;
}


function fecha($fecha)
{
    $mes = date_format(date_create($fecha), "F");
    $dia = date_format(date_create($fecha), "d");
    switch ($mes) {
        case "January":
            $monthNameSpanish = "$dia Enero";
            return $monthNameSpanish;
            break;

        case "February":
            $monthNameSpanish = "$dia Febrero";
            return $monthNameSpanish;
            break;

        case "March":
            $monthNameSpanish = "$dia Marzo";
            return $monthNameSpanish;
            break;
        case "April":
            $monthNameSpanish = "$dia Abril";
            return $monthNameSpanish;
            break;
        case "May":
            $monthNameSpanish = "$dia Mayo";
            return $monthNameSpanish;
            break;
        case "June":
            $monthNameSpanish = "$dia Junio";
            return $monthNameSpanish;
            break;
        case "July":
            $monthNameSpanish = "$dia Julio";
            return $monthNameSpanish;
            break;
        case "August":
            $monthNameSpanish = "$dia Agosto";
            return $monthNameSpanish;
            break;
        case "September":
            $monthNameSpanish = "$dia Septiembre";
            return $monthNameSpanish;
            break;
        case "October":
            $monthNameSpanish = "$dia Octubre";
            return $monthNameSpanish;
            break;
        case "November":
            $monthNameSpanish = "$dia Noviembre";
            return $monthNameSpanish;
            break;
        case "December":
            $monthNameSpanish = "$dia Diciembre";
            return $monthNameSpanish;
            break;
        default:
            $sinformato = "S/F";
            return $sinformato;
            break;
    }
}
