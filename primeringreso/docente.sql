-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-06-2015 a las 04:08:53
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `matriculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
  `id_docente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `apellido` text,
  `genero` text,
  `telefono` text,
  `correo` text,
  `id_carrera` int(11) DEFAULT NULL,
  `cordinador` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre`, `apellido`, `genero`, `telefono`, `correo`, `id_carrera`, `cordinador`) VALUES
(5, 'Pedro', 'Luis', 'H', '2332-22', 'pedroluis@hotmail.com', 343, 1),
(6, 'Carlos', 'Melgar', 'H', '4312-124', 'carlosmelgar@hotmail.com', 122, 1),
(7, 'Manuel', 'Saul', 'H', '3233-123', 'mauelsaul@hotmail.com', 553, 0),
(8, 'Carla', 'Estrada', 'M', '7533-23', 'carlaestrada@hotmail.com', 553, 1),
(9, 'Mario', 'Suazo', 'H', '34222-334', 'mariosuazo@hotmail.com', 122, 0),
(10, 'Carlos', 'Pineda', 'H', '2223-4567', 'invento@aqui.com', 3321, 0),
(11, 'RamÃ³n', 'Ramirez', 'H', '5523-4567', 'inventootro@aqui.com', 343, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
