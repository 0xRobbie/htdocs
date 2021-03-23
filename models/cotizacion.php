<?php 
    class Cotizacion 
    { 
        private $idCotizacion; 
        private $idProveedores; 
        private $idPapeleria; 
        private $precio; 
        private $entregaProgramada; 
 
        public function __construct ( 
                                        $idCotizacion,  
                                        $idProveedores,  
                                        $idPapeleria,  
                                        $precio,  
                                        $entregaProgramada,  
                                    ) // Borrar la ultima coma
        { 
            $this->idCotizacion = $idCotizacion; 
            $this->idProveedores = $idProveedores; 
            $this->idPapeleria = $idPapeleria; 
            $this->precio = $precio; 
            $this->entregaProgramada = $entregaProgramada; 
        } 
 
        public function getidCotizacion() { return $this->idCotizacion;} 
        public function setidCotizacion($idCotizacion) {$this->idCotizacion;} 
        public function getidProveedores() { return $this->idProveedores;} 
        public function setidProveedores($idProveedores) {$this->idProveedores;} 
        public function getidPapeleria() { return $this->idPapeleria;} 
        public function setidPapeleria($idPapeleria) {$this->idPapeleria;} 
        public function getprecio() { return $this->precio;} 
        public function setprecio($precio) {$this->precio;} 
        public function getentregaProgramada() { return $this->entregaProgramada;} 
        public function setentregaProgramada($entregaProgramada) {$this->entregaProgramada;} 
 
        public static function vercotizacion($id) 
        { 
            $db = Db::getInstance(); 
            $cotizacion = [];          
            $stmt = $db->prepare('  SELECT     
                                    * 
                                    FROM  
                                    cotizacion 
                                '); 
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $cotizacion[] = new cotizacion(  
                                                        $select['idCotizacion'],  
                                                        $select['idProveedores'],  
                                                        $select['idPapeleria'],  
                                                        $select['precio'],  
                                                        $select['entregaProgramada'],  
                                                    ); // Borrar la ultima coma
            } 
 
            return $cotizacion; 
        } 
 
        public static function crearcotizacion($cotizacion) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO 
                                  cotizacion (
                                       idCotizacion
                                       idProveedores
                                       idPapeleria
                                       precio
                                       entregaProgramada
                                  )
                                  VALUES ( 
                                       :idCotizacion, 
                                       :idProveedores, 
                                       :idPapeleria, 
                                       :precio, 
                                       :entregaProgramada, 
                                       ');  // Borrar la ultima coma
            $insert->bindValue('idCotizacion', $cotizacion->getidCotizacion()); 
            $insert->bindValue('idProveedores', $cotizacion->getidProveedores()); 
            $insert->bindValue('idPapeleria', $cotizacion->getidPapeleria()); 
            $insert->bindValue('precio', $cotizacion->getprecio()); 
            $insert->bindValue('entregaProgramada', $cotizacion->getentregaProgramada()); 
            $insert->execute(); 
        } 
 
        public static function actualizarcotizacion($cotizacion) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE  
                                    cotizacion  
                                    SET  
                                    idCotizacion=:idCotizacion, 
                                    idProveedores=:idProveedores, 
                                    idPapeleria=:idPapeleria, 
                                    precio=:precio, 
                                    entregaProgramada=:entregaProgramada, 
                                    WHERE  // Borrar la ultima coma
                                    idCotizacion=:idCotizacion'); 
         
            $update->bindValue('idCotizacion', $cotizacion->getidCotizacion()); 
            $update->bindValue('idProveedores', $cotizacion->getidProveedores()); 
            $update->bindValue('idPapeleria', $cotizacion->getidPapeleria()); 
            $update->bindValue('precio', $cotizacion->getprecio()); 
            $update->bindValue('entregaProgramada', $cotizacion->getentregaProgramada()); 
            $update->execute(); 
        } 
 
        public static function searchByidCotizacion($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare('  SELECT  
                                    *  
                                    FROM  
                                    cotizacion  
                                    WHERE  
                                    idCotizacion = $id'); 
            $stmt->execute(); 
            $select = $stmt->fetch(); 
 
            return new cotizacion(   
                                        $select['idCotizacion'],  
                                        $select['idProveedores'],  
                                        $select['idPapeleria'],  
                                        $select['precio'],  
                                        $select['entregaProgramada'],  
                                    ); // Borrar la ultima coma
        } 
 
        public static function borrarcotizacion($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ('DELETE FROM  
                    cotizacion  
                    WHERE  
                    idCotizacion = $id'); 
            $db->exec($sql); 
        } 
 
    } 
?> 
