-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema optica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema optica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `optica` DEFAULT CHARACTER SET utf8mb4 ;
USE `optica` ;

-- -----------------------------------------------------
-- Table `optica`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`cliente` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NOT NULL,
  `direccion` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(9) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `fecha_registro` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `optica`.`cliente_recomienda_otro_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`cliente_recomienda_otro_cliente` (
  `id_cliente_recomienda` INT(10) UNSIGNED NOT NULL,
  `id_cliente_recomendado` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_cliente_recomienda`, `id_cliente_recomendado`),
  INDEX `id_cliente_recomendado` (`id_cliente_recomendado` ASC) VISIBLE,
  CONSTRAINT `cliente_recomienda_otro_cliente_ibfk_1`
    FOREIGN KEY (`id_cliente_recomienda`)
    REFERENCES `optica`.`cliente` (`id`),
  CONSTRAINT `cliente_recomienda_otro_cliente_ibfk_2`
    FOREIGN KEY (`id_cliente_recomendado`)
    REFERENCES `optica`.`cliente` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `optica`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`empleado` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `optica`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`marca` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `optica`.`gafa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`gafa` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_marca` INT(10) UNSIGNED NOT NULL,
  `nombre` VARCHAR(25) NOT NULL,
  `graduacion_od` FLOAT(4,2) NULL DEFAULT NULL,
  `graduacion_oi` FLOAT(4,2) NULL DEFAULT NULL,
  `tipo` ENUM('flotante', 'pasta', 'metálica') NOT NULL,
  `color_montura` VARCHAR(25) NULL DEFAULT NULL,
  `color_cristal_od` VARCHAR(25) NULL DEFAULT NULL,
  `color_cristal_oi` VARCHAR(25) NULL DEFAULT NULL,
  `precio` FLOAT(6,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_marca` (`id_marca` ASC) VISIBLE,
  CONSTRAINT `gafa_ibfk_1`
    FOREIGN KEY (`id_marca`)
    REFERENCES `optica`.`marca` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `optica`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`proveedor` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NOT NULL,
  `calle` VARCHAR(50) NOT NULL,
  `numero` VARCHAR(10) NOT NULL,
  `piso` VARCHAR(5) NULL DEFAULT NULL,
  `puerta` VARCHAR(5) NULL DEFAULT NULL,
  `ciudad` VARCHAR(25) NOT NULL,
  `codigo_postal` VARCHAR(5) NOT NULL,
  `pais` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(9) NOT NULL,
  `fax` VARCHAR(9) NULL DEFAULT NULL,
  `NIF` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `optica`.`politica_de_compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`politica_de_compra` (
  `id_marca` INT(10) UNSIGNED NOT NULL,
  `id_proveedor` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_marca`, `id_proveedor`),
  UNIQUE INDEX `id_marca` (`id_marca` ASC) VISIBLE,
  INDEX `id_proveedor` (`id_proveedor` ASC) VISIBLE,
  CONSTRAINT `politica_de_compra_ibfk_1`
    FOREIGN KEY (`id_marca`)
    REFERENCES `optica`.`marca` (`id`),
  CONSTRAINT `politica_de_compra_ibfk_2`
    FOREIGN KEY (`id_proveedor`)
    REFERENCES `optica`.`proveedor` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `optica`.`tiempo_de_venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`tiempo_de_venta` (
  `id_gafa` INT(10) UNSIGNED NOT NULL,
  `fecha_venta_max` DATE NOT NULL,
  PRIMARY KEY (`id_gafa`),
  CONSTRAINT `tiempo_de_venta_ibfk_1`
    FOREIGN KEY (`id_gafa`)
    REFERENCES `optica`.`gafa` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `optica`.`venta_de_gafa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `optica`.`venta_de_gafa` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_gafa` INT(10) UNSIGNED NOT NULL,
  `id_cliente` INT(10) UNSIGNED NOT NULL,
  `id_empleado` INT(10) UNSIGNED NOT NULL,
  `fecha_venta` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`),
  INDEX `id_gafa` (`id_gafa` ASC) VISIBLE,
  INDEX `id_cliente` (`id_cliente` ASC) VISIBLE,
  INDEX `id_empleado` (`id_empleado` ASC) VISIBLE,
  CONSTRAINT `venta_de_gafa_ibfk_1`
    FOREIGN KEY (`id_gafa`)
    REFERENCES `optica`.`gafa` (`id`),
  CONSTRAINT `venta_de_gafa_ibfk_2`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `optica`.`cliente` (`id`),
  CONSTRAINT `venta_de_gafa_ibfk_3`
    FOREIGN KEY (`id_empleado`)
    REFERENCES `optica`.`empleado` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
