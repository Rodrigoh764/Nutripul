-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 05:37:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutripul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `cliente_nombre` varchar(50) DEFAULT NULL,
  `cliente_apellidoPa` varchar(50) DEFAULT NULL,
  `cliente_apellidoMa` varchar(50) DEFAULT NULL,
  `cliente_telefono` varchar(20) DEFAULT NULL,
  `cliente_correo` varchar(50) DEFAULT NULL,
  `cliente_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `cliente_nombre`, `cliente_apellidoPa`, `cliente_apellidoMa`, `cliente_telefono`, `cliente_correo`, `cliente_password`) VALUES
(60, 'Rodrigo', 'Hernández', 'Hernández', '5564678927', 'rodrigo@gmail.com', 'rodrigo123'),
(61, 'Jessica', 'Castro', 'Colin', '5512345678', 'luna345@gmail.com', '10203040'),
(62, 'Carlos', 'Zuñiga', 'Alvarado', '5555553717', 'maria34@gmail.com', '99999999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `alcaldia` varchar(50) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `codigoPostal` int(11) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `genero` varchar(20) NOT NULL,
  `referencia` text NOT NULL,
  `numInt` varchar(11) DEFAULT NULL,
  `numExt` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`cliente_id`, `alcaldia`, `colonia`, `codigoPostal`, `calle`, `genero`, `referencia`, `numInt`, `numExt`) VALUES
(60, 'Milpa Alta', 'Omaxa', 12600, 'Jalapa y Colorines', 'Masculino', 'puerta color cafe con ventana color negro', 'SN', '15'),
(62, 'Coyoacán', 'Omaxa', 15999, 'nuevo león y venado', 'Masculino', 'Un costado de la panaderia Rios', '15', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD KEY `clienteId` (`cliente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cliente_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `clienteId` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`cliente_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
