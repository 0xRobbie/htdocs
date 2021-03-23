<?php
    class SolicitudesController
    {
        public function verSolicitudes()
        {
            $id = $_GET['idSolicitudes'];
            $solicitudes = Solicitudes::verSolicitudes($id);
            $seguimiento = Solicitudes::verSolicitudesTramite($id);
            // $Enviadas = Solicitudes::verSolicitudesEnviadas($id);
            // $Resueltas = Solicitudes::verSolicitudesResueltas();
            include_once ('views/solicitudes/verSolicitudes.php');
        }
        
        public function formularioSolicitudes()
        {
            $tipos = TipoPapeleria::verTipoPapeleria();
            include_once ('views/solicitudes/formularioSolicitudes.php');
        }

        public function crearSolicitudes()
        {
            if (!isset($_POST['idUsuario'], $_POST['idTipoPapeleria'], $_POST['idRastreo'], $_POST['fechaSolicitud']) )
                return call('acceso', 'error');

            $idUsuario = $_POST['idUsuario'];
            $idTipoPapeleria = $_POST['idTipoPapeleria'];
            $idRastreo = $_POST['idRastreo'];
            $fechaSolicitud = $_POST['fechaSolicitud'];

            Solicitudes::crearSolicitudes($idUsuario, $idTipoPapeleria, $idRastreo, $fechaSolicitud, NULL, NULL);
            $this->verSolicitudes();
        }
        
        public function solicitudPapeleria()
        {
            $idUsuario = $_SESSION['user_id'];
            $idSolicitud = $_GET['idSolicitudes'];
            $tipoPapeleria = $_GET['tipoPapeleria'];
            
            $solicitud = MovimientoConsumibles::seSolicitaronProductos($idSolicitud);
            $soloDepartamento = LugarTrabajo::esDepartamento($_SESSION["user_lugar"]);
            
            if ($solicitud) {
                $papeleria = Papeleria::verPapeleria($tipoPapeleria, $soloDepartamento);
                include_once ('views/solicitudes/solicitudPapeleria.php');
            } else {
                echo '<script>alert("Ya se solicitaron productos para esta solicitud");</script>';
                echo "<script>window.location.href = '?controller=solicitudes&action=verSolicitudes&idSolicitudes=$idUsuario';</script>";
            }
        }

        public function revisarPedido()
        {   
            $idUsuario = $_POST['idUsuario'];
            $idSolicitudes = $_POST['idSolicitudes'];

            foreach ($_POST as $idPapeleria => $piezasSolicitadas) {
                if ($piezasSolicitadas != '' && $idPapeleria != 'idUsuario' && $idPapeleria != 'idSolicitudes' && $idPapeleria != 'idLugarTrabajo') {
                    $movimientos = new MovimientoConsumibles(null, $idUsuario, $idPapeleria, $piezasSolicitadas, 0, $idSolicitudes);
                    MovimientoConsumibles::crearMovimientoConsumibles($movimientos);
                    Solicitudes::actualizarSolicitudes($idSolicitudes, 2);
                }
            }
            
            Solicitudes::actualizarFechaSolicitud($idSolicitudes);
            include_once ('views/solicitudes/revisarPedido.php');
        }

        public function verSolicitudProductos()
        {   
            $idSolicitud = $_GET['idSolicitudes'];
            $rastreo = $_GET['rastreo'];
            $lugar = $_SESSION['user_lugar']; // CAMBIAR ESTA LINEA
            $productos = Solicitudes::verSolicitudProductos($idSolicitud, $rastreo, $lugar);
            include_once ('views/solicitudes/verSolicitudProductos.php');
        }

        public function cancelarSolicitudes()
        {
            if ( !isset($_GET['idCancelar']) )
               return call('acceso', 'error');
            
            $idUsuario = $_SESSION['user_id'];
            $idSolicitud = $_GET['idCancelar'];
            $solicitud = MovimientoConsumibles::seSolicitaronProductos($idSolicitud);
            
            if ($solicitud) {
                $post = Solicitudes::borrarSolicitudes($_GET['idCancelar']);
                $this->verSolicitudes();
            } else {
                echo '<script>alert("Ya se solicitaron productos para esta solicitud no puede eliminar ni agregar nuevos productos");</script>';
                echo "<script>window.location.href = '?controller=solicitudes&action=verSolicitudes&idSolicitudes=$idUsuario';</script>";
            }
        }

        public function confirmarEntrega()
        {
            $idSolicitud = $_GET['idSolicitudes'];
            $idUsuario = $_SESSION['user_id'];
            $idRastreo = 4;
            Solicitudes::actualizarSolicitudes($idSolicitud, $idRastreo);
            echo "<script>window.location.href = '?controller=solicitudes&action=verSolicitudes&idSolicitudes=$idUsuario';</script>";
        }

        // RESUMEN POR PRODUCTO
        public function resumenSolicitudes()
        {
            //$inventarioSistemas = Sucursales::verInventarioSucursal(1);
            $solicitudes = Solicitudes::verSolicitudesNoAtendidas();
            include_once ('views/solicitudes/resumenSolicitudes.php');
        }
        
        // RESUMEN POR REGION
        public function resumenRegiones()
        {
            $sucursales = Sucursales::verRegiones();
            $solicitudes = Solicitudes::verSolicitudesNoAtendidas();
            $region12 = Solicitudes::verSolicitudesRegion12();
            $region34 = Solicitudes::verSolicitudesRegion34();
            $region57 = Solicitudes::verSolicitudesRegion57();
            $region6  = Solicitudes::verSolicitudesRegion6();
            $region89 = Solicitudes::verSolicitudesRegion89();
            include_once ('views/solicitudes/resumenRegiones.php');
        }
    }
?>