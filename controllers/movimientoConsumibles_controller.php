<?php
    class MovimientoConsumiblesController
    {
        public function verMovimientoConsumibles()
        {
            $movimientoConsumibles = MovimientoConsumibles::verMovimientoConsumibles();
            include_once ('views/movimientoConsumibles/verMovimientoConsumibles.php');
        }
        
        public function formularioMovimientoConsumibles()
        {
            $productos = Papeleria::verPapeleriaCompleta();
            $lugaresTrabajo = LugarTrabajo::verLugarTrabajo();
            include_once ('views/movimientoConsumibles/formularioMovimientoConsumibles.php');
        }
        
        public function crearMovimientoConsumibles() 
        {
            if (!isset($_POST['idUsuario'], $_POST['idProductos'], $_POST['piezas'], $_POST['idLugarTrabajo']) )
                return call('acceso', 'error');
                
            $MovimientoConsumibles = new MovimientoConsumibles(null, $_POST['idUsuario'], $_POST['idProductos'], $_POST['piezas'], null, $_POST['idLugarTrabajo'], $_POST['preasignado']);
            MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
            $this->verMovimientoConsumibles();
        }
        
        public function formularioAsignar()
        {
            $productos = Papeleria::verPapeleriaCompleta();
            $lugaresTrabajo = LugarTrabajo::verLugarTrabajo();
            include_once ('views/movimientoConsumibles/formularioAsignar.php');
        }

        public function asignarMaterial() 
        {
            if (!isset($_POST['idUsuario'], $_POST['idProductos'], $_POST['piezas'], $_POST['idLugarTrabajo']) )
                return call('acceso', 'error');

            $MovimientoConsumibles = new MovimientoConsumibles(null, $_POST['idUsuario'], $_POST['idProductos'], $_POST['piezas'], null, $_POST['idLugarTrabajo'], $_POST['preasignado']);
            MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
            $MovimientoConsumibles = new MovimientoConsumibles(null, $_POST['idUsuario'], $_POST['idProductos'], $_POST['piezas']*-1, null, 1, $_POST['preasignado']);
            MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
            $this->verMovimientoConsumibles();
        }

        public function verTotalSolicitudes()
        {
            $solicitudes = MovimientoConsumibles::verTotalSolicitudes();
            include_once ('views/Solicitudes/verTotalSolicitudes.php');
        }
        
        public function atenderSolicitudes()
        {
            $idSolicitud = $_GET['idSolicitud'];
            //$idLugarTrabajo = $_GET['idLugarTrabajo'];
            $solicitudes = MovimientoConsumibles::atenderSolicitudes($idSolicitud);
            include_once ('views/movimientoConsumibles/atenderSolicitudes.php');
        }
        
        public function actualizarSolicitudes()
        { 
            $idRastreo = 3;
            $preasignado = 0;
            $primerSeguro = TRUE;
            
            foreach ($_POST['mov'] as $idMov => $value) {
                $comprobado = MovimientoConsumibles::verificarCantidad(1, $value['piezas'], $value['producto']);
                if ($comprobado == TRUE) {

                } else {
                    $primerSeguro = FALSE;
                    // break;
                    echo "<script>alert('Movimiento no son posible " . $value['producto'] . "');</script>";
                    echo "<script>windows.location.href = '?controller=movimientoConsumibles&action=verTotalSolicitudes';</script>";
                }
            }

            if ($primerSeguro) {
                foreach ($_POST['mov'] as $idMov => $value) {
                    $comprobado = MovimientoConsumibles::verificarCantidad(1, $value['piezas'], $value['producto']);
                    
                    if ($comprobado == TRUE) {
                        // Quitar de sistemas 
                        $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'], $value['producto'], $value['piezas']*-1, $_POST['idSolicitudes'], 1, $preasignado);
                        MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                        // Quitar de la solicitud
                        $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'], $value['producto'], $value['piezasSolicitadas']*-1, $_POST['idSolicitudes'], $_POST['idLugarTrabajo'], $preasignado);
                        MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                        
                        // Registrar folios si existen
                        if ( isset($value['folioInicial']) ) {
                            $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'], $value['producto'], $value['piezas'], $_POST['idSolicitudes'], $_POST['idLugarTrabajo'], $preasignado);
                            Solicitudes::actualizarSolicitudes($_POST['idSolicitudes'], $idRastreo);
                            $last_id = MovimientoConsumibles::crearMovimientoConsumiblesFolio($MovimientoConsumibles);
                            $folios = new Folios(null, $value['folioInicial'], $value['folioFinal'], $value['producto'], $last_id);
                            Folios::crearFolios($folios);
                        } else {
                            // Agregar piezas enviadas
                            $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'], $value['producto'], $value['piezas'], $_POST['idSolicitudes'], $_POST['idLugarTrabajo'], $preasignado);
                            Solicitudes::actualizarSolicitudes($_POST['idSolicitudes'], $idRastreo);
                            MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                        }
                    } else {
                        echo "<script>alert('El inventario en sistemas es insuficiente para realizar esta accion');</script>";
                        echo "<script>windows.location.href = '?controller=movimientoConsumibles&action=verTotalSolicitudes';</script>";
                    }
                }
            }
            
            $this->verTotalSolicitudes();
        }

        public function materialOcupado()
        {
            $inventario = Sucursales::verInventarioSucursalMayorCero($_SESSION['user_lugar']);
            include_once ('views/MovimientoConsumibles/materialOcupado.php');
        }

        public function salidaProducto()
        {
            foreach ($_POST['mov'] as $idMov => $value) {
                
                $comprobado = MovimientoConsumibles::verificarCantidad($value['lugarTrabajo'],$value['piezas'], $value['producto']);

                if ($comprobado == TRUE) {
                    $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'],  $value['producto'], $value['piezas']*-1, null, $_SESSION['user_lugar'], 0);
                    MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                } 
            }
            
            call('sucursales','verInventarioSucursal');
        }

        public function asignacionMasivaTiendas()
        {
            $lugaresTrabajo = LugarTrabajo::verLugarTrabajo();
            $productos = Papeleria::verPapeleriaCompleta();
            include_once ('views/MovimientoConsumibles/asignacionMasivaTiendas.php');
        }

        public function asignacionMasivaT()
        {
            $producto = $_POST['idProductos'];
            $preasignado = $_POST['preasignado'];
            
            foreach ($_POST['mov'] as $idMov => $value) {
                if ($value['lugarTrabajo'] == 1) {
                    $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'],  $producto, $value['piezas'], null, $value['lugarTrabajo'], $preasignado);
                    MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                } else if (isset($value['lugarTrabajo'])) {
                    $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'],  $producto, $value['piezas']*-1, null, 1, $preasignado);
                    MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                    $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'],  $producto, $value['piezas'], null, $value['lugarTrabajo'], $preasignado);
                    MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                }
            }
            $this->verMovimientoConsumibles();
        }
        
        public function asignacionMasivaProductos()
        {
            $lugaresTrabajo = LugarTrabajo::verLugarTrabajo();
            $productos = Papeleria::verPapeleriaCompleta();
            include_once ('views/MovimientoConsumibles/asignacionMasivaProductos.php');
        }
        
        public function asignacionMasivaP()
        {   
            $lugarTrabajo = $_POST['idLugarTrabajo'];
            $preasignado = $_POST['preasignado'];
            
            foreach ($_POST['mov'] as $idMov => $value) {
                if ($lugarTrabajo == 1 && isset($value['producto'])) {
                    $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'],  $value['producto'], $value['piezas'], null, $value['lugarTrabajo'], $preasignado);
                    MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                } else if (isset($value['producto'])) {
                    $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'], $value['producto'], $value['piezas']*-1, null, 1, $preasignado);
                    MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                    $MovimientoConsumibles = new MovimientoConsumibles(null, $_SESSION['user_id'],  $value['producto'], $value['piezas'], null, $lugarTrabajo, $preasignado);
                    MovimientoConsumibles::crearMovimientoConsumibles($MovimientoConsumibles);
                }
            }
            $this->verMovimientoConsumibles();
        }

    }
?>