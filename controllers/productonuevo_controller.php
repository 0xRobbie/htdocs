<?php 
    class ProductoNuevoController 
    { 
        public function verProductoNuevo() 
        { 
            $productonuevo = ProductoNuevo::verProductoNuevo(); 
            include_once ('views/productonuevo/verProductoNuevo.php'); 
        } 
 
        public function formularioProductoNuevo() 
        { 
            include_once ('views/productonuevo/formularioProductoNuevo.php'); 
        } 
 
        public function crearProductoNuevo() 
        { 
            if (!isset( $_POST['idProductoNuevo'], $_POST[' producto'], $_POST[' piezas'], $_POST[' uso'], $_POST[' idUsuarios'], )) // Borrar la ultima coma del $_POST 
                return call('acceso', 'error'); 
 
            $productonuevo = new ProductoNuevo($_POST['idProductoNuevo'], $_POST[' producto'], $_POST[' piezas'], $_POST[' uso'], $_POST[' idUsuarios'], ); // Borrar la ultima coma del $_POST
            ProductoNuevo::crearProductoNuevo($productonuevo); 
            $this->verProductoNuevo(); 
        } 
 
        public function actualizarProductoNuevo() 
        { 
            $id = $_GET['idProductoNuevo']; 
            $productonuevo = ProductoNuevo::searchByIdProductoNuevo($id); 
            require_once('views/productonuevo/actualizarProductoNuevo.php'); 
        } 
 
        public function actualizar() 
        { 
            $productonuevo = new ProductoNuevo($_POST['idProductoNuevo'], $_POST[' producto'], $_POST[' piezas'], $_POST[' uso'], $_POST[' idUsuarios'], ); // Borrar la ultima coma del $_POST
            ProductoNuevo::actualizarProductoNuevo($productonuevo); 
            $this->verProductoNuevo(); 
        } 
 
        public function borrarProductoNuevo() 
        { 
            if (!isset($_GET['idProductoNuevo'])) 
               return call('acceso', 'error'); 
             
            $post = ProductoNuevo::borrarProductoNuevo($_GET['idProductoNuevo']); 
            $this->verProductoNuevo(); 
        } 
    } 
?> 
