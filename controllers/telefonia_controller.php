<?php
    class TelefoniaController
    {
        public function verTelefonia()
        {
            $telefonia = Telefonia::verTelefoniaCompleta();
            include_once ('views/telefonia/verTelefonia.php');
        }
        
        // public function formularioTelefonia()
        // {
        //     $tipos = Telefonia::verTipoTelefonia();
        //     $formatos = Formato::verFormato();
        //     include_once ('views/telefonia/formularioTelefonia.php');
        // }

        // public function crearTelefonia()
        // {
        //     if (!isset($_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['formato'], $_POST['idTipoTelefonia']) )
        //         return call('acceso', 'error');

        //     $producto = new Telefonia(null, $_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['formato'], $_POST['idTipoTelefonia']);
        //     Telefonia::crearTelefonia($producto);

        //     $this->verTelefonia();
        // }
        
        // public function actualizarTelefonia()
        // {
        //     $idTelefonia = $_GET['idTelefonia'];
        //     $producto = Telefonia::searchByIdTelefonia($idTelefonia);
        //     $formatos = Formato::verFormato();
        //     $tiposTelefonia = TipoTelefonia::verTipoTelefonia();
        //     require_once('views/Telefonia/actualizarTelefonia.php');
        // }

        // public function actualizar()
        // {
        //     $Telefonia = new Telefonia($_POST['idTelefonia'], $_POST['producto'], $_POST['stockMinimo'], $_POST['minimoSucursal'], $_POST['maximoSucursal'], $_POST['folio'], $_POST['idFormato'], $_POST['idTipoTelefonia']);
        //     Telefonia::actualizarTelefonia($Telefonia);
        //     $this->verTelefonia();
        // }

        // public function borrarTelefonia()
        // {
        //     if (!isset($_GET['idTelefonia'])) 
        //        return call('acceso', 'error'); 
             
        //     $post = Telefonia::borrarTelefonia($_GET['idTelefonia']); 
        //     $this->verTelefonia(); 
        // }

    }
?>