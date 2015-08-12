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
      <div align="center">
                    <div class="filtering">
    <form>
        Clase: <select name="nombre" id="nombre">
        <option selected="selected" value="0">* Selecciona un Plan de Estudio</option>
           <?php
            $conexion = mysqli_connect('localhost','root','','matricula');
            $result = mysqli_query($conexion, "SELECT nombre_plan AS DisplayText, id_plan_estudio AS Value FROM planes_estudio");
$i=1;
while($row = mysqli_fetch_assoc($result)){
    echo "<option value='".$i."'> ". $row[DisplayText]."</option>";
    $i++;
}
        ?>
        </select>&nbsp;&nbsp;&nbsp;
        <button type="submit" id="LoadRecordsButton" class="btn btn-primary">Buscar</button>
    </form>
      </div> <br></div>
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
 					 createAction: 'crearasignaturas.php',
					 updateAction: 'editarasignaturas.php',
					 deleteAction: 'borrarasignaturas.php'
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
						 },


					nombre_curso: {
						title: 'Nombre Clase',
						 },



                     uv: {
						title: 'UV',
						options: { '1': '1', '2': '2', '3': '3', '4': '4', '5': '5', '6':'6' },
					},

                     horas_practicas: {
						title: 'Horas Prácticas',
						 },

                     horas_teoricas: {
						title: 'Horas Teóricas',
						 },

                     laboratorio: {
						title: 'Laboratorio',
						options: { '0':'No','1':'Sí' },
						 },

                     id_plan_estudio : {
                         title: 'Plan',
                         options: 'param/paramplan.php'
                     },

                     periodo: {
						title: 'Periodo',

						 },



				}
			});

			//Load person list from server
		//Re-load records when user click 'load records' button.
        $('#LoadRecordsButton').click(function (e) {
            e.preventDefault();
            $('#PeopleTableContainer').jtable('load', {
                nombre: $('#nombre').val(),

            });
        });

        //Load all records when page is first shown
        $('#LoadRecordsButton').click();

		});

	</script>

  </body>
</html>
