<?php 
    class EmisionFactura 
    { 
        private $idFactura; 
        private $folio; 
        private $fecha; 
 
        public function __construct ( $idFactura, $folio, $fecha ) // Borrar la ultima coma
        { 
            $this->idFactura = $idFactura; 
            $this->folio = $folio; 
            $this->fecha = $fecha; 
        } 
 
        public function getidFactura() { return $this->idFactura;} 
        public function setidFactura($idFactura) {$this->idFactura;} 
        public function getfolio() { return $this->folio;} 
        public function setfolio($folio) {$this->folio;} 
        public function getfecha() { return $this->fecha;} 
        public function setfecha($fecha) {$this->fecha;} 
 
        public static function veremisionFactura() 
        { 
            $db = Db::getInstance(); 
            $emisionfactura = [];          
            $stmt = $db->prepare('SELECT * FROM emisionfactura ORDER BY fecha DESC'); 
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $emisionfactura[] = new emisionFactura($select['idFactura'], $select['folio'], $select['fecha']) ;
            } 
 
            return $emisionfactura; 
        } 
 
        public static function crearEmisionFactura($emisionfactura) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO emisionfactura(folio, fecha) VALUES (:folio, :fecha)');
            $insert->bindValue('folio', $emisionfactura->getfolio()); 
            $insert->bindValue('fecha', $emisionfactura->getfecha()); 
            $insert->execute(); 
        } 
 
        public static function actualizaremisionFactura($emisionfactura) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE emisionfactura  
                                    SET  
                                    idFactura=:idFactura, 
                                    folio=:folio, 
                                    fecha=:fecha 
                                    WHERE
                                    idFactura=:idFactura'); 
            $update->bindValue('idFactura', $emisionfactura->getidFactura()); 
            $update->bindValue('folio', $emisionfactura->getfolio()); 
            $update->bindValue('fecha', $emisionfactura->getfecha()); 
            $update->execute(); 
        } 
 
        public static function searchByidFactura($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare('SELECT * FROM emisionfactura WHERE idFactura = $id'); 
            $stmt->execute(); 
            $select = $stmt->fetch(); 
            return new emisionFactura(  $select['idFactura'], $select['folio'], $select['fecha']);
        } 
 
        public static function borraremisionFactura($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ("DELETE FROM emisionfactura WHERE idFactura = $id"); 
            $db->exec($sql); 
        } 
 
    } 
?> 
