<?php 
    class MovimientosInventario 
    { 
        private $idInventario; 
        private $piezas; 
        private $idLugarTrabajo; 
        private $idPapeleria; 
 
        public function __construct ( $idInventario, $piezas, $idLugarTrabajo, $idPapeleria ) // Borrar la ultima coma
        { 
            $this->idInventario = $idInventario; 
            $this->piezas = $piezas; 
            $this->idLugarTrabajo = $idLugarTrabajo; 
            $this->idPapeleria = $idPapeleria; 
        } 
 
        public function getidInventario() { return $this->idInventario;} 
        public function setidInventario($idInventario) {$this->idInventario;} 
        public function getpiezas() { return $this->piezas;} 
        public function setpiezas($piezas) {$this->piezas;} 
        public function getidLugarTrabajo() { return $this->idLugarTrabajo;} 
        public function setidLugarTrabajo($idLugarTrabajo) {$this->idLugarTrabajo;} 
        public function getidPapeleria() { return $this->idPapeleria;} 
        public function setidPapeleria($idPapeleria) {$this->idPapeleria;} 
 
        public static function verMovimientosInventario() 
        { 
            $db = Db::getInstance(); 
            $movimientosinventario = [];          
            $stmt = $db->prepare('SELECT idInventario,  piezas,  idLugarTrabajo,  idPapeleria  FROM movimientosinventario ');
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $movimientosinventario[] = new MovimientosInventario( $select['idInventario'],  $select[' piezas'],  $select[' idLugarTrabajo'],  $select[' idPapeleria']  ); // Borrar la ultima coma
            } 
 
            return $movimientosinventario; 
        } 
 
        public static function crearMovimientosInventario($movimientosinventario) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO movimientosinventario (idInventario,  piezas,  idLugarTrabajo,  idPapeleria, ) 
                                  VALUES ( :idInventario, : piezas, : idLugarTrabajo, : idPapeleria, )');  // Borrar la ultima coma
            $insert->bindValue('idInventario', $movimientosinventario->getidInventario()); 
            $insert->bindValue('piezas', $movimientosinventario->getpiezas()); 
            $insert->bindValue('idLugarTrabajo', $movimientosinventario->getidLugarTrabajo()); 
            $insert->bindValue('idPapeleria', $movimientosinventario->getidPapeleria()); 
            $insert->execute(); 
        } 
 
        public static function actualizarMovimientosInventario($movimientosinventario) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE movimientosinventario
                                    SET  
                                    idInventario=:idInventario, 
                                     piezas=: piezas, 
                                     idLugarTrabajo=: idLugarTrabajo, 
                                     idPapeleria=: idPapeleria, 
                                    WHERE  // Borrar la ultima coma
                                    idInventario=:idInventario'); 
         
            $update->bindValue('idInventario', $movimientosinventario->getidInventario()); 
            $update->bindValue('piezas', $movimientosinventario->getpiezas()); 
            $update->bindValue('idLugarTrabajo', $movimientosinventario->getidLugarTrabajo()); 
            $update->bindValue('idPapeleria', $movimientosinventario->getidPapeleria()); 
            $update->execute(); 
        } 
 
        public static function searchByidInventario($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare("SELECT * FROM movimientosinventario WHERE idInventario = $id");
            $stmt->execute(); 
            $select = $stmt->fetch(); 
 
            return new MovimientosInventario( $select['idInventario'], $select[' piezas'], $select[' idLugarTrabajo'], $select[' idPapeleria'] ); // Borrar la ultima coma
        } 
 
        public static function borrarMovimientosInventario($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ("DELETE FROM movimientosinventario WHERE idInventario = $id");
            $db->exec($sql); 
        } 
 
    } 
?> 
