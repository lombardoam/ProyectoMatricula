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
	<div id="PeopleTableContainer" style="width: 80%; height:"></div>
	<script type="text/javascript">

		$(document).ready(function ()
		 {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable(
			{
				title: 'Lista de facultades',
                paging:'true',
					actions: {
					 listAction: 'listarfacultades.php',
				},


				fields:
				 {
					id_facultad:
					{
						key: true,
						create: false,
						edit: false,
						list: false
					},

                    codigo_facultad: {
						title: 'Código facultad',

						 },

					nombre_facultad: {
						title: 'Nombre facultad',

						 },



					id_empleado: {
						title: 'Nombre decano',
						options: 'param/paramdocentes.php',
						 },


				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
