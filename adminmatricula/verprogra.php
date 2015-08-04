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
				title: 'Ver horarios',
                paging:'true',
				actions:
				 {
					 listAction: 'consultaprogramacion.php',
 					 createAction: 'crearprogramacion.php',
					updateAction: 'editarprogramacion.php',
					deleteAction: 'borrarprogramacion.php'
				},


				fields:
				 {
					id_programacion:
					{
						key: true,
						create: false,
						edit: false,
						list: false
					},

				codigo_prog_curso: {
						title: 'Código'

                    },

                id_periodo: {
						title: 'Periodo',
                        options: 'param/paramperiodo.php',

                    },


					id_curso: {
						title: 'Asignatura',
                        options: 'param/paramcursos.php',

                    },


                     seccion: {
						title: 'Sección',
                        options: { 'A':'A', 'B':'B', 'C':'C', 'D':'D', 'E':'E', 'F':'F', 'G':'G'
                     }

                    },

					hora_inicio: {
						title: 'Hora Inicial',
						//width: '15%',
						options: { '6:50': '6:50', '7:50': '7:50', '8:50': '8:50', '9:50': '9:50', '10:50': '10:50', '11:50': '11:50', '12:50': '12:50',
                                  '13:50': '13:50','14:50': '14:50', '15:50': '15:50', '16:50': '16:50', '17:50': '17:50',
                                  '18:50': '18:50', '19:50': '19:50'
                },


					},

					hora_termina: {
						title: 'Hora Final',
						//width: '15%',
						options: { '7:40': '7:40', '8:40': '8:40', '9:40': '9:40', '10:40': '10:40', '11:40': '11:40', '12:40': '12:40',
                                  '13:40': '13:40','14:40': '14:40', '15:40': '15:40', '16:40': '16:40', '17:40': '17:40',
                                  '18:40': '18:40', '19:40': '19:40', '20:40': '20:40'
                },


					},

					dias: {
						title: 'Días	',
						//width: '20%',
					   options: { 'L-Mi-V': 'L-Mi-V', 'Ma-J': 'Ma-J', 'Ma-S': 'Ma-S', 'L-Mi': 'L-Mi',
                                 'L--V': 'L--V', 'L-J': 'L-J', 'V-S': 'V-S', 'Ma-V': 'Ma-V', 'L-J': 'L-J',
                                 'L': 'L', 'Ma': 'Ma', 'Mi': 'Mi', 'J': 'J', 'V': 'V',
                                 'S': 'S', 'D': 'D'
                },


					},

					id_empleado: {
						title: 'Docente',
                        options: 'param/paramdocentes.php',


					},
					id_aula: {
						title: 'Salón',
                        options: 'param/paramsalones.php',


					},

					estatus_curso:
					{
						title: 'Estado',
						//width: '20%',
                        options: { 'Activo':'Activo','Cancelado':'Cancelado', 'Cerrado':'Cerrado' }

                    },

                 }
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});


	</script>

  </body>
</html>
