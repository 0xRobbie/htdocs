<?php 
    class Inventario 
    { 
        private $idInventario; 
        private $piezas; 
        private $idLugarTrabajo; 
        private $idPapeleria; 
 
        public function __construct ( $idInventario, $piezas, $idLugarTrabajo, $idPapeleria ) // Borrar la ultima coma
        { 
            $this->idInventario = $idInventario; 
            $this-> piezas = $piezas; 
            $this-> idLugarTrabajo = $idLugarTrabajo; 
            $this-> idPapeleria = $idPapeleria; 
        } 
 
        public function getidInventario() { return $this->idInventario;} 
        public function setidInventario($idInventario) {$this->idInventario;} 
        public function getpiezas() { return $this->piezas;} 
        public function setpiezas($piezas) {$this->piezas;} 
        public function getidLugarTrabajo() { return $this->idLugarTrabajo;} 
        public function setidLugarTrabajo($idLugarTrabajo) {$this->idLugarTrabajo;} 
        public function getidPapeleria() { return $this->idPapeleria;} 
        public function setidPapeleria($idPapeleria) {$this->idPapeleria;} 
 
        public static function verInventario() 
        { 
            $db = Db::getInstance(); 
            $inventario = [];          
            $stmt = $db->prepare('SELECT idInventario, piezas, idLugarTrabajo, idPapeleria  FROM inventario ');
            $stmt->execute(); 
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
            foreach($stmt->fetchAll() as $select) { 
                $inventario[] = new Inventario( $select['idInventario'],  $select[' piezas'],  $select[' idLugarTrabajo'],  $select[' idPapeleria']  ); // Borrar la ultima coma
            } 
 
            return $inventario; 
        } 
 
        public static function crearInventario($inventario) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO inventario (idInventario,  piezas,  idLugarTrabajo,  idPapeleria, ) 
                                  VALUES ( :idInventario, : piezas, : idLugarTrabajo, : idPapeleria, )');  // Borrar la ultima coma
            $insert->bindValue('idInventario', $inventario->getidInventario()); 
            $insert->bindValue('piezas', $inventario->getpiezas()); 
            $insert->bindValue('idLugarTrabajo', $inventario->getidLugarTrabajo()); 
            $insert->bindValue('idPapeleria', $inventario->getidPapeleria()); 
            $insert->execute(); 
        } 
 
        public static function actualizarInventario($inventario) 
        { 
            $db = Db::getInstance(); 
            $update = $db->prepare('UPDATE inventario
                                    SET  
                                    idInventario=:idInventario, 
                                     piezas=: piezas, 
                                     idLugarTrabajo=: idLugarTrabajo, 
                                     idPapeleria=: idPapeleria, 
                                    WHERE  // Borrar la ultima coma
                                    idInventario=:idInventario'); 
         
            $update->bindValue('idInventario', $inventario->getidInventario()); 
            $update->bindValue('piezas', $inventario->getpiezas()); 
            $update->bindValue('idLugarTrabajo', $inventario->getidLugarTrabajo()); 
            $update->bindValue('idPapeleria', $inventario->getidPapeleria()); 
            $update->execute(); 
        } 
 
        public static function searchByidInventario($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare("SELECT * FROM inventario WHERE idInventario = $id");
            $stmt->execute(); 
            $select = $stmt->fetch(); 
 
            return new Inventario( $select['idInventario'], $select[' piezas'], $select[' idLugarTrabajo'], $select[' idPapeleria'] ); // Borrar la ultima coma
        } 
 
        public static function borrarInventario($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ("DELETE FROM inventario WHERE idInventario = $id");
            $db->exec($sql); 
        } 

        public static function verInventarioLugarTrabajo($idLugarTrabajo)
        {
            $db = Db::getInstance();          
            $req = $db->query(" SELECT p.idPapeleria, p.producto, i.piezas, p.formato
                                FROM inventario AS i
                                LEFT JOIN papeleria as p ON p.idPapeleria = i.idPapeleria
                                LEFT JOIN lugarTrabajo as lt ON lt.idLugarTrabajo = i.idLugarTrabajo
                                LEFT JOIN sucursales as s ON s.idSucursales = lt.idSucursales
                                LEFT JOIN departamentos as d ON d.idDepartamentos = lt.idDepartamentos
                                WHERE i.idLugarTrabajo = $idLugarTrabajo
                                ORDER BY p.producto;");

            foreach($req->fetchAll() as $inventario) {
                $stock[] = $inventario;
            }

            if (empty($stock)) {
                $stock = '0';
            }

            return $stock;
        }

        // public static function descargarInventario($idLugarTrabajo) 
        // {
        //     $db = Db::getInstance();          
        //     $req = $db->query(" SELECT p.idPapeleria, p.producto, i.piezas, p.formato
        //                         FROM inventario AS i
        //                         LEFT JOIN papeleria as p ON p.idPapeleria = i.idPapeleria
        //                         LEFT JOIN lugarTrabajo as lt ON lt.idLugarTrabajo = i.idLugarTrabajo
        //                         LEFT JOIN sucursales as s ON s.idSucursales = lt.idSucursales
        //                         LEFT JOIN departamentos as d ON d.idDepartamentos = lt.idDepartamentos
        //                         WHERE i.idLugarTrabajo = $idLugarTrabajo
        //                         ORDER BY p.producto;");
        //     return $req;

        //     require("db_connection.php");
        //     // get Users
        //     $query = "SELECT * FROM users";
        //     if (!$result = mysqli_query($con, $query)) {
        //         exit(mysqli_error($con));
        //     }
            
        //     $users = array();
        //     if (mysqli_num_rows($result) > 0) {
        //         while ($row = mysqli_fetch_assoc($result)) {
        //             $users[] = $row;
        //         }
        //     }
            
        //     header('Content-Type: text/csv; charset=utf-8');
        //     header('Content-Disposition: attachment; filename=Users.csv');
        //     $output = fopen('php://output', 'w');
        //     fputcsv($output, array('No', 'First Name', 'Last Name', 'Email'));
            
        //     if (count($users) > 0) {
        //         foreach ($users as $row) {
        //             fputcsv($output, $row);
        //         }
        //     }
        // }

        public static function verMinimoLugarTrabajo($idLugarTrabajo)
        {
            $db = Db::getInstance();          
            $req = $db->query(" SELECT p.producto, i.piezas, p.minimoSucursal
                                FROM inventario AS i
                                LEFT JOIN papeleria as p ON p.idPapeleria = i.idPapeleria
                                WHERE i.idLugarTrabajo = $idLugarTrabajo
                                HAVING i.piezas < p.minimoSucursal 
                                ORDER BY p.producto;");

            foreach($req->fetchAll() as $inventario) {
                $stock[] = $inventario;
            }

            if (empty($stock)) {
                $stock = '0';
            }

            return $stock;
        }
 
    } 
?> 
