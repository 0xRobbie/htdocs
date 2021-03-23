<?php 
    class SolicitudFacturaController 
    { 
        public function versolicitudFactura() 
        { 
            $solicitudfactura = solicitudFactura::versolicitudFactura(); 
            include_once ('views/solicitudfactura/versolicitudFactura.php'); 
        } 
 
        public function formulariosolicitudFactura() 
        { 
            include_once ('views/solicitudfactura/formulariosolicitudFactura.php'); 
        } 
 
        public function crearsolicitudFactura() 
        { 
            if (!isset( $_POST['idSolicitudFactura'],$_POST['piezas'],$_POST['precioUnitario'],$_POST['idProductosFactura'],$_POST['idFactura'],$_POST['idProveedores'])
                return call('acceso', 'error'); 
 
            $solicitudfactura = new solicitudFactura( $_POST['idSolicitudFactura'], $_POST['piezas'], $_POST['precioUnitario'], $_POST['idProductosFactura'], $_POST['idFactura'], $_POST['idProveedores']);
            solicitudFactura::crearsolicitudFactura($solicitudfactura); 
            $this->versolicitudFactura(); 
        } 
 
        public function actualizarsolicitudFactura() 
        { 
            $id = $_GET['idsolicitudFactura']; 
            $solicitudfactura = solicitudFactura::searchByIdsolicitudFactura($id); 
            require_once('views/solicitudfactura/actualizarsolicitudFactura.php'); 
        } 
        
        public function actualizar() 
        { 
            $solicitudfactura = new solicitudFactura( $_POST['idSolicitudFactura'], $_POST['piezas'], $_POST['precioUnitario'], $_POST['idProductosFactura'], $_POST['idFactura'], $_POST['idProveedores']);
            solicitudFactura::actualizarsolicitudFactura($solicitudfactura); 
            $this->versolicitudFactura(); 
        } 
 
        public function borrarsolicitudFactura() 
        { 
            if (!isset($_GET['idsolicitudFactura'])) 
               return call('acceso', 'error'); 
             
            $post = solicitudFactura::borrarsolicitudFactura($_GET['idsolicitudFactura']); 
            $this->versolicitudFactura(); 
        } 
    } 
?> 
