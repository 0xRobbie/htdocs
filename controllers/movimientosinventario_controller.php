<?php 
    class MovimientosInventarioController 
    { 
        public function verMovimientosInventario() 
        { 
            $movimientosinventario = MovimientosInventario::verMovimientosInventario(); 
            include_once ('views/movimientosinventario/verMovimientosInventario.php'); 
        } 
 
        public function formularioMovimientosInventario() 
        { 
            include_once ('views/movimientosinventario/formularioMovimientosInventario.php'); 
        } 
 
        public function crearMovimientosInventario() 
        { 
            if (!isset( $_POST['idInventario'], $_POST[' piezas'], $_POST[' idLugarTrabajo'], $_POST[' idPapeleria'], )) // Borrar la ultima coma del $_POST 
                return call('acceso', 'error'); 
 
            $movimientosinventario = new MovimientosInventario($_POST['idInventario'], $_POST[' piezas'], $_POST[' idLugarTrabajo'], $_POST[' idPapeleria'], ); // Borrar la ultima coma del $_POST
            MovimientosInventario::crearMovimientosInventario($movimientosinventario); 
            $this->verMovimientosInventario(); 
        } 
 
        public function actualizarMovimientosInventario() 
        { 
            $id = $_GET['idMovimientosInventario']; 
            $movimientosinventario = MovimientosInventario::searchByIdMovimientosInventario($id); 
            require_once('views/movimientosinventario/actualizarMovimientosInventario.php'); 
        } 
 
        public function actualizar() 
        { 
            $movimientosinventario = new MovimientosInventario($_POST['idInventario'], $_POST[' piezas'], $_POST[' idLugarTrabajo'], $_POST[' idPapeleria'], ); // Borrar la ultima coma del $_POST
            MovimientosInventario::actualizarMovimientosInventario($movimientosinventario); 
            $this->verMovimientosInventario(); 
        } 
 
        public function borrarMovimientosInventario() 
        { 
            if (!isset($_GET['idMovimientosInventario'])) 
               return call('acceso', 'error'); 
             
            $post = MovimientosInventario::borrarMovimientosInventario($_GET['idMovimientosInventario']); 
            $this->verMovimientosInventario(); 
        } 
    } 
?> 
