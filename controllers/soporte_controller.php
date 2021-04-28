<?php
    class SoporteController
    {
        public function calculosRapidos()
        {
            include_once ('views/soporte/calculosRapidos.php');
        }

        public function promociones()
        {
            $trajes3x4500 = Soporte::trajes3x4500(); 
            $camisas2x600 = Soporte::camisas2x600(); 
            include_once ('views/soporte/promociones.php');
        }

        public function hojasTecnicas()
        {
            include_once ('views/soporte/hojasTecnicas.php');
        }
     
        public function documentos()
        {
            include_once ('views/soporte/documentos.php');
        }
    }
?>