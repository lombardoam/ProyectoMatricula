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
				title: 'Asignaturas',
                    paging:'true',
					actions: {
					 listAction: 'asignaturas.php',
				},


					fields:
				 {
					id_curso:
					{
						key: true,
						create: false,
						edit: false,
						list: false
					},

			        codigo_curso: {
						title: 'Código',
						width: '15%',
						 },


					nombre_curso: {
						title: 'Nombre Clase',
						width: '20%'
						 },

                     uv: {
						title: 'UV',
						width: '10%',
                        options: { '1': '1', '2': '2', '3': '3', '4': '4', '5': '5'
                },
						 },

                    horas_practicas: {
						title: 'Horas Prácticas',
						width: '15%'
						 },

                     horas_teoricas: {
						title: 'Horas Teóricas',
						width: '15%'
						 },

                    laboratorio: {
						title: 'Laboratorio',
						width: '15%',
                        options: {'1':'Sí','0':'No'},
						 },

                    id_plan_estudio: {
						title: 'Plan',
						width: '15%',
                        options: 'param/paramplan.php',
						 },

                     periodo: {
						title: 'Periodo',
						width: '15%'
						 },


				}
			});
			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
