<?php 
    class ProductosFacturaController 
    { 
        public function verproductosFactura() 
        { 
            $productosfactura = productosFactura::verproductosFactura(); 
            include_once ('views/productosfactura/verproductosFactura.php'); 
        } 
 
        public function formularioproductosFactura() 
        { 
            include_once ('views/productosfactura/formularioproductosFactura.php'); 
        } 
 
        public function crearproductosFactura() 
        { 
            if (!isset($_POST['clave'], $_POST['descripcion'] ))
                return call('acceso', 'error'); 
 
            $productosfactura = new productosFactura( $_POST['idProductosFactura'], $_POST['clave'], $_POST['descripcion']);
            productosFactura::crearproductosFactura($productosfactura); 
            $this->verproductosFactura(); 
        } 
 
        public function actualizarproductosFactura() 
        { 
            $id = $_GET['idproductosFactura']; 
            $productosfactura = productosFactura::searchByIdproductosFactura($id); 
            require_once('views/productosfactura/actualizarproductosFactura.php'); 
        } 
 
        public function actualizar() 
        { 
            $productosfactura = new productosFactura( $_POST['idProductosFactura'], $_POST['clave'], $_POST['descripcion']);
            productosFactura::actualizarproductosFactura($productosfactura); 
            $this->verproductosFactura(); 
        } 
 
        public function borrarproductosFactura() 
        { 
            if (!isset($_GET['idproductosFactura'])) 
               return call('acceso', 'error'); 
             
            $post = productosFactura::borrarproductosFactura($_GET['idproductosFactura']); 
            $this->verproductosFactura(); 
        } 
    } 
?> 
