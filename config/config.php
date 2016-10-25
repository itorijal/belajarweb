<?php
    define('BASE', 'http://localhost/belajar/');

    $url = isset($_GET['p']) ? $_GET['p'] : null;
    $url = explode('/', $url);

    $modul = $url[0];
    $method = isset($url[1]) ? $url[1] : '';
    $parameter = isset($url[2]) ? $url[2] : null;
?>
