<?php 
    class HomologarProductosController 
    { 
        public function verhomologarProductos() 
        { 
            $homologarproductos = homologarProductos::verhomologarProductos(); 
            include_once ('views/homologarproductos/verhomologarProductos.php'); 
        } 
 
        public function formulariohomologarProductos() 
        { 
            include_once ('views/homologarproductos/formulariohomologarProductos.php'); 
        } 
 
        public function crearhomologarProductos() 
        { 
            if (!isset( $_POST['idPapeleria'], $_POST['idProductosFactura']))
                return call('acceso', 'error'); 
 
            $homologarproductos = new homologarProductos( $_POST['idHomologarProductos'], $_POST['idPapeleria'], $_POST['idProductosFactura']);
            homologarProductos::crearhomologarProductos($homologarproductos); 
            $this->verhomologarProductos(); 
        } 
 
        public function actualizarhomologarProductos() 
        { 
            $id = $_GET['idhomologarProductos']; 
            $homologarproductos = homologarProductos::searchByIdhomologarProductos($id); 
            require_once('views/homologarproductos/actualizarhomologarProductos.php'); 
        } 
        
        public function actualizar() 
        { 
            $homologarproductos = new homologarProductos( $_POST['idHomologarProductos'], $_POST['idPapeleria'], $_POST['idProductosFactura']);
            homologarProductos::actualizarhomologarProductos($homologarproductos); 
            $this->verhomologarProductos(); 
        } 
 
        public function borrarhomologarProductos() 
        { 
            if (!isset($_GET['idhomologarProductos'])) 
               return call('acceso', 'error'); 
             
            $post = homologarProductos::borrarhomologarProductos($_GET['idhomologarProductos']); 
            $this->verhomologarProductos(); 
        } 
    } 
?> 
