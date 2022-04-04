-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2022 a las 18:31:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `id` varchar(30) DEFAULT NULL,
  `precio` decimal(12,3) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `correo`, `id`, `precio`, `fecha`) VALUES
(1, 'correo@gmail.com', '12333', '500.000', '2022-02-01 14:48:46'),
(2, 'correo@gmail.com', '12333', '500.000', '2022-02-01 14:50:17'),
(3, 'correo@gmail.com', '12333', '500.000', '2022-02-01 18:22:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` varchar(30) NOT NULL,
  `NOMBRE` varchar(255) DEFAULT NULL,
  `IMAGEN` varchar(100) DEFAULT NULL,
  `PRECIO` decimal(12,3) DEFAULT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `NOMBRE`, `IMAGEN`, `PRECIO`, `DESCRIPCION`) VALUES
('12333', 'TABLET TOSHIBA', '../../imagenes/tablet.jpg', '500.000', 'Una Tableta (del inglés: tablet o tablet computer) es un tipo de computadora portátil'),
('23454', 'LAPTOP ASUS', '../../imagenes/descarga.jpg', '2500.000', 'Su procesador Intel Core I7 tiene una velocidad de 2.5GHz y 8GB de memoria RAM'),
('567452', 'Televisor 4K', '../../imagenes/televisor.jpg', '1500.500', 'Un fino marco hará que cualquier área de tu hogar luzca como una verdadera sala de cine, puesto que posee una pantalla LED de 55 pulgadas'),
('IPHONE-2345', 'iPhone 6s', '../../imagenes/celular.jpg', '859.990', 'Apple presenta el iPhone 6s un smartphone con mejoras de hardware en comparación con sus predecesores de la misma marca; pantalla 3D Touch');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `correo` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tarjeta` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nivel` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo`, `nombre`, `apellido`, `tarjeta`, `password`, `nivel`) VALUES
('admin@gmail.com', '', '', '', 'admin', 1),
('correo@gmail.com', 'Martin', 'Bison', '1234-1234-1234-1234', 'correo', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `correo` (`correo`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`correo`) REFERENCES `usuarios` (`correo`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id`) REFERENCES `productos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
