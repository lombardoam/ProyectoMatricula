$(document).ready(function () {
    $('#ingresartutor').jtable({
        title: 'Ingresar Tutor',
        actions: {
            listAction: 'php/listutor.php',
            createAction: 'php/insertartutor.php',
            updateAction: 'php/editartutor.php',
            deleteAction: 'php/eliminartutor.php'
        },
        fields: {
            id_tutor: {
                key: true,
                list: false
            },
            num_cuenta: {
                title: 'Cuenta del Alumno',
                list: false
            },
            responsabilidad_legal: {
                title: 'Responsabilidad',
            },
            apellidos: {
                title: 'Apellidos',
            },
            nombres: {
                title: 'Nombres',
            },
            profesion: {
                title: 'Profesion',
            },
            lugar_nacimiento: {
                title: 'Lugar de Nacimiento',
                width: '20%'
            },
            fecha_nacimiento: {
                title: 'Fecha de nacimiento',
                type: 'date',
                width: '20%'
            },
            genero: {
                title: 'Género',
            },
            estado_civil: {
                title: 'Estado Civil',
                list: false
            },
            nacionalidad: {
                title: 'Nacionalidad',
            },
            telefono: {
                title: 'Teléfono',
            },
            celular: {
                title: 'Celular',
                list: false
            },
            correo: {
                title: 'Correo',
                list: false
            },
            direccion: {
                title: 'Dirección',
            },
            trabaja: {
                title: 'Trabaja',
                list: false
            },
            nombre_trabajo: {
                title: 'Nombre del Trabajo',
                list: false
            },
            direccion_trabajo: {
                title: 'Dirección del Trabajo',
                list: false
            },
            telefono_trabajo: {
                title: 'Teléfono del Trabajo',
                list: false
            }
        }
    });
    $('#ingresartutor').jtable('load');
});
