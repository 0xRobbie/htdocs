<?php
    class AccesosController
    {
        public function verAccesos()
        {
            $accesos = Accesos::verAccesos();
            include_once ('views/accesos/verAccesos.php');
        }

        public function verCorreo()
        {
            $accesos = Accesos::verAccesos();
            include_once ('views/accesos/verCorreo.php');
        }

        public function verSkype()
        {
            $accesos = Accesos::verAccesos();
            include_once ('views/accesos/verSkype.php');
        }
        
        public function verEquipos()
        {
            $accesos = Accesos::verAccesos();
            include_once ('views/accesos/verEquipos.php');
        }
        
        public function verProscai()
        {
            $accesos = Accesos::verAccesos();
            include_once ('views/accesos/verProscai.php');
        }

    }
?>