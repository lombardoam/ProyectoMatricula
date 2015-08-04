<?php

require 'noautorizado.php';
?>
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
	<div align="center"><div id="PeopleTableContainer" style="width: 80%; height:"></div></div>
	<script type="text/javascript">

		$(document).ready(function ()
		 {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable(
			{
				title: 'Docentes',
                paging:'true',
				actions:
				 {
					 listAction: 'leerdocentes.php'

				},


				fields: {
					id_empleado: {
						key: true,
						create: false,
						edit: false,
						list: false,
					},

                	codigo_empleado: {
						title: 'Código',

					},

					nombres: {
						title: 'Nombres',

					},


                    apellidos: {
						title: 'Apellidos',

					},

                   genero: {
                    title: 'Género',

                    options: { 'M': 'Hombre', 'F': 'Mujer' },

                },

					telefono: {
						title: 'Teléfono',


					},

					email: {
						title: 'Correo',


					},
					codigo_carrera: {
						title: 'Carrera',
						options: 'param/paramcarrera.php',
						 },


					id_puesto: {
						title: 'Puesto',
						options: 'param/parampuestos.php',
					},


				}
			});


			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
