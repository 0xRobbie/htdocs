<?php
    class Producto
    {
        private $idProducto;
        private $producto;
        private $stockMinimo;
        private $minimisucursal;
        private $maximosucursal;
        private $folio;
        private $idFormato;
        private $idTipoProducto;

        public function __construct($idProducto, $producto, $stockMinimo, $minimisucursal, $maximosucursal, $folio, $idFormato, $idTipoProducto)
        {
            $this->idProducto = $idProducto;
            $this->producto = $producto;
            $this->stockMinimo = $stockMinimo;
            $this->minimisucursal = $minimisucursal;
            $this->maximosucursal = $maximosucursal;
            $this->folio = $folio;
            $this->idFormato = $idFormato;
            $this->idTipoProducto = $idTipoProducto;
        }

        public function getIdProducto() { return $this->idProducto;}
        public function setIdProducto($idProducto) {$this->idProducto;}
        public function getProducto() { return $this->producto;}
        public function setProducto($producto) {$this->producto;}
        public function getStockMinimo() { return $this->stockMinimo;}
        public function setStockMinimo($stockMinimo) {$this->stockMinimo;}
        public function getMinimoSucursal() { return $this->minimisucursal;}
        public function setMinimoSucursal($minimisucursal) {$this->minimisucursal;}
        public function getMaximoSucursal() { return $this->maximosucursal;}
        public function setMaximoSucursal($maximosucursal) {$this->maximosucursal;}
        public function getFolio() { return $this->folio;}
        public function setFolio($folio) {$this->folio;}
        public function getIdFormato() { return $this->idFormato;}
        public function setIdFormato($idFormato) {$this->idFormato;}
        public function getIdTipoProducto() { return $this->idTipoProducto;}
        public function setIdTipoProducto($idTipoProducto) {$this->idTipoProducto;}

        public static function verProductoCompleta(){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT  producto.idProducto, 
                                        producto.producto, 
                                        producto.stockMinimo, 
                                        producto.minimoSucursal, 
                                        producto.maximoSucursal, 
                                        producto.folio, 
                                        producto.formato, 
                                        tipoProducto.tipoProducto 
                                FROM producto
                                LEFT JOIN tipoProducto ON tipoProducto.idTipoProducto = producto.idTipoProducto
                                ORDER BY Producto.idProducto;");

            foreach($req->fetchAll() as $producto) {
                $producto[] = $producto;
            }

            if (empty($producto)) {
                $producto = '0';
            }

            return $producto;
        }

        public static function verProducto($tipoProducto, $soloDepartamento){
            $db = Db::getInstance();          
            $req = $db->query(" SELECT  p.idProducto, 
                                        p.producto, 
                                        p.stockMinimo, 
                                        p.minimoSucursal, 
                                        p.maximoSucursal, 
                                        p.folio,
                                        p.formato,
                                        t.tipoProducto 
                                FROM producto as p
                                LEFT JOIN tipoProducto as t ON t.idTipoProducto = p.idTipoProducto
                                WHERE p.idTipoProducto = $tipoProducto AND p.soloDepartamento != $soloDepartamento AND p.producto NOT LIKE 'tarjetas%' AND p.producto NOT LIKE 'notas%'
                                ORDER BY p.idProducto;");

            foreach($req->fetchAll() as $producto) {
                $producto[] = $producto;
            }

            return $producto;
        }

        public static function actualizarProducto($producto){
            $db = Db::getInstance();
            $update = $db->prepare('UPDATE producto 
                                    SET producto=:producto,
                                        stockMinimo=:stockMinimo,
                                        minimoSucursal=:minimoSucursal,
                                        maximoSucursal=:maximoSucursal,
                                        folio=:folio,
                                        idFormato=:idFormato,
                                        idTipoProducto=:idTipoProducto WHERE idProducto=:idProducto');
            $update->bindValue('idProducto', $producto->getIdProducto());
            $update->bindValue('producto', $producto->getproducto());
            $update->bindValue('stockMinimo', $producto->getstockMinimo());
            $update->bindValue('minimoSucursal', $producto->getMinimoSucursal());
            $update->bindValue('maximoSucursal', $producto->getMaximoSucursal());
            $update->bindValue('folio', $producto->getFolio());
            $update->bindValue('idFormato', $producto->getIdFormato());
            $update->bindValue('idTipoProducto', $producto->getIdTipoProducto());
            $update->execute();
          }

          public static function searchByIdProducto($id) {
            $db = Db::getInstance();

            $stmt = $db->prepare("SELECT * FROM producto WHERE idProducto = $id");
            $stmt->execute();
            $producto = $stmt->fetch();

            return new Producto($producto['idProducto'], $producto['producto'], $producto['stockMinimo'], $producto['minimoSucursal'], $producto['maximoSucursal'], $producto['folio'], $producto['idFormato'], $producto['idTipoProducto']);
          }

        public static function crearProducto($producto){
            $db = Db::getInstance();
            $insert=$db->prepare('INSERT INTO producto (idProducto, producto, stockMinimo, minimoSucursal, maximoSucursal, folio, idFormato, idTipoProducto) VALUES (:idProducto, :producto, :stockMinimo, :minimoSucursal, :maximoSucursal, :folio, :idFormato, :idTipoProducto)');
            $insert->bindValue('idProducto', $producto->getIdProducto());
            $insert->bindValue('producto', $producto->getProducto());
            $insert->bindValue('stockMinimo', $producto->getStockMinimo());
            $insert->bindValue('minimoSucursal', $producto->getMinimoSucursal());
            $insert->bindValue('maximoSucursal', $producto->getMaximoSucursal());
            $insert->bindValue('folio', $producto->getFolio());
            $insert->bindValue('idFormato', $producto->getIdFormato());
            $insert->bindValue('idTipoProducto', $producto->getIdTipoProducto());
            $insert->execute();
        }

        public static function borrarProducto($id)  
        { 
            $db = Db::getInstance(); 
            $sql = ("DELETE FROM producto WHERE idProducto = $id"); 
            $db->exec($sql); 
        } 

    }
?>