<?php
    class Accesos
    {
        public static function verAccesos(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT * FROM accesos;");

            foreach($req->fetchAll() as $data) {
                $accesos[] = $data;
            }

            return $accesos;
        }

    }
?>