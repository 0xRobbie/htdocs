<?php 
    class InventarioController 
    { 
        public function verInventario() 
        { 
            $inventario = Inventario::verInventario(); 
            include_once ('views/inventario/verInventario.php'); 
        } 
 
        public function formularioInventario() 
        { 
            include_once ('views/inventario/formularioInventario.php'); 
        } 
 
        public function crearInventario() 
        { 
            if (!isset( $_POST['idInventario'], $_POST[' piezas'], $_POST[' idLugarTrabajo'], $_POST[' idPapeleria'], )) // Borrar la ultima coma del $_POST 
                return call('acceso', 'error'); 
 
            $inventario = new Inventario($_POST['idInventario'], $_POST[' piezas'], $_POST[' idLugarTrabajo'], $_POST[' idPapeleria'], ); // Borrar la ultima coma del $_POST
            Inventario::crearInventario($inventario); 
            $this->verInventario(); 
        } 
 
        public function actualizarInventario() 
        { 
            $id = $_GET['idInventario']; 
            $inventario = Inventario::searchByIdInventario($id); 
            require_once('views/inventario/actualizarInventario.php'); 
        } 
 
        public function actualizar() 
        { 
            $inventario = new Inventario($_POST['idInventario'], $_POST[' piezas'], $_POST[' idLugarTrabajo'], $_POST[' idPapeleria'], ); // Borrar la ultima coma del $_POST
            Inventario::actualizarInventario($inventario); 
            $this->verInventario(); 
        } 
 
        public function borrarInventario() 
        { 
            if (!isset($_GET['idInventario'])) 
               return call('acceso', 'error'); 
             
            $post = Inventario::borrarInventario($_GET['idInventario']); 
            $this->verInventario(); 
        } 
    } 
?> 
