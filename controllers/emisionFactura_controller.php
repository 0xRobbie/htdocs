<?php 
    class EmisionFacturaController 
    { 
        public function verEmisionFactura() 
        { 
            $emisionfactura = EmisionFactura::verEmisionFactura(); 
            include_once ('views/emisionFactura/verEmisionFactura.php'); 
        } 
 
        public function formularioEmisionFactura() 
        { 
            include_once ('views/emisionFactura/formularioEmisionFactura.php'); 
        } 
 
        public function crearEmisionFactura() 
        {   
            if (!isset( $_POST['folio'], $_POST['fecha']))
                return call('acceso', 'error'); 
 
            $emisionfactura = new EmisionFactura(null, $_POST['folio'], $_POST['fecha']);
            EmisionFactura::crearEmisionFactura($emisionfactura); 
            $this->verEmisionFactura(); 
        } 
        
        public function actualizarEmisionFactura() 
        { 
            $id = $_GET['idEmisionFactura']; 
            $emisionfactura = EmisionFactura::searchByIdemisionFactura($id); 
            require_once('views/emisionFactura/actualizarEmisionFactura.php'); 
        } 
        
        public function actualizar() 
        { 
            $emisionfactura = new EmisionFactura( $_POST['idFactura'], $_POST['fecha']);
            EmisionFactura::actualizarEmisionFactura($emisionfactura); 
            $this->verEmisionFactura(); 
        } 
 
        public function borraremisionFactura() 
        { 
            if (!isset($_GET['idEmisionFactura'])) 
               return call('acceso', 'error'); 
             
            $post = EmisionFactura::borrarEmisionFactura($_GET['idEmisionFactura']); 
            $this->verEmisionFactura(); 
        } 
    } 
?> 
