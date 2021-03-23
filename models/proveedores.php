<?php 
    class Proveedores 
    { 
        private $idProveedores; 
        private $razonSocial; 
        private $rfc; 
        private $direccion; 
 
        public function __construct ($idProveedores, $razonSocial, $rfc, $direccion) // Borrar la ultima coma
        { 
            $this->idProveedores = $idProveedores; 
            $this->razonSocial = $razonSocial; 
            $this->rfc = $rfc; 
            $this->direccion = $direccion; 
        } 
 
        public function getidProveedores() { return $this->idProveedores;} 
        public function setidProveedores($idProveedores) {$this->idProveedores;} 
        public function getrazonSocial() { return $this->razonSocial;} 
        public function setrazonSocial($razonSocial) {$this->razonSocial;} 
        public function getrfc() { return $this->rfc;} 
        public function setrfc($rfc) {$this->rfc;} 
        public function getdireccion() { return $this->direccion;} 
        public function setdireccion($direccion) {$this->direccion;} 
 
        public static function verproveedores() 
        { 
            $db = Db::getInstance(); 
            $proveedores = [];          
            $stmt = $db->prepare('SELECT * FROM  proveedores'); 
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $proveedores[] = new proveedores( $select['idProveedores'], $select['razonSocial'], $select['rfc'], $select['direccion'] ); // Borrar la ultima coma
            } 
 
            return $proveedores; 
        } 
 
        public static function crearproveedores($proveedores) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO proveedores (idProveedores, razonSocial, rfc, direccion )
                                  VALUES ( :idProveedores, :razonSocial, :rfc, :direccion)' );  // Borrar la ultima coma
            $insert->bindValue('idProveedores', $proveedores->getidProveedores()); 
            $insert->bindValue('razonSocial', $proveedores->getrazonSocial()); 
            $insert->bindValue('rfc', $proveedores->getrfc()); 
            $insert->bindValue('direccion', $proveedores->getdireccion()); 
            $insert->execute(); 
        } 
 
        public static function actualizarproveedores($proveedores) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE proveedores  
                                    SET  
                                    idProveedores = :idProveedores, 
                                    razonSocial = :razonSocial, 
                                    rfc = :rfc, 
                                    direccion = :direccion 
                                    WHERE idProveedores=:idProveedores'); 
            $update->bindValue('idProveedores', $proveedores->getidProveedores()); 
            $update->bindValue('razonSocial', $proveedores->getrazonSocial()); 
            $update->bindValue('rfc', $proveedores->getrfc()); 
            $update->bindValue('direccion', $proveedores->getdireccion()); 
            $update->execute(); 
        } 
 
        public static function searchByidProveedores($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare("SELECT * FROM proveedores WHERE idProveedores = $id"); 
            $stmt->execute(); 
            $select = $stmt->fetch(); 
 
            return new proveedores(  $select['idProveedores'], $select['razonSocial'], $select['rfc'], $select['direccion']); // Borrar la ultima coma
        } 
 
        public static function borrarproveedores($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ("DELETE FROM proveedores WHERE idProveedores = $id"); 
            $db->exec($sql); 
        } 
 
    } 
?> 
