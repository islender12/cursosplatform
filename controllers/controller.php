<?php
$array = [
    '',
    'islender',
    'juan',
    'pedro',
    'pablo'
];


foreach($array as $nombre){
    echo $nombre.'<br>';
}

echo '<br>';

$id = substr($_SERVER['REQUEST_URI'],-1);

echo intval($id);

echo '<br>';

echo $array[$id];