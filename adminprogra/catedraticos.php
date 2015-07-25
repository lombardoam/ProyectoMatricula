<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
    <script src="jtable/localization/jquery.jtable.es.js" type="text/javascript"></script>

  </head>
  <body>
	<div id="PeopleTableContainer" style="width: 80%; height:"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Ingreso Docentes',
                paging:'true',
				actions: {
					 listAction: 'leerdocentes.php',
				},

				fields: {
					id_docente: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					nombre: {
						title: 'Nombre Docente',
						width: '30%',
					},
					apellido: {
						title: 'Apellido Docente',
						width: '30%',
					},

						telefono: {
						title: 'Teléfono',
						width: '15%',

					},
					correo: {
						title: 'Correo',
						width: '30%',

					},
					id_carrera: {
						title: 'Carrera',
						width: '30%'
                    //options: { '122': 'Chef', '3321': 'Administrador Empresas', '553': 'Civil', '343': 'Arquitectura' },

						 },

				 genero: {
                    title: 'Género',
                    width: '13%',
                    options: { 'H': 'Hombre', 'M': 'Mujer' },

                },



					cordinador: {
						title: 'Coordinador',
						width: '30%',
                    options: { '0': 'No', '1': 'Si' },

					},
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
