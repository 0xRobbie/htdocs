<?php
    class Usuarios
    {
        private $idUsuarios;
        private $usuario;
        private $password;
        private $idLugarTrabajo;

        public function __construct($idUsuarios, $usuario, $password, $idLugarTrabajo)
        {
            $this->idUsuarios = $idUsuarios;
            $this->usuario = $usuario;
            $this->password = $password;
            $this->idLugarTrabajo = $idLugarTrabajo;
        }

        public function getidUsuarios() { return $this->idUsuarios;}
        public function setidUsuarios($idUsuarios) {$this->idUsuarios;}
        public function getusuario() { return $this->usuario;}
        public function setusuario($usuario) {$this->usuario;}
        public function getpassword() { return $this->password;}
        public function setpassword($password) {$this->password;}
        public function getidLugarTrabajo() { return $this->idLugarTrabajo;}
        public function setidLugarTrabajo($idLugarTrabajo) {$this->idLugarTrabajo;}

        public static function verUsuarios(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT 	usuarios.idUsuarios,
                                        usuarios.usuarios,
                                        usuarios.password,
                                        lugarTrabajo.idLugarTrabajo,
                                        sucursales.sucursal,
                                        departamentos.departamento
                                FROM usuarios
                                LEFT JOIN lugarTrabajo ON lugarTrabajo.idLugarTrabajo = usuarios.idLugarTrabajo
                                LEFT JOIN sucursales ON sucursales.idSucursales = lugarTrabajo.idSucursales
                                LEFT JOIN departamentos ON departamentos.idDepartamentos = lugarTrabajo.idDepartamentos");
            foreach($req->fetchAll() as $usuario) {
                $usuarios[] = $usuario;
            }
            
            return $usuarios;
        }

        public static function login($usuarios, $password) {
            $db = Db::getInstance();
            $select = $db->prepare('SELECT idUsuarios, idLugarTrabajo FROM usuarios WHERE usuarios=:usuarios AND password=:password');
            $select->bindValue('usuarios', $usuarios);
            $select->bindValue('password', $password);
            $select->execute();
            
            $usuario = $select->fetch();
            $user = new Usuarios($usuario['idUsuarios'], null, null, $usuario['idLugarTrabajo']);

            return $user;
        }

        public static function crearUsuarios($usuarios) 
        { 
            $db = Db::getInstance(); 
            $insert=$db->prepare('INSERT INTO usuarios (usuarios, password, idLugarTrabajo)
                                  VALUES (:usuarios, :password, :idLugarTrabajo)');
            $insert->bindValue('usuarios', $usuarios->getusuario()); 
            $insert->bindValue('password', $usuarios->getpassword()); 
            $insert->bindValue('idLugarTrabajo', $usuarios->getidLugarTrabajo()); 
            $insert->execute(); 
        } 

        public static function actualizarUsuarios($usuarios) 
        {   
            $db = Db::getInstance();
            $update = $db->prepare('UPDATE usuarios  
                                    SET  
                                    usuarios=:usuarios, 
                                    password=:password, 
                                    idLugarTrabajo=:idLugarTrabajo
                                    WHERE
                                    idUsuarios=:idUsuarios'); 
            $update->bindValue('usuarios', $usuarios->getusuario()); 
            $update->bindValue('password', $usuarios->getpassword()); 
            $update->bindValue('idLugarTrabajo', $usuarios->getidLugarTrabajo()); 
            $update->bindValue('idUsuarios', $usuarios->getidUsuarios()); 
            $update->execute(); 
        } 
 
        public static function searchByidUsuarios($id) 
        { 
            $db = Db::getInstance(); 
            $stmt = $db->prepare("SELECT * FROM usuarios WHERE idUsuarios = $id"); 
            $stmt->execute(); 
            $select = $stmt->fetch();
            return new Usuarios($select['idUsuarios'], $select['usuarios'], $select['password'], $select['idLugarTrabajo']);
        } 
 
        public static function borrarUsuarios($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ("DELETE FROM usuarios WHERE idUsuarios = $id"); 
            $db->exec($sql); 
        } 
    }
?>