-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2023 a las 12:49:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_registro` date NOT NULL,
  `id_cliente_recomienda` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `direccion`, `telefono`, `email`, `fecha_registro`, `id_cliente_recomienda`) VALUES
(1, 'Susana Gil', 'c/Escòcia, 60, 1º 1ª', '649826075', 'susanagilcastro@gmail.com', '2021-12-08', NULL),
(2, 'Pepe Martínez', 'Rambla Nova, 42, 6º', '932658956', 'ppp@gmail.com', '2022-01-09', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`) VALUES
(1, 'Maria García'),
(2, 'Pepe Robles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gafa`
--

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
  `precio` float(6,2) NOT NULL,
  `fecha_venta_max` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gafa`
--

INSERT INTO `gafa` (`id`, `id_marca`, `nombre`, `graduacion_od`, `graduacion_oi`, `tipo`, `color_montura`, `color_cristal_od`, `color_cristal_oi`, `precio`, `fecha_venta_max`) VALUES
(1, 1, 'Portaite', 9.75, 0.25, 'pasta', 'Negro', NULL, NULL, 98.99, '2022-12-31'),
(2, 1, 'Gafas de sol Ray-Ban', 2.75, 2.75, 'pasta', 'negro', 'azul', 'azul', 125.00, '2022-06-15'),
(3, 2, 'Gafas de sol Oakley', 3.00, 3.00, 'flotante', 'verde', 'verde', 'verde', 150.00, NULL),
(4, 3, 'Gafas de sol Gucci', 2.50, 2.50, 'metálica', 'dorado', 'transparente', 'transparente', 200.00, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `id_proveedor` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`, `id_proveedor`) VALUES
(1, 'Ray-Ban', 1),
(2, 'Oakley', 1),
(3, 'Gucci', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `calle`, `numero`, `piso`, `puerta`, `ciudad`, `codigo_postal`, `pais`, `telefono`, `fax`, `NIF`) VALUES
(1, 'Slatic', 'c/Pepe', '60A', NULL, NULL, 'Barcelona', '08016', 'España', '934836765', NULL, 'G38155745'),
(2, 'Gafas de verdad', 'c/esa', '34', NULL, NULL, 'Madrid', '80403', 'España', '914555555', NULL, 'h44444444');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_de_gafa`
--

CREATE TABLE `venta_de_gafa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_gafa` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_empleado` int(10) UNSIGNED NOT NULL,
  `fecha_venta` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta_de_gafa`
--

INSERT INTO `venta_de_gafa` (`id`, `id_gafa`, `id_cliente`, `id_empleado`, `fecha_venta`) VALUES
(1, 1, 2, 1, '2022-11-20'),
(2, 2, 2, 1, '2022-06-10'),
(3, 4, 1, 1, '2022-11-20'),
(4, 2, 1, 2, '2022-11-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente_recomienda` (`id_cliente_recomienda`);

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gafa`
--
ALTER TABLE `gafa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_cliente_recomienda`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `gafa`
--
ALTER TABLE `gafa`
  ADD CONSTRAINT `gafa_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`);

--
-- Filtros para la tabla `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `marca_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id`);

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
