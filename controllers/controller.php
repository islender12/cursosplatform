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

$url = $_SERVER['REQUEST_URI'];

echo basename($url);
echo '<br><br>';
echo $url;
