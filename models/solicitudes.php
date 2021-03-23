<?php
    class Solicitudes
    {
        private $idSolicitudes;
        private $idUsuarios;
        private $idTipoPapeleria;
        private $idRastreo;
        private $fechaSolicitud;
        private $fechaEnvio;
        private $fechaRecibido;

        public function __construct($idSolicitudes, $idUsuarios, $idTipoPapeleria, $idRastreo, $fechaSolicitud, $fechaEnvio, $fechaRecibido)
        {
            $this->idSolicitudes =$idSolicitudes;
            $this->idUsuarios = $idUsuarios;
            $this->idTipoPapeleria = $idTipoPapeleria;
            $this->idRastreo = $idRastreo;
            $this->fechaSolicitud = $fechaSolicitud;
            $this->fechaEnvio = $fechaEnvio;
            $this->fechaRecibido = $fechaRecibido;
        }

        public function getIdSolicitudes() { return $this->idSolicitudes;}
        public function setIdSolicitudes($idSolicitudes) {$this->idSolicitudes;}
        public function getIdUsuarios() { return $this->idUsuarios;}
        public function setIdUsuarios($idUsuarios) {$this->idUsuarios;}
        public function getIdTipoPapeleria() { return $this->idTipoPapeleria;}
        public function setIdTipoPapeleria($idTipoPapeleria) {$this->idTipoPapeleria;}
        public function getIdRastreo() { return $this->idRastreo;}
        public function setIdRastreo($idRastreo) {$this->idRastreo;}
        public function getfechaSolicitud() { return $this->fechaSolicitud;}
        public function setfechaSolicitud($fechaSolicitud) {$this->fechaSolicitud;}
        public function getfechaEnvio() { return $this->fechaEnvio;}
        public function setfechaEnvio($fechaEnvio) {$this->fechaEnvio;}
        public function getfechaRecibido() { return $this->fechaRecibido;}
        public function setfechaRecibido($fechaEnvio) {$this->fechaRecibido;}

        public static function verSolicitudes($id){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("SELECT    s.idSolicitudes, 
                                            u.usuarios,
                                            s.idTipoPapeleria,
                                            p.tipoPapeleria,
                                            s.idRastreo, 
                                            r.rastreo,
                                            s.fechaSolicitud,
                                            s.fechaEnvio,
                                            s.fechaRecibido
                                FROM solicitudes as s
                                LEFT JOIN usuarios as u ON u.idusuarios = s.idUsuarios
                                LEFT JOIN tipoPapeleria as p ON p.idTipoPapeleria = s.idTipoPapeleria
                                LEFT JOIN rastreo as r ON r.idRastreo = s.idRastreo
                                WHERE u.idUsuarios = $id and s.idRastreo = 1
                                ORDER BY s.idRastreo");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }

        public static function verSolicitudesTramite($id){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("SELECT    s.idSolicitudes, 
                                            u.usuarios, 
                                            p.tipoPapeleria, 
                                            r.rastreo,
                                            s.fechaSolicitud,
                                            s.fechaEnvio,
                                            s.fechaRecibido
                                FROM solicitudes as s
                                LEFT JOIN usuarios as u ON u.idusuarios = s.idUsuarios
                                LEFT JOIN tipoPapeleria as p ON p.idTipoPapeleria = s.idTipoPapeleria
                                LEFT JOIN rastreo as r ON r.idRastreo = s.idRastreo
                                WHERE u.idUsuarios = $id and s.idRastreo = 2
                                ORDER BY s.idRastreo");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            
            foreach($stmt->fetchAll() as $request) {
                if ($request['fechaEnvio'] == NULL) {
                    $request['fechaEnvio'] = "s/f";
                }
                if ($request['fechaRecibido'] == NULL) {
                    $request['fechaRecibido'] = "s/f";
                }
                $solicitudes[] = new Solicitudes($request['idSolicitudes'], $request['usuarios'], $request['tipoPapeleria'], $request['rastreo'], $request['fechaSolicitud'], $request['fechaEnvio'], $request['fechaRecibido']);
            }

            return $solicitudes;
        }

        // RESUMEN POR PRODUCTO
        public static function verSolicitudesNoAtendidas(){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("  SELECT p.producto, sum(m.piezasSolicitadas) as piezasSolicitadas, i.piezas
                                    FROM movimientoConsumibles AS m 
                                    LEFT JOIN papeleria AS p ON p.idPapeleria = m.idPapeleria
                                    LEFT JOIN solicitudes AS s ON s.idSolicitudes = m.idSolicitudes
                                    LEFT JOIN rastreo AS r ON r.idRastreo = s.idRastreo
                                    LEFT JOIN inventario as i ON i.idPapeleria = p.idPapeleria
                                    WHERE r.idRastreo = 2
                                    GROUP BY p.producto;");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }

        // REGIONES
        // '1', 'Bajio1' **
        // '2', 'Bajio2' **
        // '3', 'Cdmx Centro' **
        // '4', 'Cdmx Sur-Toluca' **
        // '5', 'Cdmx Toluca-Norte' **
        // '6', 'Franquicias' **
        // '7', 'Guadalajara-Tijuana' **
        // '8', 'Monterrey' **
        // '9', 'Puebla-Oriente' **

        // RESUMEN POR REGION 1 2
        public static function verSolicitudesRegion12(){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("  SELECT m.idPapeleria, p.producto,
                                               -- REGION 1
                                               MAX(CASE WHEN m.idUsuarios = 16 THEN piezasSolicitadas END) 'Irapuato',
                                               MAX(CASE WHEN m.idUsuarios = 28 THEN piezasSolicitadas END) 'Queretaro',
                                               MAX(CASE WHEN m.idUsuarios = 44 THEN piezasSolicitadas END) 'Parque Celaya',
                                               MAX(CASE WHEN m.idUsuarios = 46 THEN piezasSolicitadas END) 'Morelia',
                                               MAX(CASE WHEN m.idUsuarios = 49 THEN piezasSolicitadas END) 'Queretaro Centro',
                                               MAX(CASE WHEN m.idUsuarios = 59 THEN piezasSolicitadas END) 'Outlet Queretaro',
                                               -- REGION 2
                                               MAX(CASE WHEN m.idUsuarios = 40 THEN piezasSolicitadas END) 'Aguascalientes',
                                               MAX(CASE WHEN m.idUsuarios = 41 THEN piezasSolicitadas END) 'Villasunción',
                                               MAX(CASE WHEN m.idUsuarios = 42 THEN piezasSolicitadas END) 'San Luis Sendero',
                                               MAX(CASE WHEN m.idUsuarios = 43 THEN piezasSolicitadas END) 'San Luis Centro',
                                               MAX(CASE WHEN m.idUsuarios = 48 THEN piezasSolicitadas END) 'Centro Max León',
                                               MAX(CASE WHEN m.idUsuarios = 55 THEN piezasSolicitadas END) 'León Centro'
                                    FROM movimientoconsumibles AS m
                                    LEFT JOIN papeleria AS p ON p.idPapeleria = m.idPapeleria
                                    LEFT JOIN solicitudes AS s ON s.idSolicitudes = m.idSolicitudes
                                    WHERE s.idRastreo = 2 
                                    GROUP BY idPapeleria
                                    ORDER BY idPapeleria;");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }
        
        // RESUMEN POR REGION 3 4
        public static function verSolicitudesRegion34(){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("  SELECT m.idPapeleria, p.producto,
                                               -- REGION 3
                                               MAX(CASE WHEN m.idUsuarios = 4  THEN piezasSolicitadas END) 'Bolivar',
                                               MAX(CASE WHEN m.idUsuarios = 5  THEN piezasSolicitadas END) '1 de mayo',
                                               MAX(CASE WHEN m.idUsuarios = 27 THEN piezasSolicitadas END) 'Vallejo',
                                               MAX(CASE WHEN m.idUsuarios = 30 THEN piezasSolicitadas END) 'Plaza Satélite',
                                               MAX(CASE WHEN m.idUsuarios = 36 THEN piezasSolicitadas END) 'Galerias Atizapan',
                                               MAX(CASE WHEN m.idUsuarios = 37 THEN piezasSolicitadas END) 'Punta norte',
                                               MAX(CASE WHEN m.idUsuarios = 38 THEN piezasSolicitadas END) 'Polanco',
                                               MAX(CASE WHEN m.idUsuarios = 53 THEN piezasSolicitadas END) 'Plaza Tlalne',
                                               -- REGION 4
                                               MAX(CASE WHEN m.idUsuarios = 22 THEN piezasSolicitadas END) 'Cuernavaca',
                                               MAX(CASE WHEN m.idUsuarios = 26 THEN piezasSolicitadas END) 'Tezontle',
                                               MAX(CASE WHEN m.idUsuarios = 32 THEN piezasSolicitadas END) 'Estrellas',
                                               MAX(CASE WHEN m.idUsuarios = 34 THEN piezasSolicitadas END) 'Toluca Centro',
                                               MAX(CASE WHEN m.idUsuarios = 35 THEN piezasSolicitadas END) 'Acoxpa',
                                               MAX(CASE WHEN m.idUsuarios = 39 THEN piezasSolicitadas END) 'La rosa',
                                               MAX(CASE WHEN m.idUsuarios = 60 THEN piezasSolicitadas END) 'Cuicuilco',
                                               MAX(CASE WHEN m.idUsuarios = 12 THEN piezasSolicitadas END) 'Antenas'
                                    FROM movimientoconsumibles AS m
                                    LEFT JOIN papeleria AS p ON p.idPapeleria = m.idPapeleria
                                    LEFT JOIN solicitudes AS s ON s.idSolicitudes = m.idSolicitudes
                                    WHERE s.idRastreo = 2 
                                    GROUP BY idPapeleria
                                    ORDER BY idPapeleria;");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }


        // RESUMEN POR REGION 5 7
        public static function verSolicitudesRegion57(){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("  SELECT m.idPapeleria, p.producto,
                                               -- REGION 5
                                               MAX(CASE WHEN m.idUsuarios = 19 THEN piezasSolicitadas END) 'Lerma',
                                               -- REGION 7
                                               MAX(CASE WHEN m.idUsuarios = 6  THEN piezasSolicitadas END) 'Plaza del sol',
                                               MAX(CASE WHEN m.idUsuarios = 9  THEN piezasSolicitadas END) 'Plaza rio',
                                               MAX(CASE WHEN m.idUsuarios = 13 THEN piezasSolicitadas END) 'Niños heroes',
                                               MAX(CASE WHEN m.idUsuarios = 17 THEN piezasSolicitadas END) 'Galerias Guadalajara',
                                               MAX(CASE WHEN m.idUsuarios = 20 THEN piezasSolicitadas END) 'Outlet Guadalajara',
                                               MAX(CASE WHEN m.idUsuarios = 25 THEN piezasSolicitadas END) 'Guadalajara Centro',
                                               MAX(CASE WHEN m.idUsuarios = 29 THEN piezasSolicitadas END) 'Tlaquepaque',
                                               MAX(CASE WHEN m.idUsuarios = 54 THEN piezasSolicitadas END) 'Plaza patria'
                                    FROM movimientoconsumibles AS m
                                    LEFT JOIN papeleria AS p ON p.idPapeleria = m.idPapeleria
                                    LEFT JOIN solicitudes AS s ON s.idSolicitudes = m.idSolicitudes
                                    WHERE s.idRastreo = 2 
                                    GROUP BY idPapeleria
                                    ORDER BY idPapeleria;");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }
        // RESUMEN POR REGION 6 FRANQUICIAS
        public static function verSolicitudesRegion6(){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("  SELECT m.idPapeleria, p.producto,
                                                -- REGION 6
                                                MAX(CASE WHEN m.idUsuarios = 78 THEN piezasSolicitadas END) 'Gran Sur',
                                                MAX(CASE WHEN m.idUsuarios = 77 THEN piezasSolicitadas END) 'Luna Parc'
                                    FROM movimientoconsumibles AS m
                                    LEFT JOIN papeleria AS p ON p.idPapeleria = m.idPapeleria
                                    LEFT JOIN solicitudes AS s ON s.idSolicitudes = m.idSolicitudes
                                    WHERE s.idRastreo = 2 
                                    GROUP BY idPapeleria
                                    ORDER BY idPapeleria;");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }


        // RESUMEN POR REGION 8 9
        public static function verSolicitudesRegion89(){
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("  SELECT m.idPapeleria, p.producto,
                                                -- REGION 8
                                                MAX(CASE WHEN m.idUsuarios = 8  THEN piezasSolicitadas END) 'San Agustín',
                                                MAX(CASE WHEN m.idUsuarios = 10 THEN piezasSolicitadas END) 'Morelos 1',
                                                MAX(CASE WHEN m.idUsuarios = 11 THEN piezasSolicitadas END) 'Morelos 3',
                                                MAX(CASE WHEN m.idUsuarios = 47 THEN piezasSolicitadas END) 'Anahuac',
                                                -- REGION 9
                                                MAX(CASE WHEN m.idUsuarios = 7  THEN piezasSolicitadas END) 'Aragon',
                                                MAX(CASE WHEN m.idUsuarios = 14 THEN piezasSolicitadas END) 'Puebla centro',
                                                MAX(CASE WHEN m.idUsuarios = 18 THEN piezasSolicitadas END) 'Pachuca',
                                                MAX(CASE WHEN m.idUsuarios = 21 THEN piezasSolicitadas END) 'Ixtapaluca',
                                                MAX(CASE WHEN m.idUsuarios = 23 THEN piezasSolicitadas END) 'Plaza dorada',
                                                MAX(CASE WHEN m.idUsuarios = 24 THEN piezasSolicitadas END) 'Neza 1',
                                                MAX(CASE WHEN m.idUsuarios = 31 THEN piezasSolicitadas END) 'Outlet Puebla',
                                                MAX(CASE WHEN m.idUsuarios = 33 THEN piezasSolicitadas END) 'Neza Chedraui',
                                                MAX(CASE WHEN m.idUsuarios = 58 THEN piezasSolicitadas END) 'Explanada Puebla'
                                    FROM movimientoconsumibles AS m
                                    LEFT JOIN papeleria AS p ON p.idPapeleria = m.idPapeleria
                                    LEFT JOIN solicitudes AS s ON s.idSolicitudes = m.idSolicitudes
                                    WHERE s.idRastreo = 2 
                                    GROUP BY idPapeleria
                                    ORDER BY idPapeleria;");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $solicitudes[] = $request;
            }

            return $solicitudes;
        }


        public static function crearSolicitudes($idUsuarios, $idTipoPapeleria, $idRastreo, $fechaSolicitud, $fechaEnvio, $fechaRecibido){
            $db = Db::getInstance();
            $insert=$db->prepare('INSERT INTO solicitudes (idUsuarios, idTipoPapeleria, idRastreo, fechaSolicitud, fechaEnvio, fechaRecibido) VALUES (:idUsuarios, :idTipoPapeleria, :idRastreo, :fechaSolicitud, :fechaEnvio, :fechaRecibido)');
            $insert->bindValue('idUsuarios', $idUsuarios);
            $insert->bindValue('idTipoPapeleria', $idTipoPapeleria);
            $insert->bindValue('idRastreo', $idRastreo);
            $insert->bindValue('fechaSolicitud', $fechaSolicitud);
            $insert->bindValue('fechaEnvio', $fechaEnvio);
            $insert->bindValue('fechaRecibido', $fechaRecibido);
            $insert->execute();
        }

        public static function actualizarSolicitudes($idSolicitud, $idRastreo){
            $db = Db::getInstance();
            $update = $db->prepare('UPDATE solicitudes 
                                    SET idRastreo=:idRastreo
                                    WHERE idSolicitudes=:idSolicitudes');
            $update->bindValue('idSolicitudes', $idSolicitud);
            $update->bindValue('idRastreo', $idRastreo);
            $update->execute();
        }

        public static function actualizarFechaSolicitud($idSolicitud){
            $db = Db::getInstance();
            $update = $db->prepare('UPDATE solicitudes SET fechaSolicitud=:fechaSolicitud WHERE idSolicitudes=:idSolicitudes');
            $update->bindValue('idSolicitudes', $idSolicitud);
            $update->bindValue('fechaSolicitud', date("Y/m/d h:i:s"));
            $update->execute();
        }

        public static function actualizarFechaEnvio($idSolicitud){
            $db = Db::getInstance();
            $update = $db->prepare('UPDATE solicitudes SET fechaSolicitud=:fechaEnvio WHERE idSolicitudes=:idSolicitudes');
            $update->bindValue('idSolicitudes', $idSolicitud);
            $update->bindValue('fechaEnvio', date("Y/m/d h:i:s"));
            $update->execute();
        }

        public static function actualizarFechaRecibido($idSolicitud){
            $db = Db::getInstance();
            $update = $db->prepare('UPDATE solicitudes SET fechaSolicitud=:fechaRecibido WHERE idSolicitudes=:idSolicitudes');
            $update->bindValue('idSolicitudes', $idSolicitud);
            $update->bindValue('fechaRecibido', date("Y/m/d h:i:s"));
            $update->execute();
        }

        public static function borrarSolicitudes($idSolicitudes){
            $db = Db::getInstance();
            $sql = "DELETE FROM Solicitudes WHERE idSolicitudes = $idSolicitudes";
            $db->exec($sql);
        }

        public static function verSolicitudProductos($idSolicitud) {
            $db = Db::getInstance();
            $solicitudes = [];         
            $stmt = $db->prepare("SELECT    m.idMovimientoConsumibles, 
                                            usuarios.usuarios, 
                                            papeleria.producto,
                                            m.idSolicitudes,
                                            m.piezasSolicitadas,
                                            m.piezasEnviadas
                                FROM movimientoConsumibles as m
                                LEFT JOIN usuarios ON usuarios.idusuarios = m.idUsuarios
                                LEFT JOIN papeleria ON papeleria.idPapeleria = m.idPapeleria
                                LEFT JOIN solicitudes ON solicitudes.idSolicitudes = m.idSolicitudes
                                WHERE m.idSolicitudes = $idSolicitud
                                GROUP BY papeleria.producto
                                ORDER BY solicitudes.idRastreo");
            $stmt->execute();
            $req = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach($stmt->fetchAll() as $request) {
                $productos[] = $request;
            }

            return $productos;
        }

    }
?>