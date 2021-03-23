<?php 
    class CotizacionController 
    { 
        public function vercotizacion() 
        { 
            $cotizacion = cotizacion::vercotizacion(); 
            include_once ('views/cotizacion/vercotizacion.php'); 
        } 
 
        public function formulariocotizacion() 
        { 
            include_once ('views/cotizacion/formulariocotizacion.php'); 
        } 
 
        public function crearcotizacion() 
        { 
            if (!isset(  $_POST['idCotizacion'], $_POST['idProveedores'], $_POST['idPapeleria'],  $_POST['precio'], $_POST['entregaProgramada'] ))
                return call('acceso', 'error'); 
            
            $cotizacion = new cotizacion( $_POST['idCotizacion'], $_POST['idProveedores'], $_POST['idPapeleria'], $_POST['precio'], $_POST['entregaProgramada']);
            cotizacion::crearcotizacion($cotizacion); 
            $this->vercotizacion(); 
        } 
 
        public function actualizarcotizacion() 
        { 
            $id = $_GET['idcotizacion']; 
            $cotizacion = cotizacion::searchByIdcotizacion($id); 
            require_once('views/cotizacion/actualizarcotizacion.php'); 
        } 
        
        public function actualizar() 
        { 
            $cotizacion = new cotizacion( $_POST['idCotizacion'], $_POST['idProveedores'], $_POST['idPapeleria'], $_POST['precio'], $_POST['entregaProgramada']);
            cotizacion::actualizarcotizacion($cotizacion); 
            $this->vercotizacion(); 
        } 
 
        public function borrarcotizacion() 
        { 
            if (!isset($_GET['idcotizacion'])) 
               return call('acceso', 'error'); 
             
            $post = cotizacion::borrarcotizacion($_GET['idcotizacion']); 
            $this->vercotizacion(); 
        } 
    } 
?> 
