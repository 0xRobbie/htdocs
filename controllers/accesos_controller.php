<?php
    class AccesosController
    {
        public function index()
        {
            include_once ('views/accesos/index.php');
        }

        public function error()
        {
            include_once ('views/accesos/error.php');
        }
        
        public function login()
        {
            if (!isset($_POST['usuarios'], $_POST['password']))
                return call('accesos', 'error');
                
            $user = Accesos::login($_POST['usuarios'], $_POST['password']);

            if (!$user->getIdUsuarios() == null) {
                $_SESSION["user_id"] = $user->getidUsuarios();
                // $_SESSION["user_lugar"] = $user->getidLugarTrabajo();
                $this->redireccionarMenu();
            } else {
                return call('accesos', 'index');
            }
        }
        
        public function redireccionarMenu()
        {
            echo "<script>window.location = '?controller=accesos&action=menuSistemas'</script>";
        }

        public function menuSistemas()
        {
            // $minmax = Sucursales::minmax();
            $stock = Sucursales::stock();
            // $datos = Accesos::verDatos();
            $usuario = Accesos::verUsuario($_SESSION['user_id']);
            //$inventario = Sucursales::verInventarioSistemas();
            include_once ('views/accesos/menuSistemas.php');
        }
        
        public function menuSucursales()
        {
            $inventario = Inventario::verInventarioLugarTrabajo($_SESSION['user_lugar']);
            $minimos = Inventario::verMinimoLugarTrabajo($_SESSION['user_lugar']);
            $usuario = Accesos::verUsuario($_SESSION['user_id']);
            include_once ('views/accesos/menuSucursales.php');
        }

        public function logout()
        {
            session_destroy();
            include_once ('views/accesos/logout.php');
        }
        
        // public function verAccesos()
        // {
        //     $accesos = Accesos::verAccesos();
        //     include_once ('views/accesos/verAccesos.php');
        // }

        public function verAccesosCorreo()
        {
            $accesos = Accesos::verAccesosCorreo();
            include_once ('views/accesos/verCorreo.php');
        }

        public function verAccesosSkype()
        {
            $accesos = Accesos::verAccesosSkype();
            include_once ('views/accesos/verSkype.php');
        }
        
        public function verAccesosServidorProscai()
        {
            $accesos = Accesos::verAccesosServidorProscai();
            include_once ('views/accesos/verServidorProscai.php');
        }

        public function verAccesosProscai()
        {
            $accesos = Accesos::verAccesosProscai();
            include_once ('views/accesos/verProscai.php');
        }

        public function verAccesosProscaiSeguridad()
        {
            $accesos = Accesos::verAccesosProscaiSeguridad();
            include_once ('views/accesos/verSeguridadProscai.php');
        }

    }
?>