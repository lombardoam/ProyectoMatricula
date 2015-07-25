-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2015 a las 09:19:56
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
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `num_cuenta` varchar(15) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `lugar_nacimiento` varchar(45) NOT NULL,
  `fecha_nacimiento` varchar(45) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `estado_civil` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `trabaja` tinyint(1) NOT NULL,
  `tel_trabajo` varchar(20) NOT NULL,
  `dir_trabajo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estudiante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `num_cuenta`, `apellidos`, `nombres`, `correo`, `lugar_nacimiento`, `fecha_nacimiento`, `telefono`, `nacionalidad`, `estado_civil`, `direccion`, `trabaja`, `tel_trabajo`, `dir_trabajo`) VALUES
(1, '20011025', 'Reyes', 'Juan', 'juan.reyes@ujcv.edu.hn', 'Tegucigalpa', '18-11-1982', '22334556', 'Honduras', 'Soltero', 'Tegucigalpa', 0, '', ''),
(2, '20152345', 'Espinoza', 'Marlon', 'marlont@yahoo.com', 'Tegucigalpa', '12-02-1992', '223347895', 'Honduras', 'Casado', 'Tegucigalpa', 1, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
