-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema inventario
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema inventario
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `inventario` DEFAULT CHARACTER SET utf8 ;
USE `inventario` ;

-- -----------------------------------------------------
-- Table `inventario`.`departamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`departamentos` (
  `idDepartamentos` INT(11) NOT NULL AUTO_INCREMENT,
  `departamento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDepartamentos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`tipopapeleria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`tipopapeleria` (
  `idTipoPapeleria` INT(11) NOT NULL AUTO_INCREMENT,
  `tipoPapeleria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoPapeleria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`papeleria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`papeleria` (
  `idPapeleria` INT(11) NOT NULL AUTO_INCREMENT,
  `producto` VARCHAR(45) NOT NULL,
  `stockMinimo` INT(11) NOT NULL DEFAULT '0',
  `minimoSucursal` INT(11) NOT NULL DEFAULT '0',
  `maximoSucursal` INT(11) NOT NULL,
  `folio` TINYINT NOT NULL DEFAULT '0',
  `formato` VARCHAR(45) NOT NULL,
  `soloDepartamento` TINYINT NOT NULL,
  `idTipoPapeleria` INT(11) NOT NULL,
  PRIMARY KEY (`idPapeleria`),
  INDEX `fk_insumo_tipoDeInsumo1_idx` (`idTipoPapeleria` ) ,
  CONSTRAINT `fk_insumo_tipoDeInsumo1`
    FOREIGN KEY (`idTipoPapeleria`)
    REFERENCES `inventario`.`tipopapeleria` (`idTipoPapeleria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`sucursales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`sucursales` (
  `idSucursales` INT(11) NOT NULL AUTO_INCREMENT,
  `identificador` INT NOT NULL,
  `sucursal` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(150) NOT NULL,
  `region` VARCHAR(45) NOT NULL,
  `colonia` VARCHAR(45) NOT NULL,
  `municipio` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `cp` INT(11) NOT NULL,
  PRIMARY KEY (`idSucursales`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`lugartrabajo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`lugartrabajo` (
  `idLugarTrabajo` INT(11) NOT NULL AUTO_INCREMENT,
  `idDepartamentos` INT(11) NULL DEFAULT NULL,
  `idSucursales` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idLugarTrabajo`),
  INDEX `fk_tipousuario_departamentos1_idx` (`idDepartamentos` ) ,
  INDEX `fk_tipousuario_sucursales1_idx` (`idSucursales` ) ,
  CONSTRAINT `fk_tipousuario_departamentos1`
    FOREIGN KEY (`idDepartamentos`)
    REFERENCES `inventario`.`departamentos` (`idDepartamentos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipousuario_sucursales1`
    FOREIGN KEY (`idSucursales`)
    REFERENCES `inventario`.`sucursales` (`idSucursales`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`usuarios` (
  `idUsuarios` INT(11) NOT NULL AUTO_INCREMENT,
  `usuarios` VARCHAR(20) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `idLugarTrabajo` INT(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  INDEX `fk_usuarios_lugarTrabajo1_idx` (`idLugarTrabajo` ) ,
  CONSTRAINT `fk_usuarios_lugarTrabajo1`
    FOREIGN KEY (`idLugarTrabajo`)
    REFERENCES `inventario`.`lugartrabajo` (`idLugarTrabajo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`rastreo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`rastreo` (
  `idRastreo` INT(11) NOT NULL AUTO_INCREMENT,
  `rastreo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idRastreo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`solicitudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`solicitudes` (
  `idSolicitudes` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsuarios` INT(11) NOT NULL,
  `idTipoPapeleria` INT(11) NOT NULL,
  `idRastreo` INT(11) NOT NULL,
  `fechaSolicitud` DATETIME NULL,
  `fechaEnvio` DATETIME NULL,
  `fechaRecibido` DATETIME NULL,
  PRIMARY KEY (`idSolicitudes`),
  INDEX `fk_solicitudes_usuarios1_idx` (`idUsuarios` ) ,
  INDEX `fk_solicitudes_tipoPapeleria1_idx` (`idTipoPapeleria` ) ,
  INDEX `fk_solicitudes_rastreo1` (`idRastreo` ) ,
  CONSTRAINT `fk_solicitudes_rastreo1`
    FOREIGN KEY (`idRastreo`)
    REFERENCES `inventario`.`rastreo` (`idRastreo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_tipoPapeleria1`
    FOREIGN KEY (`idTipoPapeleria`)
    REFERENCES `inventario`.`tipopapeleria` (`idTipoPapeleria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_usuarios1`
    FOREIGN KEY (`idUsuarios`)
    REFERENCES `inventario`.`usuarios` (`idUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`movimientoconsumibles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`movimientoconsumibles` (
  `idMovimientoConsumibles` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsuarios` INT(11) NOT NULL,
  `idPapeleria` INT(11) NOT NULL,
  `piezasSolicitadas` INT NOT NULL,
  `piezasEnviadas` INT NOT NULL DEFAULT 0,
  `idSolicitudes` INT(11) NOT NULL,
  PRIMARY KEY (`idMovimientoConsumibles`),
  INDEX `fk_movimientos_usuarios1_idx` (`idUsuarios` ) ,
  INDEX `fk_movimientos_papeleria1_idx` (`idPapeleria` ) ,
  INDEX `fk_movimientos_requerimientos1_idx` (`idSolicitudes` ) ,
  CONSTRAINT `fk_movimientos_Papeleria1`
    FOREIGN KEY (`idPapeleria`)
    REFERENCES `inventario`.`papeleria` (`idPapeleria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_movimientos_Usuarios1`
    FOREIGN KEY (`idUsuarios`)
    REFERENCES `inventario`.`usuarios` (`idUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_movimientos_requerimientos1`
    FOREIGN KEY (`idSolicitudes`)
    REFERENCES `inventario`.`solicitudes` (`idSolicitudes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`folios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`folios` (
  `idFolios` INT(11) NOT NULL AUTO_INCREMENT,
  `folioInicial` INT(11) NOT NULL,
  `folioFinal` INT(11) NOT NULL,
  `idMovimientoConsumibles` INT(11) NOT NULL,
  PRIMARY KEY (`idFolios`),
  INDEX `fk_folios_movimientoConsumibles1_idx` (`idMovimientoConsumibles` ) ,
  CONSTRAINT `fk_folios_movimientoConsumibles1`
    FOREIGN KEY (`idMovimientoConsumibles`)
    REFERENCES `inventario`.`movimientoconsumibles` (`idMovimientoConsumibles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inventario`.`inventario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`inventario` (
  `idInventario` INT NOT NULL AUTO_INCREMENT,
  `piezas` INT NOT NULL,
  `idLugarTrabajo` INT(11) NOT NULL,
  `idPapeleria` INT(11) NOT NULL,
  PRIMARY KEY (`idInventario`),
  INDEX `fk_Inventario_lugartrabajo1_idx` (`idLugarTrabajo` ) ,
  INDEX `fk_Inventario_papeleria1_idx` (`idPapeleria` ) ,
  CONSTRAINT `fk_Inventario_lugartrabajo1`
    FOREIGN KEY (`idLugarTrabajo`)
    REFERENCES `inventario`.`lugartrabajo` (`idLugarTrabajo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Inventario_papeleria1`
    FOREIGN KEY (`idPapeleria`)
    REFERENCES `inventario`.`papeleria` (`idPapeleria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`productonuevo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`productonuevo` (
  `idProductoNuevo` INT NOT NULL,
  `producto` VARCHAR(45) NOT NULL,
  `piezas` INT NOT NULL,
  `uso` VARCHAR(140) NOT NULL,
  `idUsuarios` INT(11) NOT NULL,
  PRIMARY KEY (`idProductoNuevo`),
  INDEX `fk_productoNuevo_usuarios1_idx` (`idUsuarios` ) ,
  CONSTRAINT `fk_productoNuevo_usuarios1`
    FOREIGN KEY (`idUsuarios`)
    REFERENCES `inventario`.`usuarios` (`idUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`movimientosInventario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`movimientosInventario` (
  `idMovimientosInventario` INT NOT NULL,
  `piezas` INT NOT NULL,
  `idLugarTrabajo` INT NOT NULL,
  `idPapeleria` INT NOT NULL,
  PRIMARY KEY (`idMovimientosInventario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`productosFactura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`productosFactura` (
  `idProductosFactura` INT NOT NULL AUTO_INCREMENT,
  `clave` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProductosFactura`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`homologarProductos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`homologarProductos` (
  `idHomologarProductos` INT NOT NULL AUTO_INCREMENT,
  `idPapeleria` INT(11) NOT NULL,
  `idProductosFactura` INT NOT NULL,
  PRIMARY KEY (`idHomologarProductos`),
  INDEX `fk_registroFacturas_papeleria1_idx` (`idPapeleria` ASC) ,
  INDEX `fk_asociacionFacturas_productosFactura1_idx` (`idProductosFactura` ASC) ,
  CONSTRAINT `fk_registroFacturas_papeleria1`
    FOREIGN KEY (`idPapeleria`)
    REFERENCES `inventario`.`papeleria` (`idPapeleria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_asociacionFacturas_productosFactura1`
    FOREIGN KEY (`idProductosFactura`)
    REFERENCES `inventario`.`productosFactura` (`idProductosFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`emisionFactura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`emisionFactura` (
  `idFactura` INT NOT NULL AUTO_INCREMENT,
  `folio` VARCHAR(45) NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`idFactura`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`proveedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`proveedores` (
  `idProveedores` INT NOT NULL AUTO_INCREMENT,
  `razonSocial` VARCHAR(45) NOT NULL,
  `rfc` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProveedores`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`cotizacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`cotizacion` (
  `idCotizacion` INT NOT NULL AUTO_INCREMENT,
  `idProveedores` INT NOT NULL,
  `idPapeleria` INT(11) NOT NULL,
  `precio` DECIMAL NULL,
  `entregaProgramada` DATETIME(6) NULL,
  PRIMARY KEY (`idCotizacion`),
  INDEX `fk_cotizacion_proveedores1_idx` (`idProveedores` ASC) ,
  INDEX `fk_cotizacion_papeleria1_idx` (`idPapeleria` ASC) ,
  CONSTRAINT `fk_cotizacion_proveedores1`
    FOREIGN KEY (`idProveedores`)
    REFERENCES `inventario`.`proveedores` (`idProveedores`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cotizacion_papeleria1`
    FOREIGN KEY (`idPapeleria`)
    REFERENCES `inventario`.`papeleria` (`idPapeleria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`solicitudFactura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`solicitudFactura` (
  `idSolicitudFactura` INT NOT NULL AUTO_INCREMENT,
  `piezas` DOUBLE NOT NULL,
  `precioUnitario` DOUBLE NOT NULL,
  `idProductosFactura` INT NOT NULL,
  `idFactura` INT NOT NULL,
  `idProveedores` INT NOT NULL,
  PRIMARY KEY (`idSolicitudFactura`),
  INDEX `fk_solicitudFactura_productosFactura1_idx` (`idProductosFactura` ASC) ,
  INDEX `fk_solicitudFactura_factura1_idx` (`idFactura` ASC) ,
  INDEX `fk_solicitudFactura_proveedores1_idx` (`idProveedores` ASC) ,
  CONSTRAINT `fk_solicitudFactura_productosFactura1`
    FOREIGN KEY (`idProductosFactura`)
    REFERENCES `inventario`.`productosFactura` (`idProductosFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudFactura_factura1`
    FOREIGN KEY (`idFactura`)
    REFERENCES `inventario`.`emisionFactura` (`idFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudFactura_proveedores1`
    FOREIGN KEY (`idProveedores`)
    REFERENCES `inventario`.`proveedores` (`idProveedores`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
