<?php
    date_default_timezone_set("America/Mexico_City");
    require_once('connection.php');

    if(isset($_GET['controller']) && isset($_GET['action'])){
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    } else {
        $controller = 'accesos';
        $action = 'index';
    }

    require_once('views/layout.php');
?>