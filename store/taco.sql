-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-03-2019 a las 02:24:26
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taco`
--
CREATE DATABASE IF NOT EXISTS `taco` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `taco`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `marca` int(6) NOT NULL,
  `modelo` int(6) NOT NULL,
  `estatus` varchar(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `descripcion`, `marca`, `modelo`, `estatus`) VALUES
(1, 'TENIS DAMA', 3, 1, 'A'),
(2, 'TENIS CABALLERO', 1, 1, 'A'),
(3, 'PLAYERA NIÃ±O', 3, 3, 'A'),
(5, 'TENIS RUNNING', 11, 4, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `estatus` varchar(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `descripcion`, `estatus`) VALUES
(1, 'PIRMA', 'A'),
(2, 'NIKE', 'A'),
(3, 'ADIDAS', 'A'),
(9, 'REEBOOK', 'A'),
(11, 'CHARLY', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

DROP TABLE IF EXISTS `modelos`;
CREATE TABLE IF NOT EXISTS `modelos` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `estatus` varchar(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `descripcion`, `estatus`) VALUES
(1, 'PXM', 'A'),
(3, 'AFC', 'A'),
(4, 'TXH', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `pass` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'josue.hdez_94@outlook.com', 'aiduald1'),
(2, 'cr7', 'wdewqd4'),
(3, 'ronaldo', '4567i9'),
(4, 'platon@hotmail.com', '3456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
