<?php
    function call($controller, $action) {
        require_once('controllers/' . $controller . '_controller.php');

        switch($controller) {
            case 'acceso':
                include_once ('models/acceso.php');
                include_once ('models/usuarios.php');
                include_once ('models/sucursales.php');
                include_once ('models/inventario.php');
                $controller = new AccesoController();
            break;
            case 'accesos':
                include_once ('models/accesos.php');
                $controller = new AccesosController();
            break;
            case 'departamentos':
                include_once ('models/departamentos.php');
                include_once ('models/lugarTrabajo.php');
                $controller = new DepartamentosController();
            break;
            case 'sucursales':
                include_once ('models/sucursales.php');
                include_once ('models/lugarTrabajo.php');
                include_once ('models/inventario.php');
                $controller = new SucursalesController();
            break;
            case 'lugartrabajo':
                include_once ('models/lugarTrabajo.php');
                $controller = new LugartrabajoController();
            break;
            case 'rastreo':
                include_once ('models/rastreo.php');
                $controller = new RastreoController();
            break;
            case 'papeleria':
                include_once ('models/papeleria.php');
                include_once ('models/tipoPapeleria.php');
                $controller = new PapeleriaController();
            break;
            case 'folios':
                include_once ('models/folios.php');
                include_once ('models/papeleria.php');
                include_once ('models/movimientoConsumibles.php');
                $controller = new foliosController();
            break;
            case 'usuarios':
                include_once ('models/usuarios.php');
                include_once ('models/lugarTrabajo.php');
                $controller = new UsuariosController();
            break;
            case 'tipoPapeleria':
                include_once ('models/tipoPapeleria.php');
                $controller = new TipoPapeleriaController();
            break;
            case 'solicitudes':
                include_once ('models/solicitudes.php');
                include_once ('models/sucursales.php');
                include_once ('models/lugarTrabajo.php');
                include_once ('models/tipoPapeleria.php');
                include_once ('models/papeleria.php');
                include_once ('models/movimientoConsumibles.php');
                $controller = new SolicitudesController();
            break;
            case 'movimientoConsumibles':
                include_once ('models/usuarios.php');
                include_once ('models/papeleria.php');
                include_once ('models/folios.php');
                include_once ('models/rastreo.php');
                include_once ('models/lugarTrabajo.php');
                include_once ('models/sucursales.php');
                include_once ('models/departamentos.php');
                include_once ('models/solicitudes.php');
                include_once ('models/movimientoConsumibles.php');
                $controller = new MovimientoConsumiblesController();
            break;
            case 'productonuevo':
                include_once ('models/productonuevo.php');
                $controller = new ProductonuevoController();
            break;
            case 'inventario':
                include_once ('models/inventario.php');
                $controller = new InventarioController();
            break;
            case 'movimientosinventario':
                include_once ('models/movimientosinventario.php');
                $controller = new MovimientosinventarioController();
            break;
            case 'soporte':
                include_once ('models/soporte.php');
                $controller = new SoporteController();
            break;
            case 'emisionFactura':
                include_once ('models/emisionFactura.php');
                $controller = new EmisionFacturaController();
            break;
            case 'homologarProductos':
                include_once ('models/homologarProductos.php');
                $controller = new HomologarProductosController();
            break;
            case 'productosFactura':
                include_once ('models/productosFactura.php');
                $controller = new ProductosFacturaController();
            break;
            case 'proveedores':
                include_once ('models/proveedores.php');
                $controller = new ProveedoresController();
            break;
            case 'solicitudFactura':
                include_once ('models/solicitudFactura.php');
                $controller = new SolicitudFacturaController();
            break;
            case 'cotizacion':
                include_once ('models/cotizacion.php');
                $controller = new CotizacionFacturaController();
            break;
        }

        $controller->{ $action }();
    }

    $controllers = array(   'acceso' => ['index', 'error', 'login', 'logout', 'menuSistemas', 'menuSucursales'] ,
                            'accesos' => ['verCorreo', 'verEquipos', 'verProscai', 'verSkype'] ,
                            'usuarios' => ['verUsuarios', 'crearUsuarios', 'actualizarUsuarios', 'actualizar', 'formularioUsuarios', 'borrarUsuarios'],
                            'papeleria' => ['verPapeleria', 'crearPapeleria', 'actualizarPapeleria', 'formularioPapeleria', 'actualizar', 'borrarPapeleria'],
                            'folios' => ['verFolios', 'crearFolios', 'actualizarFolios', 'actualizar', 'formularioFolios'],
                            'rastreo' => ['verRastreo', 'crearRastreo', 'actualizarRastreo', 'formularioRastreo'],
                            'tipoPapeleria' => ['verTipoPapeleria', 'crearTipoPapeleria', 'actualizarTipoPapeleria', 'formularioTipoPapeleria'],
                            'departamentos' => ['verDepartamentos', 'crearDepartamentos', 'actualizarDepartamentos', 'actualizar', 'formularioDepartamentos', 'borrarDepartamentos'],
                            'sucursales' => ['verSucursales', 'crearSucursales', 'actualizarSucursales', 'actualizar', 'formularioSucursales', 'borrarSucursales', // CRUD Sucursales
                                                'verInventarioSucursal', 'verInventarioSucursales', 'verInventarioSistemas', 'descargarInventario'],
                            'lugartrabajo' => ['verLugarTrabajo','verLugaresDeTrabajo', 'crearLugarTrabajo', 'actualizarLugarTrabajo', 'actualizar', 'formularioLugarTrabajo, borrarSucursal, borrarDepartamento'],
                            'solicitudes' => ['verSolicitudes', 'crearSolicitudes', 'actualizarSolicitudes', 'formularioSolicitudes', // CRUD solicitudes
                                                'solicitudPapeleria', 'revisarPedido', 'verEstatus', 'cancelarSolicitudes', 'verSolicitudProductos', 'confirmarEntrega', 
                                                'resumenSolicitudes', 'resumenRegiones'], // Sistemas opciones
                            'movimientoConsumibles' => ['verMovimientoConsumibles', 'crearMovimientoConsumibles', 'actualizarUbicacion', 'actualizar', 'formularioMovimientoConsumibles', //CRUD Movimientos
                                                            'asignarTienda', 'asignarInsumos', 'asignar', 'movimientoSinSolicitud',
                                                            'verTotalSolicitudes', 'atenderSolicitudes', 'actualizarSolicitudes',
                                                            'materialOcupado', 'salidaProducto', 'asignacionMasivaTiendas', 'asignacionMasivaProductos', 'asignacionMasivaT', 'asignacionMasivaP', 'formularioAsignar', 'asignarMaterial'], // Movimientos                        
                            'movimientosinventario' => ['verMovimientosInventario', 'crearMovimientosInventario', 'actualizarMovimientosInventario', 'actualizar', 'formularioMovimientosInventario', 'borrarMovimientosInventario'],
                            'productonuevo' => ['verProductoNuevo', 'crearProductoNuevo', 'actualizarProductoNuevo', 'actualizar', 'formularioProductoNuevo', 'borrarProductoNuevo'],
                            'inventario' => ['verInventario', 'crearInventario', 'actualizarInventario', 'actualizar', 'formularioInventario', 'borrarInventario'],
                            'emisionFactura' => ['verEmisionFactura', 'formularioEmisionFactura', 'crearEmisionFactura'],
                            'homologarProductos' => ['verHomologarProductos', 'formularioHomologarProductos'],
                            'productosFactura' => ['verProductosFactura', 'formularioProductosFactura'],
                            'proveedores' => ['verProveedores', 'crearProveedores', 'actualizarProveedores', 'actualizar', 'formularioProveedores'],
                            'solicitudFactura' => ['verSolicitudFactura', 'formularioSolicitudFactura'],
                            'cotizacion' => ['vercotizacion', 'crearcotizacion', 'actualizarcotizacion', 'actualizar', 'formulariocotizacion'],
                            'soporte' => ['calculosRapidos','promociones','hojasTecnicas']
                        );

    if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {
            call($controller, $action);
        } else {
            call('acceso', 'error');
        }
    } else {
        call('acceso', 'error');
    }

?>