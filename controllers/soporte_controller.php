<?php
    class SoporteController
    {
        public function calculosRapidos()
        {
            include_once ('views/soporte/calculosRapidos.php');
        }

        public function promociones()
        {
            $camisas80 = Soporte::camisas80(); 
            $pantalones80 = Soporte::pantalones80(); 
            $trajes3x4500 = Soporte::trajes3x4500(); 
            $camisas2x600 = Soporte::camisas2x600(); 
            include_once ('views/soporte/promociones.php');
        }
    }
?>