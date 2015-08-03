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
                paging: true,
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

		            nombres: {
						title: 'Nombres'



					},

					apellidos: {
						title: 'Apellidos'

					},


					tipo_estudiante: {
						title: 'Tipo',
                        options: {'Reingreso':'Reingreso','Primer ingreso':'Primer ingreso', 'Élite':'Élite','Egresado':'Egresado','Egresada':'Egresada' },


					},
					lugar_nacimiento: {
						title: 'Lugar	'

					},

					fecha_nacimiento: {
						title: 'Nacimiento',
                     type: 'date',
                     displayFormat: 'yy-mm-dd'

					},

                     	estado_civil: {
						title: 'Estado civil',
                        options: { 'Soltero': 'Soltero', 'Casado': 'Casado', 'Divorciado': 'Divorciado', 'Soltera':'Soltera','Casada':'Casada','Divorciada':'Divorciada'
                                  },
                        list: false


					},

                     direccion_vivienda:
					{
						title: 'Dirección'

					},

                     telefono: {
						title: 'Teléfono'


					},

                    direccion_trabajo: {
						title: 'Dir. trabajo',
                        list: false


					},

                     telefono_trabajo:
					{
						title: 'Tel. trabajo',
                        list: false

					},


                     fecha_ingreso: {
						title: 'Ingreso',
                        type: 'date',
                        displayFormat: 'yy-mm-dd'


					},

                       id_carrera: {
						title: 'Carrera',
                         options: 'param/paramcarreras.php',


					},

                     saldo: {
						title: 'Saldo',


					},
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
