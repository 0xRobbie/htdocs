<?php 
    class ProductosFactura 
    { 
        private $idProductosFactura; 
        private $clave; 
        private $descripcion; 
 
        public function __construct ( 
                                        $idProductosFactura,  
                                        $clave,  
                                        $descripcion,  
                                    ) // Borrar la ultima coma
        { 
            $this->idProductosFactura = $idProductosFactura; 
            $this->clave = $clave; 
            $this->descripcion = $descripcion; 
        } 
 
        public function getidProductosFactura() { return $this->idProductosFactura;} 
        public function setidProductosFactura($idProductosFactura) {$this->idProductosFactura;} 
        public function getclave() { return $this->clave;} 
        public function setclave($clave) {$this->clave;} 
        public function getdescripcion() { return $this->descripcion;} 
        public function setdescripcion($descripcion) {$this->descripcion;} 
 
        public static function verproductosFactura($id) 
        { 
            $db = Db::getInstance(); 
            $productosfactura = [];          
            $stmt = $db->prepare('  SELECT     
                                    * 
                                    FROM  
                                    productosfactura 
                                '); 
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $productosfactura[] = new productosFactura(  
                                                        $select['idProductosFactura'],  
                                                        $select['clave'],  
                                                        $select['descripcion'],  
                                                    ); // Borrar la ultima coma
            } 
 
            return $productosfactura; 
        } 
 
        public static function crearproductosFactura($productosfactura) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO 
                                  productosfactura (
                                       idProductosFactura
                                       clave
                                       descripcion
                                  )
                                  VALUES ( 
                                       :idProductosFactura, 
                                       :clave, 
                                       :descripcion, 
                                       ');  // Borrar la ultima coma
            $insert->bindValue('idProductosFactura', $productosfactura->getidProductosFactura()); 
            $insert->bindValue('clave', $productosfactura->getclave()); 
            $insert->bindValue('descripcion', $productosfactura->getdescripcion()); 
            $insert->execute(); 
        } 
 
        public static function actualizarproductosFactura($productosfactura) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE  
                                    productosfactura  
                                    SET  
                                    idProductosFactura=:idProductosFactura, 
                                    clave=:clave, 
                                    descripcion=:descripcion, 
                                    WHERE  // Borrar la ultima coma
                                    idProductosFactura=:idProductosFactura'); 
         
            $update->bindValue('idProductosFactura', $productosfactura->getidProductosFactura()); 
            $update->bindValue('clave', $productosfactura->getclave()); 
            $update->bindValue('descripcion', $productosfactura->getdescripcion()); 
            $update->execute(); 
        } 
 
        public static function searchByidProductosFactura($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare('  SELECT  
                                    *  
                                    FROM  
                                    productosfactura  
                                    WHERE  
                                    idProductosFactura = $id'); 
            $stmt->execute(); 
            $select = $stmt->fetch(); 
 
            return new productosFactura(   
                                        $select['idProductosFactura'],  
                                        $select['clave'],  
                                        $select['descripcion'],  
                                    ); // Borrar la ultima coma
        } 
 
        public static function borrarproductosFactura($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ('DELETE FROM  
                    productosfactura  
                    WHERE  
                    idProductosFactura = $id'); 
            $db->exec($sql); 
        } 
 
    } 
?> 
