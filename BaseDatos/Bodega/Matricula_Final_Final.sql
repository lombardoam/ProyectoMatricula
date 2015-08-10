-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: matricula
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aulas`
--

DROP TABLE IF EXISTS `aulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aulas` (
  `id_aula` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_aula` varchar(10) NOT NULL,
  `id_edificio` int(11) DEFAULT NULL,
  `num_aula` varchar(5) DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `data_show` tinyint(1) DEFAULT NULL,
  `pizarra_electronica` tinyint(1) DEFAULT NULL,
  `camara_video` tinyint(1) DEFAULT NULL,
  `audio` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_aula`,`codigo_aula`),
  KEY `codigo_edificio_idx` (`id_edificio`),
  CONSTRAINT `fk_aulas_edificios` FOREIGN KEY (`id_edificio`) REFERENCES `edificios` (`id_edificio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aulas`
--

LOCK TABLES `aulas` WRITE;
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` VALUES (1,'101',2,'101',30,1,1,1,1),(2,'102',2,'102',30,1,1,1,1),(3,'103',2,'103',30,1,1,1,1),(4,'200',2,'200',40,1,1,1,1),(5,'201',2,'201',30,1,1,1,1),(6,'203',2,'203',30,1,1,1,1),(7,'201A',1,'201',10,0,0,0,0),(8,'202A',1,'202',10,0,0,0,0),(9,'203A',1,'203',10,0,0,0,0);
/*!40000 ALTER TABLE `aulas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carreras`
--

DROP TABLE IF EXISTS `carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_carrera` varchar(10) NOT NULL,
  `nombre_carrera` varchar(45) DEFAULT NULL,
  `id_facultad` int(11) DEFAULT NULL,
  `codigo_empleado` varchar(10) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_carrera`,`codigo_carrera`),
  KEY `codigo_facultad_idx` (`id_facultad`),
  KEY `fk_carreras_puestos_idx` (`id_empleado`),
  CONSTRAINT `fk_carreras_puestos` FOREIGN KEY (`id_empleado`) REFERENCES `puestos` (`id_puesto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carreras_facultades` FOREIGN KEY (`id_facultad`) REFERENCES `facultades` (`id_facultad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carreras`
--

LOCK TABLES `carreras` WRITE;
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
INSERT INTO `carreras` VALUES (1,'ARQ','Arquitectura',1,'LER01',2),(2,'INGC','Ingenieria Civil',1,'IM01',2),(3,'IIT','Ingenieria en Infotecnologia',1,'LER03',2);
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuraciones`
--

DROP TABLE IF EXISTS `configuraciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuraciones` (
  `id_configuracion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_evaluacion` int(11) DEFAULT NULL,
  `id_programacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_configuracion`),
  KEY `codigo_prog_curso_idx` (`id_programacion`),
  KEY `fk_configuracioens_tipos_evaluaciones_idx` (`tipo_evaluacion`),
  CONSTRAINT `fk_configuracioens_tipos_evaluaciones` FOREIGN KEY (`tipo_evaluacion`) REFERENCES `tipos_evaluacioens` (`tipo_evaluacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_configuraciones_programacion_cursos` FOREIGN KEY (`id_programacion`) REFERENCES `programacion_cursos` (`id_programacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuraciones`
--

LOCK TABLES `configuraciones` WRITE;
/*!40000 ALTER TABLE `configuraciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `configuraciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenido_cursos`
--

DROP TABLE IF EXISTS `contenido_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenido_cursos` (
  `id_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_contenido` varchar(10) NOT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `tema` varchar(60) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_contenido`,`codigo_contenido`),
  KEY `codigo_curso_idx` (`id_curso`),
  CONSTRAINT `fk_contenido_cursos` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenido_cursos`
--

LOCK TABLES `contenido_cursos` WRITE;
/*!40000 ALTER TABLE `contenido_cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenido_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `control_cursos`
--

DROP TABLE IF EXISTS `control_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `control_cursos` (
  `id_control` int(11) NOT NULL AUTO_INCREMENT,
  `id_programacion` int(11) DEFAULT NULL,
  `prematriculados` int(11) DEFAULT NULL,
  `matriculados` int(11) DEFAULT NULL,
  `aprobados` int(11) DEFAULT NULL,
  `reprobados` int(11) DEFAULT NULL,
  `retirados` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_control`),
  KEY `codigo_prog_curso_idx` (`id_programacion`),
  CONSTRAINT `fk_control_cursos_programacion` FOREIGN KEY (`id_programacion`) REFERENCES `programacion_cursos` (`id_programacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `control_cursos`
--

LOCK TABLES `control_cursos` WRITE;
/*!40000 ALTER TABLE `control_cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `control_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuotas_estudiante`
--

DROP TABLE IF EXISTS `cuotas_estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuotas_estudiante` (
  `id_cuotas` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_cuenta` varchar(45) NOT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `num_factura` int(11) DEFAULT NULL,
  `fecha_factura` timestamp NULL DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `monto_pago` double DEFAULT NULL,
  PRIMARY KEY (`id_cuotas`,`codigo_cuenta`),
  KEY `num_cuenta_idx` (`id_estudiante`),
  KEY `codigo_periodo_idx` (`id_periodo`),
  CONSTRAINT `fk_cuotas_estudiantes` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cuotas_periodos` FOREIGN KEY (`id_periodo`) REFERENCES `periodos_academicos` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuotas_estudiante`
--

LOCK TABLES `cuotas_estudiante` WRITE;
/*!40000 ALTER TABLE `cuotas_estudiante` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuotas_estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_curso` varchar(10) NOT NULL,
  `nombre_curso` varchar(45) DEFAULT NULL,
  `uv` int(11) DEFAULT NULL,
  `horas_practicas` int(11) DEFAULT NULL,
  `horas_teoricas` int(11) DEFAULT NULL,
  `laboratorio` tinyint(1) DEFAULT NULL,
  `id_plan_estudio` int(11) NOT NULL,
  `periodo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_curso`,`codigo_curso`),
  KEY `codigo_plan_idx` (`id_plan_estudio`),
  CONSTRAINT `fk_cursos_plan` FOREIGN KEY (`id_plan_estudio`) REFERENCES `planes_estudio` (`id_plan_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'IIT4011','Seguridad de la Informacion',4,0,4,0,1,10),(2,'IIT3032','Ingenieria de Software I',3,0,3,0,1,9),(3,'IIT4012','Ingenieria de Software II',3,0,3,0,1,10),(4,'IIT4010','DiseÃ±o Web',3,50,10,1,1,9);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edificios`
--

DROP TABLE IF EXISTS `edificios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edificios` (
  `id_edificio` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_edificio` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `pisos` int(11) DEFAULT NULL,
  `cantidad_aulas` int(11) DEFAULT NULL,
  `cantidad_laboratorios` int(11) DEFAULT NULL,
  `cantidad_auditorios` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_edificio`,`codigo_edificio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edificios`
--

LOCK TABLES `edificios` WRITE;
/*!40000 ALTER TABLE `edificios` DISABLE KEYS */;
INSERT INTO `edificios` VALUES (1,'EDF1','Administrativo',3,9,4,0),(2,'EDF2','Academico',7,17,0,6);
/*!40000 ALTER TABLE `edificios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_empleado` varchar(10) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `codigo_carrera` varchar(10) DEFAULT NULL,
  `id_puesto` int(11) DEFAULT NULL,
  `num_cuenta` int(11) NOT NULL,
  PRIMARY KEY (`id_empleado`,`codigo_empleado`,`num_cuenta`),
  KEY `codigo_puesto_idx` (`id_puesto`),
  KEY `codigo_carrera_idx` (`codigo_carrera`),
  CONSTRAINT `fk_empleados_puestos` FOREIGN KEY (`id_puesto`) REFERENCES `puestos` (`id_puesto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'BM01','Belinda','Marder','F',33344334,'beli_mar@gmail.com','ARQ',3,20150001),(2,'LER01','Lidia Erminda','Rodriguez','F',98998998,'li_er@gmail.com','ARQ',3,20150002),(3,'LER02','Arquitecto','Mejia','M',36363636,'arme@gmail.com','ARQ',2,20150003),(4,'IM01','Ingeniero','Martinez','M',34343434,'ingma@gmail.com','INGC',2,20150004),(5,'LER03','Marco Antonio','Diaz','M',93939393,'maan@gmail.com','IIT',2,20150005),(6,'JT','Jeiky','Tovar','M',92932939,'jt@gmail.com','IIT',1,20150006),(7,'JK','Jeiky','Tobar','M',92292929,'jk@gmail.com','IIT',1,20150006),(8,'KE','Karen','Estrada','F',12312312,'kestrada@gmail.com','INGC',5,20150007),(9,'JR','Juan','Reyes','M',23232312,'jreyes@gmail.com','IIT',6,20150008),(10,'KE2','Karen','Estrada','F',21312312,'kestrada@gmail.com','INGC',5,20150007),(12,'PG1','Pedro','Gallardo','M',23654789,'pg@gmail.com','INGC',1,0);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equivalencias`
--

DROP TABLE IF EXISTS `equivalencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equivalencias` (
  `id_interna` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_eq` varchar(10) NOT NULL,
  `nombre_universidad` varchar(45) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `codigo_clase_equivalencia` varchar(10) DEFAULT NULL,
  `num_cuenta` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `comentarios` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_interna`,`codigo_eq`),
  KEY `codigo_curso_idx` (`id_curso`),
  KEY `codigo_tipo_eq_idx` (`id_tipo`),
  CONSTRAINT `fk_equivalencias_cursos` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_equivalencias_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_equivalencias` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equivalencias`
--

LOCK TABLES `equivalencias` WRITE;
/*!40000 ALTER TABLE `equivalencias` DISABLE KEYS */;
INSERT INTO `equivalencias` VALUES (1,'EQ1','UNAH',1,'INS4026',20132013,2,'85%'),(2,'EQ2','UNICAH',2,'INS2013',20142098,2,'73%'),(3,'EQ3','UJCV',1,'IS23014',20103540,1,'87%');
/*!40000 ALTER TABLE `equivalencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
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
  `saldo` double DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`,`num_cuenta`),
  KEY `codigo_carrera_idx` (`id_carrera`),
  CONSTRAINT `fk_estudiantes_carreras` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,201500001,'Ricardo','Valladares','Reingreso','Tegucigalpa','1994-08-18','Soltero','Col. La Joya',23232323,'No',0,'0000-00-00 00:00:00',3,4000),(2,2015302145,'MarÃ­a','Celeste','Primer ingreso','San Pedro Sula','1991-09-25','Casada','Col. CalpÃºles',545451515,'Mall Multiplaza',5151515,'2015-08-02 06:00:00',1,3000),(3,20011025,'Juan Ãngel','Reyes','Reingreso','Tegucigalpa','1982-11-18','Soltero','Col. Miramontes',7513648,'',0,'2013-01-05 06:00:00',3,0),(4,20153001,'Laura','Calcagnini','Primer ingreso','La Ceiba','1997-03-17','Soltera','Miraflores',855151,'',0,'2015-08-03 06:00:00',2,4000),(5,20153002,'Katherine','MÃ¡rquez','Primer ingreso','Tegucigalpa','1991-09-23','Soltera','El Hatillo',22336655,'',0,'2013-01-15 06:00:00',3,1000);
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluaciones`
--

DROP TABLE IF EXISTS `evaluaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluaciones` (
  `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_configuracion` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `id_parcial` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_evaluacion`),
  KEY `id_configuracion_idx` (`id_configuracion`),
  KEY `id_parcial_idx` (`id_parcial`),
  CONSTRAINT `fk_evaluaciones_configuraciones` FOREIGN KEY (`id_configuracion`) REFERENCES `configuraciones` (`id_configuracion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_evaluaciones_parciales` FOREIGN KEY (`id_parcial`) REFERENCES `parciales` (`id_parcial`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluaciones`
--

LOCK TABLES `evaluaciones` WRITE;
/*!40000 ALTER TABLE `evaluaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultades`
--

DROP TABLE IF EXISTS `facultades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facultades` (
  `id_facultad` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_facultad` varchar(10) NOT NULL,
  `nombre_facultad` varchar(45) DEFAULT NULL,
  `codigo_empleado` varchar(10) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_facultad`,`codigo_facultad`),
  KEY `codigo_empleado_idx` (`codigo_empleado`),
  KEY `fk_facultades_puestos_idx` (`id_empleado`),
  CONSTRAINT `fk_facultades_puestos` FOREIGN KEY (`id_empleado`) REFERENCES `puestos` (`id_puesto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultades`
--

LOCK TABLES `facultades` WRITE;
/*!40000 ALTER TABLE `facultades` DISABLE KEYS */;
INSERT INTO `facultades` VALUES (1,'FIA','Facultad de Ingenierias y Arquitectura','1',3),(2,'FCE','Facultad de Ciencias Economicas','2',3);
/*!40000 ALTER TABLE `facultades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historiales_academicos`
--

DROP TABLE IF EXISTS `historiales_academicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historiales_academicos` (
  `id_historial` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_historial` varchar(10) NOT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_evaluacion` int(11) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_historial`,`codigo_historial`),
  KEY `num_cuenta_idx` (`id_estudiante`),
  KEY `id_evaluacion_idx` (`id_evaluacion`),
  CONSTRAINT `fk_historiales_academicos_estudiantes` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_historiales_academicos_evaluaciones` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluaciones` (`id_evaluacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historiales_academicos`
--

LOCK TABLES `historiales_academicos` WRITE;
/*!40000 ALTER TABLE `historiales_academicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `historiales_academicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matriculas` (
  `id_matricula` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_programacion` int(11) DEFAULT NULL,
  `tipo_matricula` varchar(20) DEFAULT NULL,
  `estatus_curso` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_matricula`),
  KEY `num_cuenta_idx` (`id_estudiante`),
  KEY `codigo_curso_idx` (`id_programacion`),
  CONSTRAINT `fk_matriculas_estudiantes` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_matriculas_programacion` FOREIGN KEY (`id_programacion`) REFERENCES `programacion_cursos` (`id_programacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parciales`
--

DROP TABLE IF EXISTS `parciales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parciales` (
  `id_parcial` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_parcial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parciales`
--

LOCK TABLES `parciales` WRITE;
/*!40000 ALTER TABLE `parciales` DISABLE KEYS */;
/*!40000 ALTER TABLE `parciales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos_academicos`
--

DROP TABLE IF EXISTS `periodos_academicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodos_academicos` (
  `id_periodo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_periodo` varchar(10) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_terminacion` date DEFAULT NULL,
  PRIMARY KEY (`id_periodo`,`codigo_periodo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos_academicos`
--

LOCK TABLES `periodos_academicos` WRITE;
/*!40000 ALTER TABLE `periodos_academicos` DISABLE KEYS */;
INSERT INTO `periodos_academicos` VALUES (1,'III-2015','2015-09-08','2015-12-14');
/*!40000 ALTER TABLE `periodos_academicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planes_estudio`
--

DROP TABLE IF EXISTS `planes_estudio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planes_estudio` (
  `id_plan_estudio` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_plan` varchar(10) NOT NULL,
  `nombre_plan` varchar(45) DEFAULT NULL,
  `duracion` varchar(10) DEFAULT NULL,
  `cantidad_cursos` int(11) DEFAULT NULL,
  `total_uv` int(11) DEFAULT NULL,
  `id_carrera` int(11) NOT NULL,
  PRIMARY KEY (`id_plan_estudio`,`codigo_plan`),
  KEY `codigo_carrera_idx` (`id_carrera`),
  CONSTRAINT `fk_planes_carreras` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planes_estudio`
--

LOCK TABLES `planes_estudio` WRITE;
/*!40000 ALTER TABLE `planes_estudio` DISABLE KEYS */;
INSERT INTO `planes_estudio` VALUES (1,'IIT2013','Ingenieria en Infotecnologia','4 anos',61,219,3),(2,'INGC2013','Ingenieria Civil','4 anos',58,195,2),(3,'ARQ2013','Arquitectura','4 anos',54,179,1);
/*!40000 ALTER TABLE `planes_estudio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prematriculas`
--

DROP TABLE IF EXISTS `prematriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prematriculas` (
  `id_prematricula` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_programacion` int(11) DEFAULT NULL,
  `estatus_curso` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_prematricula`),
  KEY `num_cuenta_idx` (`id_estudiante`),
  KEY `codigo_curso_idx` (`id_programacion`),
  CONSTRAINT `fk_prematriculas_programacion` FOREIGN KEY (`id_programacion`) REFERENCES `programacion_cursos` (`id_programacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_prematricula_estudiantes` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prematriculas`
--

LOCK TABLES `prematriculas` WRITE;
/*!40000 ALTER TABLE `prematriculas` DISABLE KEYS */;
/*!40000 ALTER TABLE `prematriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programacion_cursos`
--

DROP TABLE IF EXISTS `programacion_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programacion_cursos` (
  `id_programacion` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_prog_curso` varchar(10) NOT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `id_curso` int(11) NOT NULL,
  `seccion` char(1) DEFAULT NULL,
  `hora_inicio` varchar(5) DEFAULT NULL,
  `hora_termina` varchar(5) DEFAULT NULL,
  `dias` varchar(45) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `id_aula` int(11) DEFAULT NULL,
  `estatus_curso` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_programacion`,`codigo_prog_curso`),
  KEY `codigo_aula_idx` (`id_aula`),
  KEY `codigo_curso_idx` (`id_curso`),
  KEY `codigo_periodo_idx` (`id_periodo`),
  KEY `codigo_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_programacion_cursos` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_programacion_aulas` FOREIGN KEY (`id_aula`) REFERENCES `aulas` (`id_aula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_programacion_empleados` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_programacion_periodos` FOREIGN KEY (`id_periodo`) REFERENCES `periodos_academicos` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programacion_cursos`
--

LOCK TABLES `programacion_cursos` WRITE;
/*!40000 ALTER TABLE `programacion_cursos` DISABLE KEYS */;
INSERT INTO `programacion_cursos` VALUES (1,'PROG1',1,1,'A','15:50','17:40','L-Mi-V',6,1,'Activo'),(2,'PROG2',1,2,'A','12:50','14:40','Ma-J',5,4,'Activo');
/*!40000 ALTER TABLE `programacion_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puestos`
--

DROP TABLE IF EXISTS `puestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puestos` (
  `id_puesto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_puesto` varchar(10) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_puesto`,`codigo_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puestos`
--

LOCK TABLES `puestos` WRITE;
/*!40000 ALTER TABLE `puestos` DISABLE KEYS */;
INSERT INTO `puestos` VALUES (1,'doc','docente'),(2,'coordc','Coordinador de carrera'),(3,'coordf','Coordinador de facultad'),(4,'admin','Administrador de Sistema'),(5,'enm','Encargado de Matr'),(6,'cont','Encargado de Contabilidad');
/*!40000 ALTER TABLE `puestos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requisitos_curso`
--

DROP TABLE IF EXISTS `requisitos_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requisitos_curso` (
  `id_requisito` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_requisito` varchar(10) NOT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `codigo_curso_requisito` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_requisito`,`codigo_requisito`),
  KEY `codigo_curso_idx` (`id_curso`),
  CONSTRAINT `fk_cursos_requisitos` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requisitos_curso`
--

LOCK TABLES `requisitos_curso` WRITE;
/*!40000 ALTER TABLE `requisitos_curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `requisitos_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_equivalencias`
--

DROP TABLE IF EXISTS `tipo_equivalencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_equivalencias` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_tipo_eq` varchar(10) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`,`codigo_tipo_eq`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_equivalencias`
--

LOCK TABLES `tipo_equivalencias` WRITE;
/*!40000 ALTER TABLE `tipo_equivalencias` DISABLE KEYS */;
INSERT INTO `tipo_equivalencias` VALUES (1,'TEQ1','Interna'),(2,'TEQ2','Externa');
/*!40000 ALTER TABLE `tipo_equivalencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_evaluacioens`
--

DROP TABLE IF EXISTS `tipos_evaluacioens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_evaluacioens` (
  `tipo_evaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`tipo_evaluacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_evaluacioens`
--

LOCK TABLES `tipos_evaluacioens` WRITE;
/*!40000 ALTER TABLE `tipos_evaluacioens` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_evaluacioens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_usuarios`
--

DROP TABLE IF EXISTS `tipos_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_usuarios` (
  `tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_usuarios`
--

LOCK TABLES `tipos_usuarios` WRITE;
/*!40000 ALTER TABLE `tipos_usuarios` DISABLE KEYS */;
INSERT INTO `tipos_usuarios` VALUES (1,'Administrador','Gestiona las caracter'),(2,'Docente','Accesa a la interfaz de docentes'),(3,'Alumno','Accesa a la interfaz de alumnos'),(4,'Encargado','Gestiona las caracteristicas de la matricula'),(5,'Contador','Gestiona la interfaz de contabilidad');
/*!40000 ALTER TABLE `tipos_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `num_cuenta` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_usuarios_tipos_usuarios_idx` (`tipo_usuario`),
  KEY `fk_usuarios_empleados_idx` (`num_cuenta`),
  CONSTRAINT `fk_usuarios_tipos_usuarios` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipos_usuarios` (`tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Marco','Diaz','marco.diaz','chilo123',1,20150005),(2,'Jeiky','Tovar','jeiky.tovar','chilo123',2,20150006),(3,'Ricardo','Valladares','ricardo.valladares','chilo123',3,201500001),(4,'Karen','Estrada','karen.estrada','chilo123',4,20150007),(5,'Juan','Reyes','juan.reyes','chilo123',5,20150008);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-02 22:54:14
