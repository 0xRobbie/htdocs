<?php
    class Db 
    {
        private static $instance = NULL;
        private function __construct() {}
        private function __clone() {}

        public static function getInstance() {
            if (!isset(self::$instance)) {
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                //self::$instance = new PDO('mysql:host=vittoriobd.mysql.database.azure.com;dbname=inventario', 'Robbie@vittoriobd', 'AnnieColibri++', $pdo_options);
                self::$instance = new PDO('mysql:host=localhost;dbname=inventario', 'root', '', $pdo_options);
            }
            return self::$instance;
        }
    }
?>