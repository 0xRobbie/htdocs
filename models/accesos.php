<?php
    class Accesos
    {
        public static function verAccesosServidorProscai(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT
                                a.idAccesos,
                                u.usuarios,
                                a.usuario,
                                a.password
                                from accesos as a
                                left join usuarios as u on u.idUsuarios = a.idUsuarios where idServicios = 2;");

            foreach($req->fetchAll() as $data) {
                $accesos[] = $data;
            }

            return $accesos;
        }
        
        public static function verAccesosProscai(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT
                                a.idAccesos,
                                u.usuarios,
                                a.usuario,
                                a.password
                                from accesos as a
                                left join usuarios as u on u.idUsuarios = a.idUsuarios where idServicios = 3;");

            foreach($req->fetchAll() as $data) {
                $accesos[] = $data;
            }

            return $accesos;
        }
        
        public static function verAccesosProscaiSeguridad(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT
                                a.idAccesos,
                                u.usuarios,
                                a.usuario,
                                a.password
                                from accesos as a
                                left join usuarios as u on u.idUsuarios = a.idUsuarios where idServicios =  7;");

            foreach($req->fetchAll() as $data) {
                $accesos[] = $data;
            }

            return $accesos;
        }
        
        public static function verAccesosCorreo(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT
                                a.idAccesos,
                                u.usuarios,
                                a.usuario,
                                a.password
                                from accesos as a
                                left join usuarios as u on u.idUsuarios = a.idUsuarios where idServicios = 4;");

            foreach($req->fetchAll() as $data) {
                $accesos[] = $data;
            }

            return $accesos;
        }
        
        public static function verAccesosSkype(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT
                                a.idAccesos,
                                u.usuarios,
                                a.usuario,
                                a.password
                                from accesos as a
                                left join usuarios as u on u.idUsuarios = a.idUsuarios where idServicios = 5;");

            foreach($req->fetchAll() as $data) {
                $accesos[] = $data;
            }

            return $accesos;
        }
        

        public static function login($usuario, $password) {
            $db = Db::getInstance();
            $select = $db->prepare('SELECT idUsuarios FROM accesos WHERE usuario=:usuario AND password=:password AND idServicios = 1');
            $select->bindValue('usuario', $usuario);
            $select->bindValue('password', $password);
            $select->execute();
            
            $usuario = $select->fetch();
            $user = new Usuarios($usuario['idUsuarios'], null, null, null);

            return $user;
        }

        // public static function verDatos(){
        //     $db = Db::getInstance();          
        //     $req = $db->query(" SELECT 'Sucursales', count(idSucursales) FROM sucursales
        //                         UNION
        //                         SELECT 'Departamentos', count(idDepartamentos) FROM departamentos
        //                         UNION
        //                         SELECT 'Papeleria', count(idTipoPapeleria) FROM papeleria WHERE idTipoPapeleria = 1
        //                         UNION
        //                         SELECT 'Papeleria Impresa', count(idTipoPapeleria) FROM papeleria WHERE idTipoPapeleria = 2
        //                         UNION
        //                         SELECT 'Solicitudes por atender', count(idSolicitudes) FROM solicitudes WHERE idRastreo = 2;");

        //     foreach($req->fetchAll() as $data) {
        //         $datos[] = $data;
        //     }

        //     return $datos;
        // }

        public static function verUsuario($idUsuario){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT u.usuarios, l.idLugarTrabajo, s.sucursal, d.departamento
                                FROM usuarios AS u
                                LEFT JOIN lugarTrabajo AS l ON l.idLugarTrabajo = u.idLugarTrabajo
                                LEFT JOIN sucursales AS s ON s.idSucursales = l.idSucursales
                                LEFT JOIN departamentos AS d ON d.idDepartamentos = l.idDepartamentos
                                WHERE u.idUsuarios = $idUsuario;");

            foreach($req->fetchAll() as $data) {
                $usuarios[] = $data;
            }

            return $usuarios;
        }

        public static function verAccesosUsuario($idUsuario){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT 
                                a.idUsuarios,
                                s.servicio,
                                a.usuario,
                                a.password
                                FROM accesos AS a 
                                LEFT JOIN servicios AS s ON s.idServicios = a.idServicios 
                                WHERE idUsuarios = $idUsuario;");
            
            foreach($req->fetchAll() as $data) {
                $accesos[] = $data;
            }

            return $accesos;
        }

    }
?>