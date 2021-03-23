<?php 
    class ProveedoresController 
    { 
        public function verProveedores() 
        { 
            $proveedores = Proveedores::verProveedores(); 
            include_once ('views/proveedores/verProveedores.php'); 
        } 
 
        public function formularioProveedores() 
        { 
            include_once ('views/proveedores/formularioProveedores.php'); 
        } 
 
        public function crearProveedores() 
        { 
            if (!isset($_POST['razonSocial'], $_POST['rfc'], $_POST['direccion'],))
                return call('acceso', 'error'); 
 
            $proveedores = new Proveedores( null, $_POST['razonSocial'], $_POST['rfc'], $_POST['direccion']);
            Proveedores::crearProveedores($proveedores); 
            $this->verProveedores(); 
        } 
        
        public function actualizarProveedores() 
        { 
            $id = $_GET['idProveedores']; 
            $proveedores = Proveedores::searchByIdProveedores($id); 
            require_once('views/proveedores/actualizarProveedores.php'); 
        } 
        
        public function actualizar() 
        { 
            $proveedores = new Proveedores( $_POST['idProveedores'], $_POST['razonSocial'], $_POST['rfc'], $_POST['direccion']);
            Proveedores::actualizarProveedores($proveedores); 
            $this->verProveedores(); 
        } 
 
        public function borrarProveedores() 
        { 
            if (!isset($_GET['idProveedores'])) 
               return call('acceso', 'error'); 
             
            $post = Proveedores::borrarProveedores($_GET['idProveedores']); 
            $this->verProveedores(); 
        } 
    } 
?> 
