$(document).ready(function () {
        $('#prueba').jtable({
            title: 'Table of people',
            actions: {
                listAction: 'php/list.php',
                createAction: '/GettingStarted/CreatePerson',
                updateAction: '/GettingStarted/UpdatePerson',
                deleteAction: '/GettingStarted/DeletePerson'
            },
            fields: {
                id_usuario: {
                    key: true,
                    list: false
                },
                nombre: {
                    title: 'Nombre'
                },
                apellido: {
                    title: 'Apellido'
                },
                nombre_usuario: {
                    title: 'Nombre de usuario'
                },
                contrasena: {
                    title: 'Contraseña'
                },
                tipo_usuario: {
                    title: 'Tipo de Usuario',
                    options: 'php/dropdown.php'
                }
            }
        });
   $('#prueba').jtable('load');
});
