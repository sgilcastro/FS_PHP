-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2022 a las 22:47:54
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `optica`
--
CREATE DATABASE IF NOT EXISTS `optica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `optica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` VALUES(1, 'Susana Gil', 'c/Escòcia, 60, 1º 1ª', '649826075', 'susanagilcastro@gmail.com', '2021-12-08');
INSERT INTO `cliente` VALUES(2, 'Pepe Martínez', 'Rambla Nova, 42, 6º', '932658956', 'ppp@gmail.com', '2022-01-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_recomienda_otro_cliente`
--

DROP TABLE IF EXISTS `cliente_recomienda_otro_cliente`;
CREATE TABLE `cliente_recomienda_otro_cliente` (
  `id_cliente_recomienda` int(10) UNSIGNED NOT NULL,
  `id_cliente_recomendado` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente_recomienda_otro_cliente`
--

INSERT INTO `cliente_recomienda_otro_cliente` VALUES(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE `empleado` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` VALUES(1, 'Maria García');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gafa`
--

DROP TABLE IF EXISTS `gafa`;
CREATE TABLE `gafa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_marca` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `graduacion_od` float(4,2) DEFAULT NULL,
  `graduacion_oi` float(4,2) DEFAULT NULL,
  `tipo` enum('flotante','pasta','metálica') NOT NULL,
  `color_montura` varchar(25) DEFAULT NULL,
  `color_cristal_od` varchar(25) DEFAULT NULL,
  `color_cristal_oi` varchar(25) DEFAULT NULL,
  `precio` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gafa`
--

INSERT INTO `gafa` VALUES(1, 1, 'Portaite', 9.75, 0.25, 'pasta', 'Negro', NULL, NULL, 98.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` VALUES(1, 'Unno');
INSERT INTO `marca` VALUES(2, 'Polize');
INSERT INTO `marca` VALUES(3, 'Ray-Ban');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politica_de_compra`
--

DROP TABLE IF EXISTS `politica_de_compra`;
CREATE TABLE `politica_de_compra` (
  `id_marca` int(10) UNSIGNED NOT NULL,
  `id_proveedor` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `politica_de_compra`
--

INSERT INTO `politica_de_compra` VALUES(1, 1);
INSERT INTO `politica_de_compra` VALUES(2, 1);
INSERT INTO `politica_de_compra` VALUES(3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `piso` varchar(5) DEFAULT NULL,
  `puerta` varchar(5) DEFAULT NULL,
  `ciudad` varchar(25) NOT NULL,
  `codigo_postal` varchar(5) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `fax` varchar(9) DEFAULT NULL,
  `NIF` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` VALUES(1, 'Slatic', 'c/Pepe', '60A', NULL, NULL, 'Barcelona', '08016', 'España', '934836765', NULL, 'G38155745');
INSERT INTO `proveedor` VALUES(2, 'Ankorstore', 'rambla nueva', '85', '1', '1', 'Badia del Vallés', '08214', 'España', '659869696', '936986969', 'H38155745');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_de_gafa`
--

DROP TABLE IF EXISTS `venta_de_gafa`;
CREATE TABLE `venta_de_gafa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_gafa` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_empleado` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta_de_gafa`
--

INSERT INTO `venta_de_gafa` VALUES(1, 1, 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente_recomienda_otro_cliente`
--
ALTER TABLE `cliente_recomienda_otro_cliente`
  ADD PRIMARY KEY (`id_cliente_recomienda`,`id_cliente_recomendado`),
  ADD KEY `id_cliente_recomendado` (`id_cliente_recomendado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gafa`
--
ALTER TABLE `gafa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `politica_de_compra`
--
ALTER TABLE `politica_de_compra`
  ADD PRIMARY KEY (`id_marca`,`id_proveedor`),
  ADD UNIQUE KEY `id_marca` (`id_marca`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta_de_gafa`
--
ALTER TABLE `venta_de_gafa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gafa` (`id_gafa`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gafa`
--
ALTER TABLE `gafa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta_de_gafa`
--
ALTER TABLE `venta_de_gafa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_recomienda_otro_cliente`
--
ALTER TABLE `cliente_recomienda_otro_cliente`
  ADD CONSTRAINT `cliente_recomienda_otro_cliente_ibfk_1` FOREIGN KEY (`id_cliente_recomienda`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `cliente_recomienda_otro_cliente_ibfk_2` FOREIGN KEY (`id_cliente_recomendado`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `gafa`
--
ALTER TABLE `gafa`
  ADD CONSTRAINT `gafa_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`);

--
-- Filtros para la tabla `politica_de_compra`
--
ALTER TABLE `politica_de_compra`
  ADD CONSTRAINT `politica_de_compra_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`),
  ADD CONSTRAINT `politica_de_compra_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id`);

--
-- Filtros para la tabla `venta_de_gafa`
--
ALTER TABLE `venta_de_gafa`
  ADD CONSTRAINT `venta_de_gafa_ibfk_1` FOREIGN KEY (`id_gafa`) REFERENCES `gafa` (`id`),
  ADD CONSTRAINT `venta_de_gafa_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `venta_de_gafa_ibfk_3` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
