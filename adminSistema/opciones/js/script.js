$(document).ready(function () {

    //Texto de localizacion
    var Spanishmessages = {
    serverCommunicationError: 'Ha ocurrido un error mientras se trataba de comunicar con el servidor.',
    loadingMessage: 'Cargando Registros...',
    noDataAvailable: 'Ningun dato disponible!',
    addNewRecord: 'Insertar nuevo registro',
    editRecord: 'Editar Registro',
    areYouSure: '¿Estas seguro?',
    deleteConfirmation: 'Este registro será borrado. ¿Estas seguro?',
    save: 'Guadar',
    saving: 'Guardando',
    cancel: 'Cancelar',
    deleteText: 'Borrar',
    deleting: 'Borrando',
    error: 'Error',
    close: 'Cerrar',
    cannotLoadOptionsFor: 'No se puede cargar las opciones para el campo {0}',
    pagingInfo: 'Mostrando {0}-{1} de {2}',
    pageSizeChangeLabel: 'Contador de filas',
    gotoPageLabel: 'Ir a la pagina',
    canNotDeletedRecords: 'No se pudo borrar {0} de {1} registros!',
    deleteProggress: 'Borrado {0} de {1} registros, procesando...'
}

    $('#PersonTableContainer').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Facultades',
            paging: true,
            sorting: true,
            defaultSorting: 'Name ASC',
            actions: {
                listAction: 'php/listar/listarfacultades.php',
                createAction: 'php/ingresar/ingresarfacultades.php',
                updateAction: 'php/editar/editarfacultades.php',
                deleteAction: 'php/eliminar/eliminarfacultades.php',
            },
            fields: {
                id_facultad: {
                    key: true,
                    list: false
                },

                codigo_facultad: {
                    title: 'Código',
                    width: '5%'
                },

                nombre_facultad: {
                    title: 'Nombre de la Facultad',
                    width: '10%'
                },

                id_empleado: {
                    title: 'Decano',
                    options: '../opciones/php/options/option1.php',
                    width: '8%'
                },

            }
        });

     //Re-load records when user click 'load records' button.
        $('#LoadRecordsButton').click(function (e) {
            e.preventDefault();
        $('#PersonTableContainer').jtable('load', {
                nombre: $('#nombre').val(),
            });
        });

        //Load all records when page is first shown
        $('#LoadRecordsButton').click();

    $('#PersonTableContainer1').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Carreras',
            paging: true,
            actions: {
                listAction: 'php/listar/listarcarreras.php',
                createAction: 'php/ingresar/ingresarcarreras.php',
                updateAction: 'php/editar/editarcarreras.php',
                deleteAction: 'php/eliminar/eliminarcarreras.php',
            },
            fields: {
                id_carrera: {
                    key: true,
                    list: false
                },

                codigo_carrera: {
                    title: 'Código',
                    width: '5%'

                },

                nombre_carrera: {
                    title: 'Nombre',
                    width: '12%'

                },

                id_facultad: {
                    title: 'Facultad',
                    options: '../opciones/php/options/option2.php',
                    width: '12%'
                },

               id_empleado: {
                    title: 'Coordinador',
                   options: '../opciones/php/options/option3.php',
                    width: '10%'
                },



            }
        });

    //Re-load records when user click 'load records' button.
        $('#LoadRecordsButton').click(function (e) {
            e.preventDefault();
        $('#PersonTableContainer1').jtable('load', {
                nombre: $('#nombre').val(),
                facultad: $('#facultad').val(),
            });
        });

        //Load all records when page is first shown
        $('#LoadRecordsButton').click();



    $('#PersonTableContainer2').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Asignaturas',
            paging: true,
            actions: {
                listAction: 'php/listar/listarasignaturas.php',
                createAction: 'php/ingresar/ingresarasignaturas.php',
                updateAction: 'php/editar/editarasignaturas.php',
                deleteAction: 'php/eliminar/eliminarasignaturas.php',
            },
            fields: {
                id_curso: {
                    key: true,
                    list: false
                },

                codigo_curso: {
                    title: 'Código',
                    width: '5%'
                },

                nombre_curso: {
                    title: 'Nombre',
                    width: '10%'
                },

                uv: {
                    title: 'UV',
                    width: '5%'
                },

                 horas_practicas: {
                    title: 'Horas Prácticas',
                    width: '5%'
                },

                 horas_teoricas: {
                    title: 'Horas Teóricas',
                    width: '5%'
                },

                laboratorio: {
                    title: 'Laboratorio',
                    width: '5%'
                },

                id_plan_estudio: {
                    title: 'Plan de Estudio',
                    options: '../opciones/php/options/option4.php',
                    width: '18%'
                },

                 periodo: {
                    title: 'Periodo',
                    width: '5%'
                },

            }
        });

    //Re-load records when user click 'load records' button.
        $('#LoadRecordsButton').click(function (e) {
            e.preventDefault();
        $('#PersonTableContainer2').jtable('load', {
                nombre: $('#nombre').val(),
                plan: $('#plan').val(),
            });
        });

        //Load all records when page is first shown
        $('#LoadRecordsButton').click();

    $('#PersonTableContainer3').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Períodos Académicos',
            paging: true,
            actions: {
                listAction: 'php/listar/listarperiodos.php',
                createAction: 'php/ingresar/ingresarperiodos.php',
                updateAction: 'php/editar/editarperiodos.php',
                deleteAction: 'php/eliminar/eliminarperiodos.php',
            },
            fields: {
                id_periodo: {
                    key: true,
                    list: false
                },

                codigo_periodo: {
                    title: 'Código',
                    width: '10%'
                },

                fecha_inicio: {
                    title: 'Fecha de Inicio',
                    type: 'date',
                    width: '10%'
                },

                fecha_terminacion: {
                    title: 'Fecha de Terminación',
                    type: 'date',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer3').jtable('load');

    $('#PersonTableContainer4').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Edificios',
            paging: true,
            actions: {
                listAction: 'php/listar/listaredificios.php',
                createAction: 'php/ingresar/ingresaredificios.php',
                updateAction: 'php/editar/editaredificios.php',
                deleteAction: 'php/eliminar/eliminaredificios.php',
            },
            fields: {
                id_edificio: {
                    key: true,
                    list: false
                },

                codigo_edificio: {
                    title: 'Código',
                    width: '5%'
                },

                nombre: {
                    title: 'Nombre',
                    width: '15%'
                },

                pisos: {
                    title: 'Cantidad de Pisos',
                    width: '10%'
                },

                cantidad_aulas: {
                    title: 'Cantidad de Aulas',
                    width: '10%'
                },

                cantidad_laboratorios: {
                    title: 'Cantidad de Laboratorios',
                    width: '10%'
                },

                cantidad_auditorios: {
                    title: 'Cantidad de Auditorios',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer4').jtable('load');

    $('#PersonTableContainer5').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Aulas',
            actions: {
                listAction: 'php/listar/listarsalones.php',
                createAction: 'php/ingresar/ingresarsalones.php',
                updateAction: 'php/editar/editarsalones.php',
                deleteAction: 'php/eliminar/eliminarsalones.php',
            },
            fields: {
                id_aula: {
                    key: true,
                    list: false
                },

                codigo_aula: {
                    title: 'Codigo',
                    width: '10%'
                },

                id_edificio: {
                    title: 'Edificio',
                    options: '../opciones/php/options/option5.php',
                    width: '10%'
                },

                num_aula: {
                    title: 'Numero de Aula',
                    width: '10%'
                },

                capacidad: {
                    title: 'Capacidad',
                    width: '10%'
                },

                data_show: {
                    title: 'Data Show',
                    width: '10%'
                },

                pizarra_electronica: {
                    title: 'Pizarra Electronica',
                    width: '10%'
                },

                camara_video: {
                    title: 'Camara de Video',
                    width: '10%'
                },

                audio: {
                    title: 'Audio',
                    width: '10%'
                },


            }
        });

    $('#PersonTableContainer5').jtable('load');

    $('#PersonTableContainer6').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Programación de Cursos',
            paging: true,
            actions: {
                listAction: 'php/listar/listarcursos.php',
                createAction: 'php/ingresar/ingresarcursos.php',
                updateAction: 'php/editar/editarcursos.php',
                deleteAction: 'php/eliminar/eliminarcursos.php',
            },
            fields: {
                id_programacion: {
                    key: true,
                    list: false
                },

                codigo_prog_curso: {
                    title: 'Codigo',
                    width: '10%'
                },

                id_periodo: {
                    title: 'Periodo',
                    options: '../opciones/php/options/option6.php',
                    width: '10%'
                },

                id_curso: {
                    title: 'Curso',
                    options: '../opciones/php/options/option7.php',
                    width: '10%'
                },

                seccion: {
                    title: 'Sección',
                    width: '10%'
                },

                hora_inicio: {
                    title: 'Hora Inicio',
                    width: '10%'
                },

                hora_termina: {
                    title: 'Hora Final',
                    width: '10%'
                },

                dias: {
                    title: 'Días',
                    width: '10%'
                },

                id_empleado: {
                    title: 'Docente',
                    options: '../opciones/php/options/option8.php',
                    width: '10%'
                },

                id_aula: {
                    title: 'Aula',
                    options: '../opciones/php/options/option9.php',
                    width: '10%'
                },

                estatus_curso: {
                    title: 'Estatus',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer6').jtable('load');

    $('#PersonTableContainer7').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Contenidos de Cursos',
            actions: {
                listAction: 'php/listar/listarcontenido.php',
                createAction: 'php/ingresar/ingresarcontenido.php',
                updateAction: 'php/editar/editarcontenido.php',
                deleteAction: 'php/eliminar/eliminarcontenido.php',
            },
            fields: {
                id_contenido: {
                    key: true,
                    list: false
                },

                codigo_contenido: {
                    title: 'Código',
                    width: '5%'
                },

                id_curso: {
                    title: 'Curso',
                    options: '../opciones/php/options/option10.php',
                    width: '10%'
                },

                tema: {
                    title: 'Tema',
                    width: '10%'
                },

                descripcion: {
                    title: 'Descripción',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer7').jtable('load');

    $('#PersonTableContainer8').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Control de Cursos',
            actions: {
                listAction: 'php/listar/listarcontrol.php',
                createAction: 'php/ingresar/ingresarcontrol.php',
                updateAction: 'php/editar/editarcontrol.php',
                deleteAction: 'php/eliminar/eliminarcontrol.php',
            },
            fields: {
                id_control: {
                    key: true,
                    list: false
                },

                id_programacion: {
                    title: 'Programación',
                    options: '../opciones/php/options/option11.php',
                    width: '5%'
                },

                prematriculados: {
                    title: 'Prematriculados',
                    width: '10%'
                },

                matriculados: {
                    title: 'Matriculados',
                    width: '10%'
                },

                aprobados: {
                    title: 'Aprobados',
                    width: '10%'
                },

                reprobados: {
                    title: 'Reprobados',
                    width: '10%'
                },

                retirados: {
                    title: 'Retirados',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer8').jtable('load');

    $('#PersonTableContainer9').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Planes de Estudio',
            paging: true,
            actions: {
                listAction: 'php/listar/listarplanes.php',
                createAction: 'php/ingresar/ingresarplanes.php',
                updateAction: 'php/editar/editarplanes.php',
                deleteAction: 'php/eliminar/eliminarplanes.php',
            },
            fields: {
                id_plan_estudio: {
                    key: true,
                    list: false
                },

                codigo_plan: {
                    title: 'Código',
                    width: '5%',
                },

                nombre_plan: {
                    title: 'Nombre',
                    width: '10%'
                },

                duracion: {
                    title: 'Duración',
                    width: '10%'
                },

                cantidad_cursos: {
                    title: 'Cantidad de Cursos',
                    width: '10%'
                },

                total_uv: {
                    title: 'Total UV',
                    width: '10%'
                },

                id_carrera: {
                    title: 'Carrera',
                    options: '../opciones/php/options/option12.php',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer9').jtable('load');

    $('#PersonTableContainer10').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Registros de Matricula',
            paging: true,
            actions: {
                listAction: 'php/listar/listarmatricula.php',
            },
            fields: {
                id_matricula: {
                    title: 'Nº',
                    width: '5%',
                    key: true,
                },

                id_estudiante: {
                    title: 'Estudiante',
                    options: '../opciones/php/options/option13.php',
                    width: '10%',
                },

                id_programacion: {
                    title: 'Codigo Programación',
                    options: '../opciones/php/options/option14.php',
                    width: '5%'
                },

                tipo_matricula: {
                    title: 'Tipo Matrícula',
                    width: '8%'
                },

                estatus_curso: {
                    title: 'Estatus',
                    width: '8%'
                },

            }
        });

    $('#PersonTableContainer10').jtable('load');

    $('#PersonTableContainer11').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Registros de Prematricula',
            paging: true,
            actions: {
                listAction: 'php/listar/listarprematricula.php',
            },
            fields: {
                id_prematricula: {
                    title: 'Nº',
                    key: true,
                    width: '5%'
                },

                id_estudiante: {
                    title: 'Estudiante',
                    options: '../opciones/php/options/option13.php',
                    width: '10%',
                },

                id_programacion: {
                    title: 'Codigo Programación',
                    options: '../opciones/php/options/option14.php',
                    width: '5%'
                },

                estatus_curso: {
                    title: 'Estatus',
                    width: '10%'
                },

            }
        });

    //Re-load records when user click 'load records' button.
        $('#LoadRecordsButton').click(function (e) {
            e.preventDefault();
        $('#PersonTableContainer11').jtable('load', {
                name: $('#codigo_prog_curso').val(),
            });
        });

        //Load all records when page is first shown
        $('#LoadRecordsButton').click();

    $('#PersonTableContainer12').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Requisitos de Cursos',
            paging: true,
            actions: {
                listAction: 'php/listar/listarrequisitos.php',
                createAction: 'php/ingresar/ingresarrequisitos.php',
                updateAction: 'php/editar/editarrequisitos.php',
                deleteAction: 'php/eliminar/eliminarrequisitos.php',
            },
            fields: {
                id_requisito: {
                    key: true,
                    list: false
                },

                codigo_requisito: {
                    title: 'Codigo',
                    width: '5%',
                },

                id_curso: {
                    title: 'Curso',
                    options: '../opciones/php/options/option7.php',
                    width: '10%'
                },

                codigo_curso_requisito: {
                    title: 'Requisito',
                    /*options: '../opciones/php/options/option15.php',*/
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer12').jtable('load');

    $('#PersonTableContainer13').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Estudiantes',
            paging: true,
            actions: {
                listAction: 'php/listar/listarestudiantes.php',
                createAction: 'php/ingresar/ingresarestudiantes.php',
                updateAction: 'php/editar/editarestudiantes.php',
                deleteAction: 'php/eliminar/eliminarestudiantes.php',
            },
            fields: {
                id_estudiante: {
                    key: true,
                    list: false
                },

                num_cuenta: {
                    title: 'Cuenta',
                    width: '8%',
                },

                nombres: {
                    title: 'Nombres',
                    width: '10%'
                },

                apellidos: {
                    title: 'Apellidos',
                    width: '10%'
                },

                tipo_estudiante: {
                    title: 'Tipo Estudiante',
                    width: '10%'
                },

                lugar_nacimiento: {
                    title: 'Lugar de Nacimiento',
                    width: '10%',
                    list: false
                },

                fecha_nacimiento: {
                    title: 'Fecha Nacimiento',
                    type: 'date',
                    width: '10%',
                    list: false
                },

                estado_civil: {
                    title: 'Estado Civil',
                    width: '10%',
                    list: false
                },

                direccion_vivienda: {
                    title: 'Dirección',
                    width: '10%',
                    list: false
                },

                telefono: {
                    title: 'Teléfono',
                    width: '10%',
                    list: false
                },

                direccion_trabajo: {
                    title: 'Dirección Trabajo',
                    width: '10%',
                    list: false
                },

                telefono_trabajo: {
                    title: 'Teléfono Trabajo',
                    width: '10%',
                    list: false
                },

                id_carrera: {
                    title: 'Carrera',
                    options: '../opciones/php/options/option12.php',
                    width: '15%'
                },

                saldo: {
                    title: 'Saldo',
                    width: '5%'
                },

            }
        });

    $('#PersonTableContainer13').jtable('load');

    $('#PersonTableContainer14').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Empleados',
            paging: true,
            actions: {
                listAction: 'php/listar/listarempleados.php',
                createAction: 'php/ingresar/ingresarempleados.php',
                updateAction: 'php/editar/editarempleados.php',
                deleteAction: 'php/eliminar/eliminarempleados.php',
            },
            fields: {
                id_empleado: {
                    key: true,
                    list: false
                },

                codigo_empleado: {
                    title: 'Código',
                    width: '5%',
                },

                nombres: {
                    title: 'Nombres',
                    width: '10%'
                },

                apellidos: {
                    title: 'Apellidos',
                    width: '10%'
                },

                genero: {
                    title: 'Género',
                    width: '5%'
                },

                telefono: {
                    title: 'Teléfono',
                    width: '7%'
                },

                email: {
                    title: 'Email',
                    width: '10%'
                },

                codigo_carrera: {
                    title: 'Codigo Carrera',
                    /*Ver si poner mejor el nombre de la carrera*/
                    width: '8%'
                },

                id_puesto: {
                    title: 'Puesto',
                    options: '../opciones/php/options/option16.php',
                    width: '10%'
                },

                num_cuenta: {
                    title: 'Cuenta',
                    width: '10%'
                }

            }
        });

    $('#PersonTableContainer14').jtable('load');

    $('#PersonTableContainer15').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Puestos',
            paging: true,
            actions: {
                listAction: 'php/listar/listarpuestos.php',
                createAction: 'php/ingresar/ingresarpuestos.php',
                updateAction: 'php/editar/editarpuestos.php',
                deleteAction: 'php/eliminar/eliminarpuestos.php',
            },
            fields: {
                id_puesto: {
                    key: true,
                    list: false
                },

                codigo_puesto: {
                    title: 'Código',
                    width: '1%',
                },

                descripcion: {
                    title: 'Descripción',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer15').jtable('load');

    $('#PersonTableContainer16').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Control de Usuarios',
            paging: true,
            actions: {
                listAction: 'php/listar/listarusuarios.php',
                createAction: 'php/ingresar/ingresarusuarios.php',
                updateAction: 'php/editar/editarusuarios.php',
                deleteAction: 'php/eliminar/eliminarusuarios.php',
            },
            fields: {
                id_usuario: {
                    key: true,
                    list: false
                },

                nombre: {
                    title: 'Nombre',
                    width: '10%',
                },

                apellido: {
                    title: 'Apellido',
                    width: '10%'
                },

                nombre_usuario: {
                    title: 'Nombre de Usuario',
                    width: '10%'
                },

                contrasena: {
                    title: 'Contraseña',
                    width: '10%'
                },

                tipo_usuario: {
                    title: 'Tipo de Usuario',
                    options: '../opciones/php/options/option17.php',
                    width: '10%'
                },

                num_cuenta: {
                    title: 'Cuenta',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer16').jtable('load');

    $('#PersonTableContainer17').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Tipos de Usuarios',
            paging: true,
            actions: {
                listAction: 'php/listar/listartipos.php',
                createAction: 'php/ingresar/ingresartipos.php',
                updateAction: 'php/editar/editartipos.php',
                deleteAction: 'php/eliminar/eliminartipos.php',
            },
            fields: {
                tipo_usuario: {
                    key: true,
                    list: false
                },

                nombre: {
                    title: 'Nombre',
                    width: '3%',
                },

                descripcion: {
                    title: 'Descripción',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer17').jtable('load');

    $('#PersonTableContainer18').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Tipos de Equivalencias',
            paging: true,
            actions: {
                listAction: 'php/listar/listartipos_eq.php',
                createAction: 'php/ingresar/ingresartipos_eq.php',
                updateAction: 'php/editar/editartipos_eq.php',
                deleteAction: 'php/eliminar/eliminartipos_eq.php',
            },
            fields: {
                id_tipo: {
                    key: true,
                    list: false
                },

                codigo_tipo_eq: {
                    title: 'Codigo EQ',
                    width: '3%',
                },

                descripcion: {
                    title: 'Descripción',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer18').jtable('load');

    $('#PersonTableContainer19').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Parciales',
            paging: true,
            actions: {
                listAction: 'php/listar/listarparciales.php',
                createAction: 'php/ingresar/ingresarparciales.php',
                updateAction: 'php/editar/editarparciales.php',
                deleteAction: 'php/eliminar/eliminarparciales.php',
            },
            fields: {
                id_parcial: {
                    title: 'ID',
                    key: true,
                },

                nombre: {
                    title: 'Descripción',
                    width: '30%',
                },
            }
        });

    $('#PersonTableContainer19').jtable('load');

    });
