<?php 
    class HomologarProductos 
    { 
        private $idHomologarProductos; 
        private $idPapeleria; 
        private $idProductosFactura; 
 
        public function __construct ( 
                                        $idHomologarProductos,  
                                        $idPapeleria,  
                                        $idProductosFactura,  
                                    ) // Borrar la ultima coma
        { 
            $this->idHomologarProductos = $idHomologarProductos; 
            $this->idPapeleria = $idPapeleria; 
            $this->idProductosFactura = $idProductosFactura; 
        } 
 
        public function getidHomologarProductos() { return $this->idHomologarProductos;} 
        public function setidHomologarProductos($idHomologarProductos) {$this->idHomologarProductos;} 
        public function getidPapeleria() { return $this->idPapeleria;} 
        public function setidPapeleria($idPapeleria) {$this->idPapeleria;} 
        public function getidProductosFactura() { return $this->idProductosFactura;} 
        public function setidProductosFactura($idProductosFactura) {$this->idProductosFactura;} 
 
        public static function verhomologarProductos($id) 
        { 
            $db = Db::getInstance(); 
            $homologarproductos = [];          
            $stmt = $db->prepare('  SELECT     
                                    * 
                                    FROM  
                                    homologarproductos 
                                '); 
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $homologarproductos[] = new homologarProductos(  
                                                        $select['idHomologarProductos'],  
                                                        $select['idPapeleria'],  
                                                        $select['idProductosFactura'],  
                                                    ); // Borrar la ultima coma
            } 
 
            return $homologarproductos; 
        } 
 
        public static function crearhomologarProductos($homologarproductos) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO 
                                  homologarproductos (
                                       idHomologarProductos
                                       idPapeleria
                                       idProductosFactura
                                  )
                                  VALUES ( 
                                       :idHomologarProductos, 
                                       :idPapeleria, 
                                       :idProductosFactura, 
                                       ');  // Borrar la ultima coma
            $insert->bindValue('idHomologarProductos', $homologarproductos->getidHomologarProductos()); 
            $insert->bindValue('idPapeleria', $homologarproductos->getidPapeleria()); 
            $insert->bindValue('idProductosFactura', $homologarproductos->getidProductosFactura()); 
            $insert->execute(); 
        } 
 
        public static function actualizarhomologarProductos($homologarproductos) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE  
                                    homologarproductos  
                                    SET  
                                    idHomologarProductos=:idHomologarProductos, 
                                    idPapeleria=:idPapeleria, 
                                    idProductosFactura=:idProductosFactura, 
                                    WHERE  // Borrar la ultima coma
                                    idHomologarProductos=:idHomologarProductos'); 
         
            $update->bindValue('idHomologarProductos', $homologarproductos->getidHomologarProductos()); 
            $update->bindValue('idPapeleria', $homologarproductos->getidPapeleria()); 
            $update->bindValue('idProductosFactura', $homologarproductos->getidProductosFactura()); 
            $update->execute(); 
        } 
 
        public static function searchByidHomologarProductos($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare('  SELECT  
                                    *  
                                    FROM  
                                    homologarproductos  
                                    WHERE  
                                    idHomologarProductos = $id'); 
            $stmt->execute(); 
            $select = $stmt->fetch(); 
 
            return new homologarProductos(   
                                        $select['idHomologarProductos'],  
                                        $select['idPapeleria'],  
                                        $select['idProductosFactura'],  
                                    ); // Borrar la ultima coma
        } 
 
        public static function borrarhomologarProductos($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ('DELETE FROM  
                    homologarproductos  
                    WHERE  
                    idHomologarProductos = $id'); 
            $db->exec($sql); 
        } 
 
    } 
?> 
