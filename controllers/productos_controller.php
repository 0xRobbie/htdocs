<?php
    class ProductosController
    {
        public function verProductos()
        {
            $productos = Productos::verProductosCompleta();
            include_once ('views/productos/verProductos.php');
        }
        
        public function formularioProductos()
        {
            $tipos = TipoProductos::verTipoProductos();
            $formatos = Formato::verFormato();
            include_once ('views/productos/formularioProductos.php');
        }

        public function crearProductos()
        {
            if (!isset($_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['formato'], $_POST['idTipoProductos']) )
                return call('acceso', 'error');

            $producto = new Productos(null, $_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['formato'], $_POST['idTipoProductos']);
            Productos::crearProductos($producto);

            $this->verProductos();
        }
        
        public function actualizarProductos()
        {
            $idProductos = $_GET['idProductos'];
            $producto = Productos::searchByIdProductos($idProductos);
            $formatos = Formato::verFormato();
            $tiposProductos = TipoProductos::verTipoProductos();
            require_once('views/productos/actualizarProductos.php');
        }

        public function actualizar()
        {
            $productos = new Productos($_POST['idProductos'], $_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['idFormato'], $_POST['idTipoProductos']);
            Productos::actualizarProductos($productos);
            $this->verProductos();
        }

        public function borrarProductos()
        {
            if (!isset($_GET['idProductos'])) 
               return call('acceso', 'error'); 
             
            $post = Productos::borrarProductos($_GET['idProductos']); 
            $this->verProductos(); 
        }

    }
?>