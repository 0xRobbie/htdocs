<?php 
    class SolicitudFactura 
    { 
        private $idSolicitudFactura; 
        private $piezas; 
        private $precioUnitario; 
        private $idProductosFactura; 
        private $idFactura; 
        private $idProveedores; 
 
        public function __construct ( 
                                        $idSolicitudFactura,  
                                        $piezas,  
                                        $precioUnitario,  
                                        $idProductosFactura,  
                                        $idFactura,  
                                        $idProveedores,  
                                    ) // Borrar la ultima coma
        { 
            $this->idSolicitudFactura = $idSolicitudFactura; 
            $this->piezas = $piezas; 
            $this->precioUnitario = $precioUnitario; 
            $this->idProductosFactura = $idProductosFactura; 
            $this->idFactura = $idFactura; 
            $this->idProveedores = $idProveedores; 
        } 
 
        public function getidSolicitudFactura() { return $this->idSolicitudFactura;} 
        public function setidSolicitudFactura($idSolicitudFactura) {$this->idSolicitudFactura;} 
        public function getpiezas() { return $this->piezas;} 
        public function setpiezas($piezas) {$this->piezas;} 
        public function getprecioUnitario() { return $this->precioUnitario;} 
        public function setprecioUnitario($precioUnitario) {$this->precioUnitario;} 
        public function getidProductosFactura() { return $this->idProductosFactura;} 
        public function setidProductosFactura($idProductosFactura) {$this->idProductosFactura;} 
        public function getidFactura() { return $this->idFactura;} 
        public function setidFactura($idFactura) {$this->idFactura;} 
        public function getidProveedores() { return $this->idProveedores;} 
        public function setidProveedores($idProveedores) {$this->idProveedores;} 
 
        public static function versolicitudFactura($id) 
        { 
            $db = Db::getInstance(); 
            $solicitudfactura = [];          
            $stmt = $db->prepare('  SELECT     
                                    * 
                                    FROM  
                                    solicitudfactura 
                                '); 
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $solicitudfactura[] = new solicitudFactura(  
                                                        $select['idSolicitudFactura'],  
                                                        $select['piezas'],  
                                                        $select['precioUnitario'],  
                                                        $select['idProductosFactura'],  
                                                        $select['idFactura'],  
                                                        $select['idProveedores'],  
                                                    ); // Borrar la ultima coma
            } 
 
            return $solicitudfactura; 
        } 
 
        public static function crearsolicitudFactura($solicitudfactura) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO 
                                  solicitudfactura (
                                       idSolicitudFactura
                                       piezas
                                       precioUnitario
                                       idProductosFactura
                                       idFactura
                                       idProveedores
                                  )
                                  VALUES ( 
                                       :idSolicitudFactura, 
                                       :piezas, 
                                       :precioUnitario, 
                                       :idProductosFactura, 
                                       :idFactura, 
                                       :idProveedores, 
                                       ');  // Borrar la ultima coma
            $insert->bindValue('idSolicitudFactura', $solicitudfactura->getidSolicitudFactura()); 
            $insert->bindValue('piezas', $solicitudfactura->getpiezas()); 
            $insert->bindValue('precioUnitario', $solicitudfactura->getprecioUnitario()); 
            $insert->bindValue('idProductosFactura', $solicitudfactura->getidProductosFactura()); 
            $insert->bindValue('idFactura', $solicitudfactura->getidFactura()); 
            $insert->bindValue('idProveedores', $solicitudfactura->getidProveedores()); 
            $insert->execute(); 
        } 
 
        public static function actualizarsolicitudFactura($solicitudfactura) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE  
                                    solicitudfactura  
                                    SET  
                                    idSolicitudFactura=:idSolicitudFactura, 
                                    piezas=:piezas, 
                                    precioUnitario=:precioUnitario, 
                                    idProductosFactura=:idProductosFactura, 
                                    idFactura=:idFactura, 
                                    idProveedores=:idProveedores, 
                                    WHERE  // Borrar la ultima coma
                                    idSolicitudFactura=:idSolicitudFactura'); 
         
            $update->bindValue('idSolicitudFactura', $solicitudfactura->getidSolicitudFactura()); 
            $update->bindValue('piezas', $solicitudfactura->getpiezas()); 
            $update->bindValue('precioUnitario', $solicitudfactura->getprecioUnitario()); 
            $update->bindValue('idProductosFactura', $solicitudfactura->getidProductosFactura()); 
            $update->bindValue('idFactura', $solicitudfactura->getidFactura()); 
            $update->bindValue('idProveedores', $solicitudfactura->getidProveedores()); 
            $update->execute(); 
        } 
 
        public static function searchByidSolicitudFactura($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare('  SELECT  
                                    *  
                                    FROM  
                                    solicitudfactura  
                                    WHERE  
                                    idSolicitudFactura = $id'); 
            $stmt->execute(); 
            $select = $stmt->fetch(); 
 
            return new solicitudFactura(   
                                        $select['idSolicitudFactura'],  
                                        $select['piezas'],  
                                        $select['precioUnitario'],  
                                        $select['idProductosFactura'],  
                                        $select['idFactura'],  
                                        $select['idProveedores'],  
                                    ); // Borrar la ultima coma
        } 
 
        public static function borrarsolicitudFactura($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ('DELETE FROM  
                    solicitudfactura  
                    WHERE  
                    idSolicitudFactura = $id'); 
            $db->exec($sql); 
        } 
 
    } 
?> 
