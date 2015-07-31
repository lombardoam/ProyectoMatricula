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
					id_empleado: {
						key: true,
						create: false,
						edit: false,
						list: false
					},

                    	codigo_empleado: {
						title: 'Código',
						width: '15%',
					},

					nombres: {
						title: 'Nombres',
						width: '15%',
					},
					apellidos: {
						title: 'Apellidos',
						width: '15%',
					},

                   genero: {
                    title: 'Género',
                    width: '10%',
                    options: { 'H': 'Hombre', 'M': 'Mujer' },

                },

					telefono: {
						title: 'Teléfono',
						width: '15%',

					},
					email: {
						title: 'Correo',
						width: '15%',

					},
					codigo_carrera: {
						title: 'Carrera',
						width: '15%'
                    //options: { '122': 'Chef', '3321': 'Administrador Empresas', '553': 'Civil', '343': 'Arquitectura' },

						 },


					id_puesto: {
						title: 'Puesto',
						width: '15%',
                    //options: { '0': 'No', '1': 'Si' },

					},
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
