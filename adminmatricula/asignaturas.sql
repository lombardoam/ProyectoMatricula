-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-06-2015 a las 04:06:28
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
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE IF NOT EXISTS `asignaturas` (
  `id_asignatura` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_clase` varchar(45) NOT NULL,
  `codigo_clase` varchar(20) NOT NULL,
  `UV` int(1) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `horas_practicas` int(11) NOT NULL,
  `horas_teoricas` int(11) NOT NULL,
  `id_plan` varchar(45) NOT NULL,
  `id_carrera` varchar(45) NOT NULL,
  PRIMARY KEY (`id_asignatura`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id_asignatura`, `nombre_clase`, `codigo_clase`, `UV`, `periodo`, `horas_practicas`, `horas_teoricas`, `id_plan`, `id_carrera`) VALUES
(1, 'Filosofia', 'FIL2020', 3, '1-I', 1, 50, '1,2,3', '1,2,3'),
(2, 'EconomÃ­a', 'MAT1023', 3, '3-III', 10, 40, '8,9', '8,9'),
(4, 'Redes I', 'IIT2347', 4, '1-II', 20, 30, '4,5,6', '4,5,6'),
(5, 'ProgramaciÃ³n I', 'IIT1003', 4, '2-III', 50, 0, '4,5,6', '4,5,6'),
(6, 'ProgramaciÃ³n II', 'IIT1004', 4, '2-III', 50, 0, '4,5,6', '4,5,6'),
(7, 'Dispositivos MÃ³viles', 'IIT1005', 4, '3-II', 50, 1, '5,6,7', '5,6,7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
