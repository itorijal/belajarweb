<?php
    require('models/home.php');
    $home = new home();

    switch ($method) {
        case '':
            $result = $home->get_all();
            require('views/list.php');
            break;

        default:
            require('views/404.php');
            break;
    }
?>
