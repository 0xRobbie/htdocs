<?php
    class SucursalesController
    {
        public function verSucursales()
        {
            $sucursales = Sucursales::verSucursales();
            include_once ('views/sucursales/verSucursales.php');
        }
        
        public function verInventarioSistemas()
        {
            $inventario = Sucursales::verInventarioSistemas();
            include_once ('views/sucursales/verInventarioSucursal.php');
        }
        
        public function verInventarioSucursal()
        {
            $inventario = Inventario::verInventarioLugarTrabajo($_SESSION['user_lugar']);
            include_once ('views/sucursales/verInventarioSucursal.php');
        }

        // public function descargarInventario()
        // {
        //     ob_start();
        //     header('Content-Type: text/csv; charset=utf-8');
        //     header('Content-Disposition: attachment; filename=data.csv');

        //     $output = fopen('php://output', 'w');

        //     fputcsv($output, array('Id', 'Producto', 'Piezas'));

        //     $db = Db::getInstance();

        //     $idLugarTrabajo = $_SESSION['user_lugar'];
        //     $rows = $db->query("   SELECT p.idPapeleria, p.producto, i.piezas
        //                             FROM inventario AS i
        //                             LEFT JOIN papeleria as p ON p.idPapeleria = i.idPapeleria
        //                             LEFT JOIN lugarTrabajo as lt ON lt.idLugarTrabajo = i.idLugarTrabajo
        //                             LEFT JOIN sucursales as s ON s.idSucursales = lt.idSucursales
        //                             LEFT JOIN departamentos as d ON d.idDepartamentos = lt.idDepartamentos
        //                             WHERE i.idLugarTrabajo = $idLugarTrabajo
        //                             ORDER BY p.producto;");

        //     foreach($rows->fetchAll() as $row) {
        //         fputcsv($output, $row);
        //     }
        //     ob_end_flush();
        // } 

        public function verInventarioSucursales()
        {
            $inventario = Sucursales::verInventarioSucursales();
            include_once ('views/sucursales/verInventarioSucursales.php');
        }

        public function formularioSucursales()
        {
            include_once ('views/Sucursales/formularioSucursales.php');
        }

        public function crearSucursales() {
            if (!isset($_POST['identificador'], $_POST['sucursal'], $_POST['direccion'], $_POST['region'], $_POST['telefono'], $_POST['correo'], $_POST['estado']) )
                return call('acceso', 'error');

            $sucursal = new Sucursales(null, $_POST['identificador'], $_POST['sucursal'], $_POST['direccion'], $_POST['region'], $_POST['colonia'], $_POST['municipio'], $_POST['estado'], $_POST['telefono'], $_POST['correo'], $_POST['cp']);
            $last_id = Sucursales::crearSucursales($sucursal);
            $lugarTrabajo = new LugarTrabajo(null, null, $last_id);
            LugarTrabajo::crearLugarTrabajo($lugarTrabajo);

            $this->verSucursales();
        }

        public function actualizarSucursales() {
            $id = $_GET['idSucursales'];
            $sucursal = Sucursales::searchByIdSucursal($id);
            require_once('views/Sucursales/actualizarSucursales.php');
        }

        public function actualizar() {
            $sucursal = new Sucursales($_POST['idSucursales'], $_POST['sucursal'], $_POST['direccion'], $_POST['region'], $_POST['colonia'], $_POST['municipio'], $_POST['estado'], $_POST['telefono'], $_POST['correo'], $_POST['cp']);
            Sucursales::actualizarSucursales($sucursal);
            $this->verSucursales();
        }

        public function borrarSucursales()
        {
            if (!isset($_GET['idSucursales'])) 
               return call('acceso', 'error'); 
             
            LugarTrabajo::borrarSucursal($_GET['idSucursales']);
            $post = Sucursales::borrarSucursales($_GET['idSucursales']); 
            $this->verSucursales(); 
        }
    }
?>