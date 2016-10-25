<?php
    require('config/config.php');
    switch ($modul) {
        case '':
            require('controllers/home.php');
            break;

        case 'home':
            require('controllers/home.php');
            break;

        default:
            require('views/404.php');
            break;
    }
?>
