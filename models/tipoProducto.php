<?php
    class TipoProducto
    {
        private $idTipoProducto;
        private $tipoProducto;

        public function __construct($TipoProducto)
        {
            $this->tipoProducto = $TipoProducto;
        }

        public function getIdTipoProducto() { return $this->idTipoProducto;}
        public function setIdTipoProducto($idTipoProducto) {$this->idTipoProducto;}
        public function getTipoProducto() { return $this->tipoProducto;}
        public function setTipoProducto($tipoProducto) {$this->tipoProducto;}

        public static function verTipoProducto(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT * FROM tipoProducto;");

            foreach($req->fetchAll() as $papeleria) {
                $Tipo[] = $papeleria;
            }

            return $Tipo;
        }

    }
?>