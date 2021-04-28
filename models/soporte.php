<?php
    class Soporte
    {

        // Restricción: 
        // Aplica en trajes con precio normal de etiqueta de $ 4,500. 
        // Aplica en trajes de temporada 18 y 19. 
        // Aplica en trajes de temporada 20, excepto los trajes de precio normal de etiqueta de $ 6,250 $ 6,500 y $ 7,500. 
        // Aplica en trajes con precio de etiqueta amarilla de $ 1,500.
        public static function trajes3x4500(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT distinct SUBSTR(codigo,1,8) AS codigo, lista1 as precio, fam3 as linea, fam7 as temporada FROM prendas WHERE fam3='3TR' AND (lista1 = 4500 OR fam7 = '7J' OR fam7 = '7L' OR (fam7 = '7N' AND (lista1 != 6250 OR lista1 != 6500 OR lista1 != 7500) ) );");

            foreach($req->fetchAll() as $data) {
                $codigos[] = $data;
            }

            return $codigos;
        }

        // Restricción: 
        // Aplica en camisas temporada básica con precio normal de etiqueta $850, $975, $1000. 
        // Aplica en camisas temporada 19, 20 y 21 con precio normal de etiqueta de $1000.
        public static function camisas2x600(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT distinct SUBSTR(codigo,1,8) AS codigo, lista1 as precio, fam3 as linea, fam7 as temporada FROM prendas WHERE fam3='3CA' AND ((fam7 = '7K' AND lista1 = 850) OR (fam7 = '7K' AND lista1 = 975) OR (fam7 = '7K' AND lista1 = 1000) OR (fam7 = '7L' AND lista1 = 1000) OR (fam7 = '7N' AND lista1 = 1000) OR (fam7 = '7O' AND lista1 = 1000))ORDER BY lista1, codigo;");

            foreach($req->fetchAll() as $data) {
                $codigos[] = $data;
            }

            return $codigos;
        }
        
    }
?>