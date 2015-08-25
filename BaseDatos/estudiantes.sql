-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-08-2015 a las 05:00:01
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matricula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `num_cuenta` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `tipo_estudiante` varchar(25) DEFAULT NULL,
  `lugar_nacimiento` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `direccion_vivienda` varchar(60) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion_trabajo` varchar(60) DEFAULT NULL,
  `telefono_trabajo` int(11) DEFAULT NULL,
  `fecha_ingreso` timestamp NULL DEFAULT NULL,
  `id_carrera` int(11) NOT NULL,
  `saldo` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `num_cuenta`, `nombres`, `apellidos`, `tipo_estudiante`, `lugar_nacimiento`, `fecha_nacimiento`, `estado_civil`, `direccion_vivienda`, `telefono`, `direccion_trabajo`, `telefono_trabajo`, `fecha_ingreso`, `id_carrera`, `saldo`) VALUES
(1, 201500001, 'Ricardo', 'Valladares', 'Reingreso', 'Tegucigalpa', '1994-08-18', 'Soltero', 'Col. La Joya', 23232323, 'No', 0, '2012-11-30 06:00:00', 3, 4000),
(2, 2015302145, 'MarÃ­a', 'Celeste', 'Primer ingreso', 'San Pedro Sula', '1991-09-25', 'Casada', 'Col. CalpÃºles', 545451515, 'Mall Multiplaza', 5151515, '2015-08-02 06:00:00', 1, 3000),
(3, 20011025, 'Juan Ãngel', 'Reyes', 'Reingreso', 'Tegucigalpa', '1982-11-18', 'Soltero', 'Col. Miramontes', 7513648, '', 0, '2013-01-05 06:00:00', 3, 0),
(4, 20153001, 'Laura', 'Calcagnini', 'Primer ingreso', 'La Ceiba', '1997-03-17', 'Soltera', 'Miraflores', 855151, '', 0, '2015-08-03 06:00:00', 2, 4000),
(5, 20153002, 'Katherine', 'MÃ¡rquez', 'Primer ingreso', 'Tegucigalpa', '1991-09-23', 'Soltera', 'El Hatillo', 22336655, '', 0, '2013-01-15 06:00:00', 3, 1000),
(6, 20131037, 'Lisseth', 'MejÃ­a', 'Reingreso', 'San Pedro Sula', '1991-09-23', 'Soltera', 'El Hatillo', 789412, '0', 0, '2013-01-18 06:00:00', 4, 0),
(7, 20102036, 'Laura', 'Chinchilla', 'Reingreso', 'San JosÃ©, CR', '1990-06-11', 'Casada', 'Col. El Tizatillo', 4848854, '', 0, '2015-01-17 06:00:00', 2, 0),
(8, 20123040, 'Andrea', 'RamÃ­rez', 'Reingreso', 'Tegucigalpa', '1992-11-20', 'Soltera', 'Col Torocagua', 0, '', 0, '2014-01-10 06:00:00', 1, 0),
(9, 20122045, 'Stephanie', 'Smith', 'Reingreso', 'Houston, TX', '1991-08-03', 'Soltera', 'El Progreso', 7841288, '', 0, '2015-01-17 06:00:00', 4, 2000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`,`num_cuenta`),
  ADD KEY `codigo_carrera_idx` (`id_carrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_estudiantes_carreras` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
