<?php
    class Soporte
    {
        public static function camisas80(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT distinct SUBSTR(codigo,1,8) AS codigo, lista1 as precio, fam3 as linea, fam7 as temporada FROM productos 
                                WHERE fam3='3CA' AND fam7 != '7K' AND 
                                (lista1=1000 OR lista1=1100 OR lista1=1225 OR lista1=1250 OR lista1=1300 OR lista1=1375 OR lista1=1450);");

            foreach($req->fetchAll() as $data) {
                $codigos[] = $data;
            }

            return $codigos;
        }
        
        public static function pantalones80(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT distinct SUBSTR(codigo,1,8) AS codigo, lista1 as precio, fam3 as linea, fam7 as temporada FROM productos 
                                WHERE fam3='3PN' AND (fam7 != '7K' OR codigo = 'VPN01046') AND 
                                (lista1=975 OR lista1=1375 OR lista1=1400 OR lista1=1500);");

            foreach($req->fetchAll() as $data) {
                $codigos[] = $data;
            }

            return $codigos;
        }

        public static function trajes3x4500(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT distinct SUBSTR(codigo,1,8) AS codigo, lista1 as precio, fam3 as linea, fam7 as temporada FROM productos 
                                WHERE fam3='3TR' AND (lista1 = 4500 OR fam7 = '7J' OR fam7 = '7L' OR (fam7 = '7N' AND (lista1 != 6250 OR lista1 != 6500 OR lista1 != 7500) ) );");

            foreach($req->fetchAll() as $data) {
                $codigos[] = $data;
            }

            return $codigos;
        }

        public static function camisas2x600(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT distinct SUBSTR(codigo,1,8) AS codigo, lista1 as precio, fam3 as linea, fam7 as temporada FROM productos 
                                WHERE fam3='3CA' AND 
                                ((fam7 = '7K' AND lista1 = 850 AND lista1 = 975 AND lista1 = 1000) OR 
                                (fam7 = '7L' AND lista1 = 1000) OR (fam7 = '7N' AND lista1 = 1000) OR (fam7 = '7O' AND lista1 = 1000));");

            foreach($req->fetchAll() as $data) {
                $codigos[] = $data;
            }

            return $codigos;
        }


        public static function etiquetado() {
            
        }
        
    }
?>