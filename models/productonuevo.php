<?php 
    class ProductoNuevo 
    { 
        private $idProductoNuevo; 
        private $producto; 
        private $piezas; 
        private $uso; 
        private $idUsuarios; 
 
        public function __construct ( $idProductoNuevo, $producto, $piezas, $uso, $idUsuarios ) // Borrar la ultima coma
        { 
            $this->idProductoNuevo = $idProductoNuevo; 
            $this->producto = $producto; 
            $this->piezas = $piezas; 
            $this->uso = $uso; 
            $this->idUsuarios = $idUsuarios; 
        } 
 
        public function getidProductoNuevo() { return $this->idProductoNuevo;} 
        public function setidProductoNuevo($idProductoNuevo) {$this->idProductoNuevo;} 
        public function getproducto() { return $this->producto;} 
        public function setproducto($producto) {$this->producto;} 
        public function getpiezas() { return $this->piezas;} 
        public function setpiezas($piezas) {$this->piezas;} 
        public function getuso() { return $this->uso;} 
        public function setuso($uso) {$this->uso;} 
        public function getidUsuarios() { return $this->idUsuarios;} 
        public function setidUsuarios($idUsuarios) {$this->idUsuarios;} 
 
        public static function verProductoNuevo() 
        { 
            $db = Db::getInstance(); 
            $productonuevo = [];          
            $stmt = $db->prepare('SELECT idProductoNuevo,  producto,  piezas,  uso,  idUsuarios  FROM productonuevo ');
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $productonuevo[] = new ProductoNuevo( $select['idProductoNuevo'],  $select[' producto'],  $select[' piezas'],  $select[' uso'],  $select[' idUsuarios']  ); // Borrar la ultima coma
            } 
 
            return $productonuevo; 
        } 
 
        public static function crearProductoNuevo($productonuevo) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO productonuevo (idProductoNuevo,  producto,  piezas,  uso,  idUsuarios, ) 
                                  VALUES ( :idProductoNuevo, :producto, :piezas, :uso, :idUsuarios, )');  // Borrar la ultima coma
            $insert->bindValue('idProductoNuevo', $productonuevo->getidProductoNuevo()); 
            $insert->bindValue('producto', $productonuevo->getproducto()); 
            $insert->bindValue('piezas', $productonuevo->getpiezas()); 
            $insert->bindValue('uso', $productonuevo->getuso()); 
            $insert->bindValue('idUsuarios', $productonuevo->getidUsuarios()); 
            $insert->execute(); 
        } 
 
        public static function actualizarProductoNuevo($productonuevo) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE productonuevo
                                    SET 
                                    idProductoNuevo=:idProductoNuevo, 
                                     producto=: producto, 
                                     piezas=: piezas, 
                                     uso=: uso, 
                                     idUsuarios=: idUsuarios 
                                    WHERE
                                    idProductoNuevo=:idProductoNuevo'); 
         
            $update->bindValue('idProductoNuevo', $productonuevo->getidProductoNuevo()); 
            $update->bindValue('producto', $productonuevo->getproducto()); 
            $update->bindValue('piezas', $productonuevo->getpiezas()); 
            $update->bindValue('uso', $productonuevo->getuso()); 
            $update->bindValue('idUsuarios', $productonuevo->getidUsuarios()); 
            $update->execute(); 
        } 
 
        public static function searchByidProductoNuevo($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare("SELECT * FROM productonuevo WHERE idProductoNuevo = $id");
            $stmt->execute(); 
            $select = $stmt->fetch(); 
 
            return new ProductoNuevo( $select['idProductoNuevo'], $select[' producto'], $select[' piezas'], $select[' uso'], $select[' idUsuarios'] ); // Borrar la ultima coma
        } 
 
        public static function borrarProductoNuevo($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ("DELETE FROM productonuevo WHERE idProductoNuevo = $id");
            $db->exec($sql); 
        } 
 
    } 
?> 
