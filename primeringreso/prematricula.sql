-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-06-2015 a las 08:02:27
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
-- Estructura de tabla para la tabla `prematricula`
--

CREATE TABLE IF NOT EXISTS `prematricula` (
  `id_prematricula` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` varchar(20) NOT NULL,
  `id_cl1` varchar(20) NOT NULL,
  `s1` varchar(1) NOT NULL,
  `id_cl2` varchar(20) NOT NULL,
  `s2` varchar(1) NOT NULL,
  `id_cl3` varchar(20) NOT NULL,
  `s3` varchar(1) NOT NULL,
  `id_cl4` varchar(20) NOT NULL,
  `s4` varchar(1) NOT NULL,
  `id_cl5` varchar(20) NOT NULL,
  `s5` varchar(1) NOT NULL,
  `id_cl6` varchar(20) NOT NULL,
  `s6` varchar(1) NOT NULL,
  `id_cl7` varchar(20) NOT NULL,
  `s7` varchar(1) NOT NULL,
  PRIMARY KEY (`id_prematricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `prematricula`
--

INSERT INTO `prematricula` (`id_prematricula`, `id_estudiante`, `id_cl1`, `s1`, `id_cl2`, `s2`, `id_cl3`, `s3`, `id_cl4`, `s4`, `id_cl5`, `s5`, `id_cl6`, `s6`, `id_cl7`, `s7`) VALUES
(1, '3456', 'MAT1233', 'B', 'ECO123', 'C', 'FIS1001', 'A', 'BIO1001', 'B', 'MAT230', 'A', 'ITT123', 'A', 'DER456', 'C'),
(3, '200934', 'IIT1001', 'A', 'IIT1004', 'A', 'IIT1007', 'B', 'MAT567', 'A', 'FIS1001', 'A', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
