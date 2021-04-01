<?php
    class Registros
    {
        private $idRegistros;
        private $idUsuarios;
        private $entrada;
        private $salida;


        public function __construct($idRegistros, $idUsuarios, $entrada, $salida)
        {
            $this->idRegistros = $idRegistros;
            $this->idUsuarios = $idUsuarios;
            $this->entrada = $entrada;
            $this->salida = $salida;
        }

        public function getidUsuarios() { return $this->idRegistros;}
        public function setidUsuarios($idRegistros) {$this->idRegistros;}
        public function getidRegistros() { return $this->idUsuarios;}
        public function setidRegistros($idUsuarios) {$this->idUsuarios;}
        public function getentrada() { return $this->entrada;}
        public function setentrada($entrada) {$this->entrada;}
        public function getsalida() { return $this->salida;}
        public function setsalida($salida) {$this->salida;}

        public static function verRegistros(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT 	registros.idRegistros,
                                        registros.idUsuarios,
                                        registros.entrada,
                                        registros.salida
                                FROM registros;");
            
            

            foreach($req->fetchAll() as $select) {
                $registros[] = new Registros( $select['idUsuarios'], $select['idRegistros'], $select['entrada'], $select['salida']);
            }

            return $registros;
            
        }

        public static function crearUsuarios($usuarios) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO usuarios (usuarios, password, idLugarTrabajo)
                                  VALUES (:usuarios, :password, :idLugarTrabajo)');
            $insert->bindValue('usuarios', $usuarios->getusuario()); 
            $insert->bindValue('password', $usuarios->getpassword()); 
            $insert->bindValue('idLugarTrabajo', $usuarios->getidLugarTrabajo()); 
            $insert->execute(); 
        } 

        public static function actualizarUsuarios($usuarios) 
        {   
            $db = Db::getInstance();
            $update = $db->prepare('UPDATE usuarios  
                                    SET  
                                    usuarios=:usuarios, 
                                    password=:password, 
                                    idLugarTrabajo=:idLugarTrabajo
                                    WHERE
                                    idRegistros=:idRegistros'); 
            $update->bindValue('usuarios', $usuarios->getusuario()); 
            $update->bindValue('password', $usuarios->getpassword()); 
            $update->bindValue('idLugarTrabajo', $usuarios->getidLugarTrabajo()); 
            $update->bindValue('idRegistros', $usuarios->getidUsuarios()); 
            $update->execute(); 
        } 
 
        public static function searchByidUsuarios($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare("SELECT * FROM usuarios WHERE idRegistros = $id"); 
            $stmt->execute(); 
            $select = $stmt->fetch();
            return new Usuarios($select['idRegistros'], $select['usuarios'], $select['password'], $select['idLugarTrabajo']);
        } 
 
        public static function borrarUsuarios($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ("DELETE FROM usuarios WHERE idRegistros = $id"); 
            $db->exec($sql); 
        } 
    }
?>