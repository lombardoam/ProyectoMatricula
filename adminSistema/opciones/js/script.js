$(document).ready(function () {

    //Texto de localizacion
    var Spanishmessages = {
    serverCommunicationError: 'Ha ocurrido un error mientras se trataba de comunicar con el servidor.',
    loadingMessage: 'Cargando Registros...',
    noDataAvailable: 'Ninguna dato disponible!',
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
            title: 'Edificios',
            actions: {
                listAction: 'php/listaredificio.php',
                createAction: 'php/ingresaredificio.php',
                updateAction: 'php/editaredificio.php',
                deleteAction: 'php/eliminaredificio.php',
            },
            fields: {
                id_edificio: {
                    key: true,
                    list: false
                },

                nombreedificio: {
                    title: 'Nombre',
                    width: '10%'
                },

                numero_pisos: {
                    title: 'Cantidad de Pisos',
                    width: '10%'
                },

                cantidad_aulas: {
                    title: 'Numero de Aulas',
                    width: '10%'
                },

                cantidad_auditorios: {
                    title: 'Numero de Auditorios',
                    width: '10%'
                },

                cantidad_laboratorios: {
                    title: 'Numero de Laboratorios',
                    width: '10%'
                },


            }
        });

    $('#PersonTableContainer').jtable('load');


    $('#PersonTableContainer2').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Salones',
            actions: {
                listAction: 'php/listarsalones.php',
                createAction: 'php/ingresarsalones.php',
                updateAction: 'php/editarsalones.php',
                deleteAction: 'php/eliminarsalones.php',
            },
            fields: {
                id_salon: {
                    key: true,
                    list: false
                },

                id_tipo_salon: {
                    title: 'Tipo de Salon',
                    width: '10%',
                    list: false
                },

                id_edificio: {
                    title: 'Edificio',
                    width: '10%',
                    list: false
                },

                numero_salon: {
                    title: 'Numero de Salon',
                    width: '10%'
                },

                capacidad: {
                    title: 'Capacidad de Alumnos',
                    width: '10%'
                },

                recursos: {
                    title: 'Recursos',
                    width: '10%'
                },


            }
        });

    $('#PersonTableContainer2').jtable('load');

    $('#PersonTableContainer3').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Facultades',
            actions: {
                listAction: 'php/listarfacultades.php',
                createAction: 'php/ingresarfacultades.php',
                updateAction: 'php/editarfacultades.php',
                deleteAction: 'php/eliminarfacultades.php',
            },
            fields: {
                id_facultad: {
                    key: true,
                    list: false
                },

                nombre_facultad: {
                    title: 'Nombre',
                    width: '10%'
                },


                nombre_decano: {
                    title: 'Decano de la Facultad',
                    width: '10%'
                },


            }
        });

    $('#PersonTableContainer3').jtable('load');

    $('#PersonTableContainer4').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Carreras',
            paging: true,
            actions: {
                listAction: 'php/listarcarreras.php',
                createAction: 'php/ingresarcarreras.php',
                updateAction: 'php/editarcarreras.php',
                deleteAction: 'php/eliminarcarreras.php',
            },
            fields: {
                id_carrera: {
                    key: true,
                    list: false
                },

                id_facultad: {
                    title: 'Facultad',
                    width: '10%',
                    options: {
                        '1': 'Ingenierias y Arquitectura', '2': 'Ciencias Economicas y Sociales'
                    }
                },

                nombre_carrera: {
                    title: 'Nombre de la Carrera',
                    width: '10%'
                },

                codigo_carrera: {
                    title: 'Codigo',
                    width: '10%'
                },

                nombre_coordinador: {
                    title: 'Coordinador',
                    width: '10%'
                },



            }
        });

    //Re-load records when user click 'load records' button.
        /*$('#LoadRecordsButton').click(function (e) {
            e.preventDefault();
            $('#PersonTableContainer4').jtable('load', {
                nombre_carrera: $('#nombre_carrera').val(),
                id_facultad: $('#id_facultad').val()
            });
        });

        //Load all records when page is first shown
        $('#LoadRecordsButton').click();*/

    $('#PersonTableContainer4').jtable('load');

    $('#PersonTableContainer5').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Asignaturas',
            paging: true,
            actions: {
                listAction: 'php/listarasignaturas.php',
                createAction: 'php/ingresarasignaturas.php',
                updateAction: 'php/editarasignaturas.php',
                deleteAction: 'php/eliminarasignaturas.php',
            },
            fields: {
                id_asignatura: {
                    key: true,
                    list: false
                },

                    /*options: {
                        '1': 'Arquitectura', '2': 'Ingenieria en Infotecnologia', '3': 'Administracion de Empresas', '4': 'Ingenieria Civil', '5': 'Diseno de Interiores', '6': 'Administracion de Empresas Turisticas'
                    }*/

                nombre_asignatra: {
                    title: 'Nombre',
                    width: '10%'
                },

                cod_asignatura: {
                    title: 'Codigo',
                    width: '10%'
                },

                 unidades_valorativas: {
                    title: 'UV',
                    width: '10%'
                },

                 horas_teoricas: {
                    title: 'Horas Teoricas',
                    width: '10%'
                },

                 horas_practicas: {
                    title: 'Horas Practicas',
                    width: '10%'
                },

                 periodo: {
                    title: 'Periodo',
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
                listAction: 'php/listarcursos.php',
                createAction: 'php/ingresarcursos.php',
                updateAction: 'php/editarcursos.php',
                deleteAction: 'php/eliminarcursos.php',
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

    $('#PersonTableContainer6').jtable('load');

    $('#PersonTableContainer7').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Planes de Estudio',
            paging: true,
            actions: {
                listAction: 'php/listarcursos.php',
                createAction: 'php/ingresarcursos.php',
                updateAction: 'php/editarcursos.php',
                deleteAction: 'php/eliminarcursos.php',
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

    $('#PersonTableContainer7').jtable('load');


    $('#PersonTableContainer8').jtable({
            messages: Spanishmessages, //Localizacion
            title: 'Registros de Prematricula',
            paging: true,
            actions: {
                listAction: 'php/listarprematricula.php',
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

    $('#PersonTableContainer8').jtable('load');

    });
