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

                codigo_empleado: {
                    title: 'Decano',
                    options: '../opciones/php/options/option1.php',
                    width: '8%'
                },

            }
        });

    $('#PersonTableContainer').jtable('load');

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

               codigo_empleado: {
                    title: 'Coordinador',
                   options: '../opciones/php/options/option3.php',
                    width: '10%'
                },



            }
        });

    $('#PersonTableContainer1').jtable('load');

    $('#PersonTableContainer2').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Cursos',
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

    $('#PersonTableContainer2').jtable('load');

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



    $('#PersonTableContainer80').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Planes de Estudio',
            paging: true,
            actions: {
                listAction: 'php/listar/listarcursos.php',
                createAction: 'php/ingresar/ingresarcursos.php',
                updateAction: 'php/editar/editarcursos.php',
                deleteAction: 'php/eliminar/eliminarcursos.php',
            },
            fields: {
                id_curso: {
                    key: true,
                    list: false
                },

                id_asignatura: {
                    title: 'Asignatura',
                    width: '10%',
                    /*options: {
                        '1': 'Arquitectura', '2': 'Ingenieria en Infotecnologia', '3': 'Administracion de Empresas', '4': 'Ingenieria Civil', '5': 'Diseno de Interiores', '6': 'Administracion de Empresas Turisticas'
                    }*/
                },

                periodo: {
                    title: 'Periodo',
                    width: '10%'
                },

                hora_inicial: {
                    title: 'Inicio',
                    width: '10%'
                },

                hora_final: {
                    title: 'Final',
                    width: '10%'
                },

                 dias: {
                    title: 'Dias',
                    width: '10%'
                },

                 id_docente: {
                    title: 'Docente',
                    width: '10%'
                },

                id_salon: {
                    title: 'Salon',
                    width: '10%'
                },

                id_edificio: {
                    title: 'Edificio',
                    width: '10%'
                },

                seccion: {
                    title: 'Seccion',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer80').jtable('load');


    $('#PersonTableContainer81').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Registros de Prematricula',
            paging: true,
            actions: {
                listAction: 'php/listar/listarprematricula.php',
            },
            fields: {
                id_curso: {
                    key: true,
                    list: false
                },

                asignatura: {
                    title: 'Asignatura',
                    width: '10%',
                },

                hora_inicial: {
                    title: 'Hora Inicial',
                    width: '10%'
                },

                hora_final: {
                    title: 'Hora Final',
                    width: '10%'
                },

                dias: {
                    title: 'Dias',
                    width: '10%'
                },

                seccion: {
                    title: 'Seccion',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer81').jtable('load');

    $('#PersonTableContainer9').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Planes de Estudio',
            paging: true,
            actions: {
                listAction: 'php/listar/listarplanes.php',
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
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer9').jtable('load');

    $('#PersonTableContainer10').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Empleados',
            paging: true,
            actions: {
                listAction: 'php/listar/listarempleados.php',
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
                    width: '10%'
                },

                telefono: {
                    title: 'Teléfono',
                    width: '10%'
                },

                email: {
                    title: 'Email',
                    width: '10%'
                },

                codigo_carrera: {
                    title: 'Codigo Carrera',
                    width: '10%'
                },

                id_puesto: {
                    title: 'Puesto',
                    width: '10%'
                },

            }
        });

    $('#PersonTableContainer10').jtable('load');



    });
