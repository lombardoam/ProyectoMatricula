






<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Clases Maestro</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}



	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

		cosa {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		width: auto;
     height: auto;
     border: 1px solid #555;
     background: #FAFAFA;
     margin: 14px 0 14px 0;
     padding: 12px 10px 12px 10px;
     display: block;
     margin-left: auto;
     margin-right: auto;

	}

        centrar {
		  text-align:center;

	}

	#body {
		margin: 0 15px 0 15px;
        text-align:center;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #FFFFFF;

        text-align:center;
	}
	</style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url()?>csss/css/bootstrap.min.css">
  <script src="<?= base_url()?>csss/css/jquery.min.js"></script>
  <script src="<?= base_url()?>csss/css/bootstrap.min.js"></script>

  <!-- For Travis CI -->
  <script src="<?= base_url()?>csss/css/jquery-2.1.4.min.js"></script>
  <script src="<?= base_url()?>csss/css/qunit-1.18.0.js"></script>


     <script src="<?= base_url()?>csss/css/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="<?= base_url()?>csss/css/sweetalert.min.js"></script>
  <link rel="stylesheet" href="<?= base_url()?>csss/css/sweetalert.css">


</head>
<body>

<div id="container">
    <div id="body">
<h2>Catedratico  <?php echo $_COOKIE["nombre"];echo" "; echo $_COOKIE["apellido"];?></h2>


		<cosa>  <div class="row">
    <div id="col-sm-4">
      <h3></h3>
      <?php


 foreach ($user_data->result() as &$valor)
        {

     echo form_open('reporteIndexControlador/cargaReportePrincipal');


 echo"<p><button type='submit' class='btn btn-default' name='seleccionado' value = $valor->id_programacion >$valor->nombre_curso # $valor->hora_inicio -  $valor->hora_termina # $valor->dias # $valor->seccion$valor->num_aula # $valor->nombre</button></p>";



 echo form_close();


         }

if (count($user_data->result()) == 0)
{
        echo"<p><h3>No Tiene Clases Asignadas</h3></p>";

}
?>

             </div>
  </div></cosa>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  : '' ?></p>
</div>

</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>



</body>
</html>








