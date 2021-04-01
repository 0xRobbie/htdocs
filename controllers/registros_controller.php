<?php
    class RegistrosController
    {
        public function verRegistros()
        {
            $registros = Registros::verRegistros();
            include_once ('views/registros/verRegistros.php');
        }
        
        // public function formularioUsuarios()
        // {
        //     $lugaresTrabajo = LugarTrabajo::verLugarTrabajo();
        //     include_once ('views/usuarios/formularioUsuarios.php');
        // }
        
        // public function crearUsuarios()
        // {   
        //     if (!isset($_POST['usuarios'], $_POST['password'], $_POST['idLugarTrabajo']))
        //         return call('acceso', 'error'); 
 
        //     $usuarios = new Usuarios( null, $_POST['usuarios'], $_POST['password'], $_POST['idLugarTrabajo']);
        //     Usuarios::crearUsuarios($usuarios); 
        //     $this->verUsuarios(); 
        // }

        // public function actualizarUsuarios() 
        // { 
        //     $id = $_GET['idUsuarios'];
        //     $lugaresTrabajo = LugarTrabajo::verLugarTrabajo();
        //     $usuario = Usuarios::searchByIdUsuarios($id); 
        //     require_once('views/usuarios/actualizarUsuarios.php'); 
        // } 
 
        // public function actualizar() 
        // {             
        //     $usuarios = new Usuarios($_POST['idUsuarios'], $_POST['usuario'], $_POST['password']); 
        //     Usuarios::actualizarUsuarios($usuarios); 
        //     $this->verUsuarios(); 
        // } 
 
        // public function borrarUsuarios() 
        // {   
        //     if (!isset($_GET['idUsuarios'])) 
        //        return call('acceso', 'error'); 
             
        //     $post = Usuarios::borrarUsuarios($_GET['idUsuarios']); 
        //     $this->verUsuarios(); 
        // } 
    }
?>