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
				title: 'Ver equivalencias',
                paging:true,
				actions:
				 {
					 listAction: 'verequivalencias.php',
                     createAction: 'crearequivalencias.php',
					 updateAction: 'editarequivalencias.php',
					 deleteAction: 'borrarequivalencias.php'

				},


				fields:
				 {
					id_interna:
					{
						key: true,
						create: false,
						edit: false,
						list: false
					},


					codigo_eq: {
						title: 'Código'

                    },


                     nombre_universidad: {
						title: 'Universidad'

					},

					id_curso: {
						title: 'Asignatura',
                        options: 'param/paramcursos.php'

					},


					codigo_clase_equivalencia: {
						title: 'Equivalencia'



					},
					num_cuenta: {
						title: 'Cuenta'


					},
					id_tipo: {
						title: 'Tipo',
                        options: 'param/paramtipoeq.php'

					},

                    comentarios: {
						title: 'Comentarios'

					},


				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
