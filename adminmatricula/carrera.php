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

		$(document).ready(function ()
		 {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable(
			{
				title: 'Carreras',
                paging: 'true',
					actions: {
					 listAction: 'listarcarreras.php',

				},


				fields:
				 {
					id_carrera:
					{
						key: true,
						create: false,
						edit: false,
						list: false,
					},


                    codigo_carrera: {
                        title: 'Código',

						 },

					nombre_carrera: {
						title: 'Nombre carrera',

						 },


                     id_facultad: {
						title: 'Facultad',

                        options: 'param/paramfacultades.php',
						 },

                      codigo_empleado: {
						title: 'Coordinador',
                       options: 'param/paramdirector.php',

                     },


				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
