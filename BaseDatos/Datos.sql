/*

Datos provicionales para las tablas que se necesitan llenar antes
de comenzar a llenar las demás.

*/

/***********/
/* PUESTOS */
/***********/


INSERT INTO `matricula`.`puestos`
(`codigo_puesto`,
`descripcion`)
VALUES
('doc',
"docente");

INSERT INTO `matricula`.`puestos`
(`codigo_puesto`,
`descripcion`)
VALUES
('coordc',
'Coordinador de carrera');

INSERT INTO `matricula`.`puestos`
(`codigo_puesto`,
`descripcion`)
VALUES
('coordf',
'Coordinador de facultad');

INSERT INTO `matricula`.`puestos`
(`codigo_puesto`,
`descripcion`)
VALUES
('admin',
'Administrador de Sistema');

/*************/
/* EMPLEADOS */
/*************/

INSERT INTO `matricula`.`empleados`
(`codigo_empleado`,
`nombres`,
`apellidos`,
`genero`,
`telefono`,
`email`,
`codigo_carrera`,
`id_puesto`)
VALUES
('BM01',
"Belinda",
"Marder",
"F",
33344334,
"beli_mar@gmail.com",
'FFIA',
3);

INSERT INTO `matricula`.`empleados`
(`codigo_empleado`,
`nombres`,
`apellidos`,
`genero`,
`telefono`,
`email`,
`codigo_carrera`,
`id_puesto`)
VALUES
('LER01',
"Lidia Erminda",
"Rodriguez",
"F",
98998998,
"li_er@gmail.com",
'ALL',
3);

INSERT INTO `matricula`.`empleados`
(`codigo_empleado`,
`nombres`,
`apellidos`,
`genero`,
`telefono`,
`email`,
`codigo_carrera`,
`id_puesto`)
VALUES
('LER01',
"Arquitecto",
"Mejia",
"M",
36363636,
"arme@gmail.com",
'ARQ',
2);

INSERT INTO `matricula`.`empleados`
(`codigo_empleado`,
`nombres`,
`apellidos`,
`genero`,
`telefono`,
`email`,
`codigo_carrera`,
`id_puesto`)
VALUES
('IM01',
"Ingeniero",
"Martínez",
"M",
34343434,
"ingma@gmail.com",
'INGC',
2);

INSERT INTO `matricula`.`empleados`
(`codigo_empleado`,
`nombres`,
`apellidos`,
`genero`,
`telefono`,
`email`,
`codigo_carrera`,
`id_puesto`)
VALUES
('LER01',
"Marco Antonio",
"Díaz",
"M",
93939393,
"maan@gmail.com",
'IT',
2);

/**************/
/* FACULTADES */
/**************/

INSERT INTO `matricula`.`facultades`
(`codigo_facultad`,
`nombre_facultad`,
`codigo_empleado`,
`id_puesto`)
VALUES
('FIA',
'Facultad de Ingenierías y Arquitectura',
1,
3);

INSERT INTO `matricula`.`facultades`
(`codigo_facultad`,
`nombre_facultad`,
`codigo_empleado`,
`id_puesto`)
VALUES
('FCE',
'Facultad de Ciencias Económicas',
2,
3);

/************/
/* CARRERAS */
/************/

INSERT INTO `matricula`.`carreras`
(`codigo_carrera`,
`nombre_carrera`,
`id_facultad`,
`codigo_empleado`,
`id_puesto`)
VALUES
('ARQ',
'Arquitectura',
1,
3,
2);

INSERT INTO `matricula`.`carreras`
(`codigo_carrera`,
`nombre_carrera`,
`id_facultad`,
`codigo_empleado`,
`id_puesto`)
VALUES
('INGC',
'Ingeniería Civil',
1,
4,
2);

INSERT INTO `matricula`.`carreras`
(`codigo_carrera`,
`nombre_carrera`,
`id_facultad`,
`codigo_empleado`,
`id_puesto`)
VALUES
('IIT',
'Ingeniería en Infotecnología',
1,
5,
2);

/*********************/
/* PLANES DE ESTUDIO */
/*********************/

INSERT INTO `matricula`.`planes_estudio`
(`codigo_plan`,
`nombre_plan`,
`duracion`,
`cantidad_cursos`,
`total_uv`,
`id_carrera`)
VALUES
('IIT2013',
'Ingeniería en Infotecnología',
'4 años',
61,
219,
3);

INSERT INTO `matricula`.`planes_estudio`
(`codigo_plan`,
`nombre_plan`,
`duracion`,
`cantidad_cursos`,
`total_uv`,
`id_carrera`)
VALUES
('INGC2013',
'Ingeniería Civil',
'4 años',
58,
195,
2);

INSERT INTO `matricula`.`planes_estudio`
(`codigo_plan`,
`nombre_plan`,
`duracion`,
`cantidad_cursos`,
`total_uv`,
`id_carrera`)
VALUES
('ARQ2013',
'Arquitectura',
'4 años',
54,
179,
1);

/**********/
/* CURSOS */
/**********/

INSERT INTO `matricula`.`cursos`
(`codigo_curso`,
`nombre_curso`,
`uv`,
`horas_practicas`,
`horas_teoricas`,
`laboratorio`,
`id_plan_estudio`,
`periodo`)
VALUES
('IIT4011',
'Seguridad de la Información',
4,
0,
4,
0,
1,
10);

INSERT INTO `matricula`.`cursos`
(`codigo_curso`,
`nombre_curso`,
`uv`,
`horas_practicas`,
`horas_teoricas`,
`laboratorio`,
`id_plan_estudio`,
`periodo`)
VALUES
('IIT3032',
'Ingeniería de Software I',
3,
0,
3,
0,
1,
9);

INSERT INTO `matricula`.`cursos`
(`codigo_curso`,
`nombre_curso`,
`uv`,
`horas_practicas`,
`horas_teoricas`,
`laboratorio`,
`id_plan_estudio`,
`periodo`)
VALUES
('IIT4012',
'Ingeniería de Software II',
3,
0,
3,
0,
1,
10);

