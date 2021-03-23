<?php
    class movimientoConsumibles
    {
        private $idmovimientoConsumibles;
        private $idUsuario;
        private $idPapeleria;
        private $piezasSolicitadas;
        private $piezasEnviadas;
        private $idSolicitudes;

        public function __construct($idmovimientoConsumibles, $idUsuario, $idPapeleria, $piezasSolicitadas, $piezasEnviadas, $idSolicitudes)
        {
            $this->idmovimientoConsumibles = $idmovimientoConsumibles;
            $this->idUsuario = $idUsuario;
            $this->idPapeleria = $idPapeleria;
            $this->piezasSolicitadas = $piezasSolicitadas;
            $this->piezasEnviadas = $piezasEnviadas;
            $this->idSolicitudes = $idSolicitudes;
        }

        public function getIdmovimientoConsumibles() { return $this->idmovimientoConsumibles;}
        public function setIdmovimientoConsumibles($idmovimientoConsumibles) {$this->idmovimientoConsumibles;}
        public function getIdUsuario() { return $this->idUsuario;}
        public function setIdUsuario($idUsuario) {$this->idUsuario;}
        public function getIdPapeleria() { return $this->idPapeleria;}
        public function setIdPapeleria($idPapeleria) {$this->idPapeleria;}
        public function getPiezasSolicitadas() { return $this->piezasSolicitadas;}
        public function setPiezasSolicitadas($piezasSolicitadas) {$this->piezasSolicitadas;}
        public function getPiezasEnviadas() { return $this->piezasEnviadas;}
        public function setPiezasEnviadas($piezasEnviadas) {$this->piezasEnviadas;}
        public function getIdSolicitudes() { return $this->idSolicitudes;}
        public function setIdSolicitudes($idSolicitudes) {$this->idSolicitudes;}


        public static function vermovimientoConsumibles(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT  movimientoConsumibles.idMovimientoConsumibles,
                                        usuarios.usuarios,
                                        papeleria.producto,
                                        movimientoConsumibles.piezasSolicitadas,
                                        movimientoConsumibles.piezasEnviadas,
                                        solicitudes.idSolicitudes
                                    FROM movimientoConsumibles
                                    LEFT JOIN usuarios ON usuarios.idUsuarios = movimientoConsumibles.idUsuarios
                                    LEFT JOIN papeleria ON papeleria.idPapeleria = movimientoConsumibles.idPapeleria
                                    LEFT JOIN solicitudes ON solicitudes.idSolicitudes = movimientoConsumibles.idSolicitudes
                                    ORDER BY idmovimientoConsumibles DESC;");
            
            foreach($req->fetchAll() as $mov) {
                $movimientoConsumibles[] = $mov;
            }

            if (empty($movimientoConsumibles)) {
                $movimientoConsumibles = '0';
            }

            return $movimientoConsumibles;
        }
        
        public static function crearmovimientoConsumibles($movimientoConsumibles){
            $db = Db::getInstance();           
            $insert=$db->prepare('INSERT INTO movimientoConsumibles (idUsuarios, idPapeleria, piezasSolicitadas, piezasEnviadas, idSolicitudes) VALUES (:idUsuarios, :idPapeleria, :piezasSolicitadas, :piezasEnviadas, :idSolicitudes)');
            $insert->bindValue('idUsuarios', $movimientoConsumibles->getIdUsuario());
            $insert->bindValue('idPapeleria', $movimientoConsumibles->getIdPapeleria());
            $insert->bindValue('piezasSolicitadas', $movimientoConsumibles->getPiezasSolicitadas());
            $insert->bindValue('piezasEnviadas', $movimientoConsumibles->getpiezasEnviadas());
            $insert->bindValue('idSolicitudes', $movimientoConsumibles->getIdSolicitudes());
            $insert->execute();
        }
        
        public static function crearmovimientoConsumiblesFolio($movimientoConsumibles){
            $db = Db::getInstance();           
            $insert=$db->prepare('INSERT INTO movimientoConsumibles (idUsuarios, idPapeleria, piezasSolicitadas, piezasEnviadas, idSolicitudes) VALUES (:idUsuarios, :idPapeleria, :piezasSolicitadas, :piezasEnviadas, :idSolicitudes)');
            $insert->bindValue('idUsuarios', $movimientoConsumibles->getIdUsuario());
            $insert->bindValue('idPapeleria', $movimientoConsumibles->getidPapeleria());
            $insert->bindValue('piezasSolicitadas', $movimientoConsumibles->getPiezasSolicitadas());
            $insert->bindValue('piezasEnviadas', $movimientoConsumibles->getpiezasEnviadas());
            $insert->bindValue('idSolicitudes', $movimientoConsumibles->getIdSolicitudes());
            $insert->execute();
            
            $last_id = $db->lastInsertId();
            return $last_id;
        }

        // public static function crearmovimientoConsumiblesRequerimiento($movimientoConsumibles){
        //     $db = Db::getInstance();

        //     if ($movimientoConsumibles->getpiezasEnviadas() != '') {
        //         $insert=$db->prepare('INSERT INTO movimientoConsumibles (idUsuarios, idPapeleria, piezasSolicitadas, idRastreo, idsolicitudes, piezasEnviadas) VALUES (:idUsuarios, :idPapeleria, :piezasSolicitadas, :idRastreo, :idsolicitudes, :piezasEnviadas)');
        //         $insert->bindValue('piezasEnviadas', $movimientoConsumibles->getpiezasEnviadas());
        //     }

        //     if ($movimientoConsumibles->getIdDepartamentos() != '') {
        //         $insert=$db->prepare('INSERT INTO movimientoConsumibles (idUsuarios, idPapeleria, piezasSolicitadas, idRastreo, idsolicitudes, idDepartamentos) VALUES (:idUsuarios, :idPapeleria, :piezasSolicitadas, :idRastreo, :idsolicitudes, :idDepartamentos)');
        //         $insert->bindValue('idDepartamentos', $movimientoConsumibles->getIdDepartamentos());
        //     }
            
        //     $insert->bindValue('idsolicitudes', $movimientoConsumibles->getIdRequerimiento());
        //     $insert->bindValue('idUsuarios', $movimientoConsumibles->getIdUsuario());
        //     $insert->bindValue('idPapeleria', $movimientoConsumibles->getidPapeleria());
        //     $insert->bindValue('piezasSolicitadas', $movimientoConsumibles->getPiezasSolicitadas());
        //     $insert->bindValue('idRastreo', $movimientoConsumibles->getIdRastreo());
        //     $insert->execute();
        // }

        // public static function obtenerIdTransaccion($movimientoConsumibles){
        //     $db = Db::getInstance();
            
        //     $idUsuario = $movimientoConsumibles->getidUsuario();
        //     $idPapeleria = $movimientoConsumibles->getSucursal();
        //     $insumo = $movimientoConsumibles->getInsumos();
        //     $piezasSolicitadas = $movimientoConsumibles->getPiezasSolicitadas();   
            
        //     $req = $db->query(" SELECT idmovimientoConsumibles FROM movimientoConsumibles 
        //                         WHERE idUsuarios_ididUsuarios = $idUsuario,
        //                                 insumos_idinsumos = $idPapeleria,
        //                                 Sucursales_piezasEnviadas = $insumo
        //                                 piezasSolicitadas = $piezasSolicitadas;");
        //     return $req;
        // }

        // REGRESA LAS PIEZAS Solicitadas QUE SE TIENEN EN INVENTARIO DE UN PRODUCTO
        public static function verificarCantidad($lugarTrabajo, $piezasSolicitadas, $producto){
            $db = Db::getInstance();
            $origen = $_SESSION['user_lugar'];

            $req = $db->query(" SELECT  m.idMovimientoConsumibles, 
                                        papeleria.idPapeleria, 
                                        papeleria.producto,
                                        papeleria.idTipoPapeleria,
                                        formato.formato, 
                                        sum(m.piezasSolicitadas) as suma, 
                                        rastreo.rastreo, 
                                        m.piezasEnviadas
                                FROM movimientoConsumibles as m 
                                LEFT JOIN papeleria ON papeleria.idPapeleria = m.idPapeleria 
                                LEFT JOIN solicitudes ON solicitudes.idSolicitudes = m.idSolicitudes
                                LEFT JOIN formato ON formato.idFormato = papeleria.idFormato
                                LEFT JOIN rastreo ON rastreo.idRastreo = solicitudes.idRastreo 
                                WHERE (solicitudes.idRastreo != 2 OR solicitudes.idRastreo is null) AND (m.piezasEnviadas = 1) AND preasignado = 0 AND papeleria.idPapeleria = $producto
                                GROUP BY m.idPapeleria ORDER BY papeleria.producto;");
            $valor = FALSE;
            $suma = $req->fetch();

            if ($suma['suma'] >= $piezasSolicitadas) {
                $valor = TRUE;
            }
            return $valor;
        }

        public static function searchByIdmovimientoConsumibles($id) {
            $db = Db::getInstance();
            $stmt = $db->prepare("SELECT ubicacionInsumo_idubicacion FROM movimientoConsumibles WHERE sucursales_piezasEnviadas = $id");
            $stmt->execute();

            return $stmt;
        }

        // public static function actualizarUbicacion($idmovimientoConsumibles, $idRastreo){
        //     $db = Db::getInstance();
        //     $update = $db->prepare('UPDATE movimientoConsumibles SET ubicacionInsumo_idubicacion=:idRastreo WHERE idmovimientoConsumibles=:idmovimientoConsumibles');
        //     $update->bindValue('idmovimientoConsumibles', $idmovimientoConsumibles);
        //     $update->bindValue('idRastreo', $idRastreo);
        //     $update->execute();
        // }

        public static function seSolicitaronProductos($idmovimientoConsumibles){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT  papeleria.producto,
                                        movimientoConsumibles.piezasSolicitadas,
                                        solicitudes.idsolicitudes
                                    FROM movimientoConsumibles
                                    LEFT JOIN papeleria ON papeleria.idPapeleria = movimientoConsumibles.idPapeleria
                                    LEFT JOIN solicitudes ON solicitudes.idsolicitudes = movimientoConsumibles.idsolicitudes
                                    WHERE solicitudes.idsolicitudes = $idmovimientoConsumibles ");
            
            foreach($req->fetchAll() as $mov) {
                $movimientoConsumibles[] = $mov;
            }

            if ( empty($movimientoConsumibles) ) {
                $solicitud = TRUE;
            } else {
                $solicitud = FALSE;
            }

            return $solicitud;
        }

        // public static function verEstatus($idRequerimiento){
        //     $db = Db::getInstance();
        //     $movimientoConsumibles = [];          
        //     $req = $db->query(" SELECT  productos.producto,
        //                                 sum(movimientoConsumibles.piezasSolicitadas) AS piezasSolicitadas,
        //                                 rastreo.rastreo,
        //                                 solicitudes.idsolicitudes
        //                         FROM movimientoConsumibles
        //                         LEFT JOIN productos ON productos.idPapeleria = movimientoConsumibles.idPapeleria
        //                         LEFT JOIN rastreo ON rastreo.idRastreo = movimientoConsumibles.idRastreo
        //                         LEFT JOIN solicitudes ON solicitudes.idsolicitudes = movimientoConsumibles.idsolicitudes
        //                         WHERE movimientoConsumibles.idsolicitudes = $idRequerimiento
        //                         GROUP BY productos.producto, rastreo.rastreo
        //                         HAVING piezasSolicitadas > 0 ;");
            
        //     foreach($req->fetchAll() as $mov) {
        //         $movimientoConsumibles[] = $mov;
        //     }

        //     return $movimientoConsumibles;
        // }

        public static function verTotalSolicitudes(){
            $db = Db::getInstance();
            $solicitudes = [];
            
            $stmt = $db->prepare("  SELECT  s.idSolicitudes,
                                            u.usuarios,
                                            tP.tipoPapeleria,
                                            s.fechaSolicitud,
                                            s.fechaEnvio,
                                            r.idRastreo,
                                            r.rastreo
                                    FROM solicitudes as s
                                    LEFT JOIN usuarios as u ON u.idUsuarios = s.idUsuarios
                                    LEFT JOIN tipoPapeleria as tP ON tP.idTipoPapeleria = s.idTipoPapeleria
                                    LEFT JOIN rastreo as r ON r.idRastreo = s.idRastreo
                                    WHERE r.idRastreo = 2 || r.idRastreo = 3
                                    ORDER BY r.idRastreo, tP.tipoPapeleria, u.usuarios");

            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }

        public static function atenderSolicitudes($id){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("  SELECT  m.idMovimientoConsumibles, 
                                            u.usuarios, 
                                            p.folio, 
                                            p.idPapeleria, 
                                            p.producto, 
                                            m.piezasSolicitadas,
                                            i.piezas
                                    FROM movimientoConsumibles as m
                                    LEFT JOIN usuarios as u ON u.idUsuarios = m.IdUsuarios
                                    LEFT JOIN papeleria as p ON p.idPapeleria = m.IdPapeleria
                                    LEFT JOIN inventario as i ON i.idPapeleria = p.idPapeleria
                                    LEFT JOIN solicitudes as s ON s.idSolicitudes = m.idSolicitudes
                                    WHERE s.idRastreo = 2 AND s.idSolicitudes = $id;");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }

        public static function verFolios(){
            $db = Db::getInstance();
            $folios = [];         
            $stmt = $db->prepare("  SELECT * FROM movimientoconsumibles 
                                    WHERE (idPapeleria = 3 OR idPapeleria = 10 OR idPapeleria = 12) 
                                    AND piezasEnviadas != 1;");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $folios[] = $request;
            }

            return $folios;
        }


        public static function actualizarProceso($avance, $idsolicitudes){
            $db = Db::getInstance();
            $update = $db->prepare("UPDATE solicitudes SET proceso=:proceso WHERE idsolicitudes=:idsolicitudes");
            $update->bindValue('proceso', $avance);
            $update->bindValue('idsolicitudes', $idsolicitudes);
            $update->execute();
        }

        
    }
?>