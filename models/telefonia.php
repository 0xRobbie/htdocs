<?php
    class Telefonia
    {
        private $idTelefonia;
        private $idUsuarios;
        private $numero;
        private $extension;

        public function __construct($Telefonia)
        {
            $this->telefonia = $Telefonia;
        }

        public function getIdTelefonia() { return $this->idTelefonia;}
        public function setIdTelefonia($idTelefonia) {$this->idTelefonia;}
        public function getIdUsuarios() { return $this->idUsuarios;}
        public function setIdUsuarios($idUsuarios) {$this->idUsuarios;}
        public function getNumero() { return $this->numero;}
        public function setNumero($numero) {$this->numero;}
        public function getExtension() { return $this->extension;}
        public function setExtension($extension) {$this->extension;}

        public static function verTelefonia(){
            $db = Db::getInstance();          
            $req = $db->query("SELECT * FROM telefonia;");

            foreach($req->fetchAll() as $telefonos) {
                $directorio[] = $telefonos;
            }

            return $directorio;
        }

        public static function verTelefonoUsuario($idUsuario){
            $db = Db::getInstance();          
            $req = $db->query("SELECT * FROM telefonia WHERE idUsuarios = $idUsuario;");

            foreach($req->fetchAll() as $telefonos) {
                $directorio[] = $telefonos;
            }

            if ( empty($directorio) ) {
                $directorio = 'No hay telefonos asociados a este usuario';
            }

            return $directorio;
        }

    }
?>