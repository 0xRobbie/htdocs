<?php
    class AccesoController
    {
        public function index()
        {
            include_once ('views/acceso/index.php');
        }

        public function error()
        {
            include_once ('views/acceso/error.php');
        }
        
        public function login()
        {
            if (!isset($_POST['usuarios'], $_POST['password']))
                return call('acceso', 'error');
                
            $user = Usuarios::login($_POST['usuarios'], $_POST['password']);

            if (!$user->getIdUsuarios() == null) {
                $_SESSION["user_id"] = $user->getidUsuarios();
                $_SESSION["user_lugar"] = $user->getidLugarTrabajo();
                $this->redireccionarMenu();
            } else {
                return call('acceso', 'index');
            }
        }
        
        public function redireccionarMenu()
        {
            if ($_SESSION["user_lugar"] == '58' || $_SESSION["user_lugar"] == '59') { 
                echo "<script>window.location = '?controller=acceso&action=menuSistemas'</script>";
            } 
            
            if ($_SESSION["user_lugar"] != '58' || $_SESSION["user_lugar"] != '59') {
                echo "<script>window.location = '?controller=acceso&action=menuSucursales'</script>";
            }
        }

        public function menuSistemas()
        {
            // $minmax = Sucursales::minmax();
            $stock = Sucursales::stock();
            $datos = Acceso::verDatos();
            $usuario = Acceso::verUsuario($_SESSION['user_id']);
            //$inventario = Sucursales::verInventarioSistemas();
            include_once ('views/acceso/menuSistemas.php');
        }
        
        public function menuSucursales()
        {
            $inventario = Inventario::verInventarioLugarTrabajo($_SESSION['user_lugar']);
            $minimos = Inventario::verMinimoLugarTrabajo($_SESSION['user_lugar']);
            $usuario = Acceso::verUsuario($_SESSION['user_id']);
            include_once ('views/acceso/menuSucursales.php');
        }

        public function logout()
        {
            session_destroy();
            include_once ('views/acceso/logout.php');
        }
    }
?>