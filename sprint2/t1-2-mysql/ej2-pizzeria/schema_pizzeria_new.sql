-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema pizzeria
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pizzeria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pizzeria` DEFAULT CHARACTER SET utf8mb4 ;
USE `pizzeria` ;

-- -----------------------------------------------------
-- Table `pizzeria`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`categoria` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pizzeria`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`producto` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(225) NOT NULL,
  `img` VARCHAR(225) NOT NULL DEFAULT 'imagen_no_disponible.jpg',
  `precio` FLOAT(6,2) NOT NULL,
  `tipo` ENUM('pizza', 'hamburguesa', 'bebida') NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pizzeria`.`categoria_producto_pizza`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`categoria_producto_pizza` (
  `id_categoria` INT(10) UNSIGNED NULL DEFAULT NULL,
  `id_pizza` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_pizza`),
  INDEX `id_categoria` (`id_categoria` ASC) VISIBLE,
  CONSTRAINT `categoria_producto_pizza_ibfk_1`
    FOREIGN KEY (`id_pizza`)
    REFERENCES `pizzeria`.`producto` (`id`),
  CONSTRAINT `categoria_producto_pizza_ibfk_2`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `pizzeria`.`categoria` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pizzeria`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`cliente` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NOT NULL,
  `apellidos` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(50) NOT NULL,
  `codigo_postal` VARCHAR(5) NOT NULL,
  `localidad` VARCHAR(25) NOT NULL,
  `provincia` VARCHAR(25) NOT NULL,
  `telefono` INT(9) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `telefono` (`telefono` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pizzeria`.`tienda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`tienda` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(50) NOT NULL,
  `codigo_postal` VARCHAR(5) NOT NULL,
  `localidad` VARCHAR(25) NOT NULL,
  `provincia` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pizzeria`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`pedido` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_hora` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `id_cliente` INT(10) UNSIGNED NOT NULL,
  `tipo` ENUM('local', 'domicilio') NOT NULL,
  `id_tienda` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_cliente` (`id_cliente` ASC) VISIBLE,
  INDEX `id_tienda` (`id_tienda` ASC) VISIBLE,
  CONSTRAINT `pedido_ibfk_1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `pizzeria`.`cliente` (`id`),
  CONSTRAINT `pedido_ibfk_2`
    FOREIGN KEY (`id_tienda`)
    REFERENCES `pizzeria`.`tienda` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pizzeria`.`detalle_pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`detalle_pedido` (
  `id_pedido` INT(10) UNSIGNED NOT NULL,
  `id_producto` INT(10) UNSIGNED NOT NULL,
  `unidades_producto` INT(10) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_pedido`, `id_producto`),
  INDEX `id_producto` (`id_producto` ASC) VISIBLE,
  CONSTRAINT `detalle_pedido_ibfk_1`
    FOREIGN KEY (`id_pedido`)
    REFERENCES `pizzeria`.`pedido` (`id`),
  CONSTRAINT `detalle_pedido_ibfk_2`
    FOREIGN KEY (`id_producto`)
    REFERENCES `pizzeria`.`producto` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pizzeria`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`empleado` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NOT NULL,
  `apellidos` VARCHAR(50) NOT NULL,
  `NIF` VARCHAR(10) NOT NULL,
  `telefono` VARCHAR(9) NULL DEFAULT NULL,
  `puesto` ENUM('repartidor', 'cocinero') NOT NULL,
  `id_tienda` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_tienda` (`id_tienda` ASC) VISIBLE,
  CONSTRAINT `empleado_ibfk_1`
    FOREIGN KEY (`id_tienda`)
    REFERENCES `pizzeria`.`tienda` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pizzeria`.`pedido_a_domicilio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pizzeria`.`pedido_a_domicilio` (
  `id_pedido` INT(10) UNSIGNED NOT NULL,
  `id_empleado` INT(10) UNSIGNED NOT NULL,
  `fecha_hora_entrega` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id_pedido`),
  INDEX `id_empleado` (`id_empleado` ASC) VISIBLE,
  CONSTRAINT `pedido_a_domicilio_ibfk_1`
    FOREIGN KEY (`id_pedido`)
    REFERENCES `pizzeria`.`pedido` (`id`),
  CONSTRAINT `pedido_a_domicilio_ibfk_2`
    FOREIGN KEY (`id_empleado`)
    REFERENCES `pizzeria`.`empleado` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
