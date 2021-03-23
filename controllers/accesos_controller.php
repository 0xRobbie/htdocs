<?php
    class AccesosController
    {
        public function verAccesos()
        {
            $accesos = Accesos::verAccesos();
            include_once ('views/accesos/verAccesos.php');
        }

    }
?>