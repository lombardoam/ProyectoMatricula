-- http://www.phpmyadmin.net
 --
 -- Servidor: 127.0.0.1
--- Tiempo de generación: 01-08-2015 a las 12:17:21
+-- Tiempo de generación: 02-08-2015 a las 06:51:59
 -- Versión del servidor: 5.6.17
 -- Versión de PHP: 5.5.12

@@ -71,19 +71,16 @@ CREATE TABLE IF NOT EXISTS `carreras` (
   PRIMARY KEY (`id_carrera`,`codigo_carrera`),
   KEY `codigo_facultad_idx` (`id_facultad`),
   KEY `fk_carreras_puestos_idx` (`id_puesto`)
-) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;
+) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

 --
 -- Volcado de datos para la tabla `carreras`
 --

 INSERT INTO `carreras` (`id_carrera`, `codigo_carrera`, `nombre_carrera`, `id_facultad`, `codigo_empleado`, `id_puesto`) VALUES
-(1, 'ARQ', 'Arquitectura', 1, '3', 2),
-(2, 'INGC', 'Ingeniería Civil', 1, '4', 2),
-(3, 'IIT', 'Ingeniería en Infotecnología', 1, '5', 2),
-(4, 'ARQ', 'Arquitectura', 1, '3', 2),
-(5, 'INGC', 'Ingeniería Civil', 1, '4', 2),
-(6, 'IIT', 'Ingeniería en Infotecnología', 1, '5', 2);
+(1, 'ARQ', 'Arquitectura', 1, 'LER01', 2),
+(2, 'INGC', 'Ingenieria Civil', 1, 'IM01', 2),
+(3, 'IIT', 'Ingenieria en Infotecnologia', 1, 'LER03', 2);

 -- --------------------------------------------------------

@@ -171,7 +168,7 @@ CREATE TABLE IF NOT EXISTS `cursos` (
   `periodo` int(11) DEFAULT NULL,
   PRIMARY KEY (`id_curso`,`codigo_curso`),
   KEY `codigo_plan_idx` (`id_plan_estudio`)
-) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;
+) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

 --
 -- Volcado de datos para la tabla `cursos`
@@ -180,10 +177,7 @@ CREATE TABLE IF NOT EXISTS `cursos` (
 INSERT INTO `cursos` (`id_curso`, `codigo_curso`, `nombre_curso`, `uv`, `horas_practicas`, `horas_teoricas`, `laboratorio`, `id_plan_estudio`, `periodo`) VALUES
 (1, 'IIT4011', 'Seguridad de la Informacion', 4, 0, 4, 0, 1, 10),
 (2, 'IIT3032', 'Ingenieria de Software I', 3, 0, 3, 0, 1, 9),
-(3, 'IIT4012', 'Ingenieria de Software II', 3, 0, 3, 0, 1, 10),
-(4, 'IIT4011', 'Seguridad de la Informacion', 4, 0, 4, 0, 1, 10),
-(5, 'IIT3032', 'Ingenieria de Software I', 3, 0, 3, 0, 1, 9),
-(6, 'IIT4012', 'Ingenieria de Software II', 3, 0, 3, 0, 1, 10);
+(3, 'IIT4012', 'Ingenieria de Software II', 3, 0, 3, 0, 1, 10);

 -- --------------------------------------------------------

@@ -226,20 +220,28 @@ CREATE TABLE IF NOT EXISTS `empleados` (
   `email` varchar(45) DEFAULT NULL,
   `codigo_carrera` varchar(10) DEFAULT NULL,
   `id_puesto` int(11) DEFAULT NULL,
-  PRIMARY KEY (`id_empleado`,`codigo_empleado`),
+  `num_cuenta` int(11) NOT NULL,
+  PRIMARY KEY (`id_empleado`,`codigo_empleado`,`num_cuenta`),
   KEY `codigo_puesto_idx` (`id_puesto`),
   KEY `codigo_carrera_idx` (`codigo_carrera`)
-) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;
+) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

 --
 -- Volcado de datos para la tabla `empleados`
 --

-INSERT INTO `empleados` (`id_empleado`, `codigo_empleado`, `nombres`, `apellidos`, `genero`, `telefono`, `email`, `codigo_carrera`, `id_puesto`) VALUES
-(1, 'BM01', 'Belinda', 'Marder', 'F', 33344334, 'beli_mar@gmail.com', 'IIT', 3),
-(2, 'LER01', 'Lidia Erminda', 'Rodriguez', 'F', 98998998, 'li_er@gmail.com', 'IIT', 3),
-(3, 'LER03', 'Arquitecto', 'Mejia', 'M', 36363636, 'arme@gmail.com', 'ARQ', 2),
-(4, 'IM01', 'Ingeniero', 'Martínez', 'M', 34343434, 'ingma@gmail.com', 'INGC', 2);
+INSERT INTO `empleados` (`id_empleado`, `codigo_empleado`, `nombres`, `apellidos`, `genero`, `telefono`, `email`, `codigo_carrera`, `id_puesto`, `num_cuenta`) VALUES
+(1, 'BM01', 'Belinda', 'Marder', 'F', 33344334, 'beli_mar@gmail.com', 'ARQ', 3, 20150001),
+(2, 'LER01', 'Lidia Erminda', 'Rodriguez', 'F', 98998998, 'li_er@gmail.com', 'ARQ', 3, 20150002),
+(3, 'LER02', 'Arquitecto', 'Mejia', 'M', 36363636, 'arme@gmail.com', 'ARQ', 2, 20150003),
+(4, 'IM01', 'Ingeniero', 'Martinez', 'M', 34343434, 'ingma@gmail.com', 'INGC', 2, 20150004),
+(5, 'LER03', 'Marco Antonio', 'Diaz', 'M', 93939393, 'maan@gmail.com', 'IIT', 2, 20150005),
+(6, 'JT', 'Jeiky', 'Tovar', 'M', 92932939, 'jt@gmail.com', 'IIT', 1, 20150006),
+(7, 'JK', 'Jeiky', 'Tobar', 'M', 92292929, 'jk@gmail.com', 'IIT', 1, 20150006),
+(8, 'KE', 'Karen', 'Estrada', 'F', 12312312, 'kestrada@gmail.com', 'INGC', 5, 20150007),
+(9, 'JR', 'Juan', 'Reyes', 'M', 23232312, 'jreyes@gmail.com', 'IIT', 6, 20150008),
+(10, 'KE2', 'Karen', 'Estrada', 'F', 21312312, 'kestrada@gmail.com', 'INGC', 5, 20150007),
+(12, 'PG1', 'Pedro', 'Gallardo', 'M', 23654789, 'pg@gmail.com', 'INGC', 1, 0);

 -- --------------------------------------------------------

@@ -285,7 +287,14 @@ CREATE TABLE IF NOT EXISTS `estudiantes` (
   `saldo` double DEFAULT NULL,
   PRIMARY KEY (`id_estudiante`,`num_cuenta`),
   KEY `codigo_carrera_idx` (`id_carrera`)
-) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
+) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
+
+--
+-- Volcado de datos para la tabla `estudiantes`
+--
+
+INSERT INTO `estudiantes` (`id_estudiante`, `num_cuenta`, `nombres`, `apellidos`, `tipo_estudiante`, `lugar_nacimiento`, `fecha_nacimiento`, `estado_civil`, `direccion_vivienda`, `telefono`, `direccion_trabajo`, `telefono_trabajo`, `fecha_ingreso`, `id_carrera`, `saldo`) VALUES
+(1, 201500001, 'Ricardo', 'Valladares', 'reingreso', 'Tegucigalpa', '1994-08-18', 'Soltero', 'Col. La Joya', 23232323, 'No', 0, NULL, 3, 4000);

 -- --------------------------------------------------------

@@ -320,17 +329,15 @@ CREATE TABLE IF NOT EXISTS `facultades` (
   PRIMARY KEY (`id_facultad`,`codigo_facultad`),
   KEY `codigo_empleado_idx` (`codigo_empleado`),
   KEY `fk_facultades_puestos_idx` (`id_puesto`)
-) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;
+) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

 --
 -- Volcado de datos para la tabla `facultades`
 --

 INSERT INTO `facultades` (`id_facultad`, `codigo_facultad`, `nombre_facultad`, `codigo_empleado`, `id_puesto`) VALUES
-(1, 'FIA', 'Facultad de Ingenierías y Arquitectura', '1', 3),
-(2, 'FCE', 'Facultad de Ciencias Económicas', '2', 3),
-(3, 'FIA', 'Facultad de Ingenierías y Arquitectura', '1', 3),
-(4, 'FCE', 'Facultad de Ciencias Económicas', '2', 3);
+(1, 'FIA', 'Facultad de Ingenierias y Arquitectura', '1', 3),
+(2, 'FCE', 'Facultad de Ciencias Economicas', '2', 3);

 -- --------------------------------------------------------

@@ -415,19 +422,16 @@ CREATE TABLE IF NOT EXISTS `planes_estudio` (
   `id_carrera` int(11) NOT NULL,
   PRIMARY KEY (`id_plan_estudio`,`codigo_plan`),
   KEY `codigo_carrera_idx` (`id_carrera`)
-) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;
+) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

 --
 -- Volcado de datos para la tabla `planes_estudio`
 --

 INSERT INTO `planes_estudio` (`id_plan_estudio`, `codigo_plan`, `nombre_plan`, `duracion`, `cantidad_cursos`, `total_uv`, `id_carrera`) VALUES
-(1, 'IIT2013', 'Ingenieria en Infotecnologia', '4 años', 61, 219, 3),
-(2, 'INGC2013', 'Ingenieria Civil', '4 años', 58, 195, 2),
-(3, 'ARQ2013', 'Arquitectura', '4 años', 54, 179, 1),
-(4, 'IIT2013', 'Ingenieria en Infotecnologia', '4 años', 61, 219, 3),
-(5, 'INGC2013', 'Ingenieria Civil', '4 años', 58, 195, 2),
-(6, 'ARQ2013', 'Arquitectura', '4 años', 54, 179, 1);
+(1, 'IIT2013', 'Ingenieria en Infotecnologia', '4 anos', 61, 219, 3),
+(2, 'INGC2013', 'Ingenieria Civil', '4 anos', 58, 195, 2),
+(3, 'ARQ2013', 'Arquitectura', '4 anos', 54, 179, 1);

 -- --------------------------------------------------------

@@ -475,8 +479,8 @@ CREATE TABLE IF NOT EXISTS `programacion_cursos` (
 --

 INSERT INTO `programacion_cursos` (`id_programacion`, `codigo_prog_curso`, `id_periodo`, `codigo_curso`, `seccion`, `hora_inicio`, `hora_termina`, `dias`, `id_empleado`, `id_aula`, `estatus_curso`) VALUES
-(1, 'PROG1', 1, '1', 'A', '6:50', '7:40', 'L-Mi-V', 1, 1, 'Activo'),
-(2, 'PROG2', 1, '2', 'A', '15:50', '7:40', 'Ma-J', 2, 4, 'Activo');
+(1, 'PROG1', 1, '1', 'A', '15:50', '17:40', 'L-Mi-V', 6, 1, 'Activo'),
+(2, 'PROG2', 1, '2', 'A', '12:50', '14:40', 'Ma-J', 5, 4, 'Activo');

 -- --------------------------------------------------------

@@ -489,7 +493,7 @@ CREATE TABLE IF NOT EXISTS `puestos` (
   `codigo_puesto` varchar(10) NOT NULL,
   `descripcion` varchar(45) DEFAULT NULL,
   PRIMARY KEY (`id_puesto`,`codigo_puesto`)
-) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;
+) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

 --
 -- Volcado de datos para la tabla `puestos`
@@ -501,11 +505,7 @@ INSERT INTO `puestos` (`id_puesto`, `codigo_puesto`, `descripcion`) VALUES
 (3, 'coordf', 'Coordinador de facultad'),
 (4, 'admin', 'Administrador de Sistema'),
 (5, 'enm', 'Encargado de Matrícula'),
-(6, 'cont', 'Encargado de Contabilidad'),
-(7, 'doc', 'docente'),
-(8, 'coordc', 'Coordinador de carrera'),
-(9, 'coordf', 'Coordinador de facultad'),
-(10, 'admin', 'Administrador de Sistema');
+(6, 'cont', 'Encargado de Contabilidad');

 -- --------------------------------------------------------

@@ -572,20 +572,22 @@ CREATE TABLE IF NOT EXISTS `usuarios` (
   `nombre_usuario` varchar(45) NOT NULL,
   `contrasena` varchar(45) NOT NULL,
   `tipo_usuario` int(11) NOT NULL,
+  `num_cuenta` int(11) NOT NULL,
   PRIMARY KEY (`id_usuario`),
-  KEY `fk_usuarios_tipos_usuarios_idx` (`tipo_usuario`)
+  KEY `fk_usuarios_tipos_usuarios_idx` (`tipo_usuario`),
+  KEY `fk_usuarios_empleados_idx` (`num_cuenta`)
 ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

 --
 -- Volcado de datos para la tabla `usuarios`
 --

-INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `nombre_usuario`, `contrasena`, `tipo_usuario`) VALUES
-(1, 'Marco', 'Diaz', 'marco.diaz', 'chilo123', 1),
-(2, 'Jeiky', 'Tovar', 'jeiky.tovar', 'chilo123', 2),
-(3, 'Ricardo', 'Valladares', 'ricardo.valladares', 'chilo123', 3),
-(4, 'Karen', 'Estrada', 'karen.estrada', 'chilo123', 4),
-(5, 'Juan', 'Reyes', 'juan.reyes', 'chilo123', 5);
+INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `nombre_usuario`, `contrasena`, `tipo_usuario`, `num_cuenta`) VALUES
+(1, 'Marco', 'Diaz', 'marco.diaz', 'chilo123', 1, 20150005),
+(2, 'Jeiky', 'Tovar', 'jeiky.tovar', 'chilo123', 2, 20150006),
+(3, 'Ricardo', 'Valladares', 'ricardo.valladares', 'chilo123', 3, 201500001),
+(4, 'Karen', 'Estrada', 'karen.estrada', 'chilo123', 4, 20150007),
+(5, 'Juan', 'Reyes', 'juan.reyes', 'chilo123', 5, 20150008);

 --
 -- Restricciones para tablas volcadas
@@ -691,8 +693,8 @@ ALTER TABLE `planes_estudio`
 -- Filtros para la tabla `prematriculas`
 --
 ALTER TABLE `prematriculas`
-  ADD CONSTRAINT `fk_prematriculas_programacion` FOREIGN KEY (`id_programacion`) REFERENCES `programacion_cursos` (`id_programacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
-  ADD CONSTRAINT `fk_prematricula_estudiantes` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;
+  ADD CONSTRAINT `fk_prematricula_estudiantes` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
+  ADD CONSTRAINT `fk_prematriculas_programacion` FOREIGN KEY (`id_programacion`) REFERENCES `programacion_cursos` (`id_programacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

 --
 -- Filtros para la tabla `programacion_cursos`
