<?php
    class TipoProductoController
    {
        public function verTipoProducto()
        {
            $tipoProducto = TipoProducto::verTipoProductoCompleta();
            include_once ('views/tipoProducto/verTipoProducto.php');
        }
        
        public function formularioTipoProducto()
        {
            $tipos = TipoProducto::verTipoTipoProducto();
            $formatos = Formato::verFormato();
            include_once ('views/tipoProducto/formularioTipoProducto.php');
        }

        public function crearTipoProducto()
        {
            if (!isset($_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['formato'], $_POST['idTipoTipoProducto']) )
                return call('acceso', 'error');

            $producto = new TipoProducto(null, $_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['formato'], $_POST['idTipoTipoProducto']);
            TipoProducto::crearTipoProducto($producto);

            $this->verTipoProducto();
        }
        
        public function actualizarTipoProducto()
        {
            $idTipoProducto = $_GET['idTipoProducto'];
            $producto = TipoProducto::searchByIdTipoProducto($idTipoProducto);
            $formatos = Formato::verFormato();
            $tiposTipoProducto = TipoTipoProducto::verTipoTipoProducto();
            require_once('views/Tipoproducto/actualizarTipoProducto.php');
        }

        public function actualizar()
        {
            $Tipoproducto = new TipoProducto($_POST['idTipoProducto'], $_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['idFormato'], $_POST['idTipoTipoProducto']);
            TipoProducto::actualizarTipoProducto($Tipoproducto);
            $this->verTipoProducto();
        }

        public function borrarTipoProducto()
        {
            if (!isset($_GET['idTipoProducto'])) 
               return call('acceso', 'error'); 
             
            $post = TipoProducto::borrarTipoProducto($_GET['idTipoProducto']); 
            $this->verTipoProducto(); 
        }

    }
?>