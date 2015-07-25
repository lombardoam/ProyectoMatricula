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
				title: 'Ver alumnos matriculados en la universidad',
                paging:true,
				actions:
				 {
					 listAction: 'verestudiantes.php',
                     createAction: 'crearalumnos.php',
					 updateAction: 'editaralumnos.php',
					 deleteAction: 'borraralumnos.php'

				},


				fields:
				 {
					id_estudiante:
					{
						key: true,
						create: false,
						edit: false,
						list: false
					},


					num_cuenta: {
						title: 'Cuenta'

                    },



					apellidos: {
						title: 'Apellidos'

					},


					nombres: {
						title: 'Nombres'



					},
					correo: {
						title: 'Correo'


					},
					lugar_nacimiento: {
						title: 'Lugar	'

					},

					fecha_nacimiento: {
						title: 'Nacimiento',
                        type: 'date',
                        displayFormat: 'dd-mm-yy'

					},

					telefono: {
						title: 'Teléfono'


					},

                    nacionalidad: {
						title: 'Nacionalidad',
                        list: false


					},

                     	estado_civil: {
						title: 'Estado civil',
                        options: { 'Soltero': 'Soltero', 'Casado': 'Casado', 'Divorciado': 'Divorciado', 'Soltera':'Soltera','Casada':'Casada','Divorciada':'Divorciada'
                                  },
                        list: false


					},

					direccion:
					{
						title: 'Dirección'

					},

                    trabaja: {
						title: 'Trabaja',
                        list: false,
                        options: { '1': 'Sí', '0': 'No'
                },


					},

                     tel_trabajo: {
						title: 'Tel. trabajo',
                        list: false


					},
                     dir_trabajo: {
						title: 'Dir. trabajo',
                        list:false


					},
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
