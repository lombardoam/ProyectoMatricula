<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="utf-8">
	<title>Reporte Asistencias</title>

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


  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

</head>
<body>

<div id="container">
	<h1>Asistencia Reportes</h1>
	<div id="body">
        <h2>Catedratico  <?php echo $_COOKIE["nombre"];echo" "; echo $_COOKIE["apellido"];?></h2>

     <?php
 foreach ($resultado->result() as &$valor)
        {

break;


         }

        ?>





         <p><td type='submit' class='btn btn-default' name='seleccionado' value ='Buscar'</td></p> <?php
 foreach ($resultado->result() as &$valor)
        {

          echo"<h4>$valor->nombre_curso -  Periodo 1  -  Año 2015</h4>";
            break;

         }

        ?>
		<div class="bs-example">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr bgcolor="E0EEEE">
                    <th>Dia de Clase</th>
                    <th>Numero Cuenta</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
<?php
  $i=1;
                foreach ($resultado->result() as &$valor)
               {
                   echo"<td>$i</td>";
                   echo"<td>$valor->num_cuenta</td>";
                  echo"   <td>$valor->nombres  $valor->apellidos</td>";
                  echo"   <td>$valor->fecha</td>";
          echo "<td>";echo anchor('reporteIndexControlador/cambiarEstado/'.$valor->id_asistencia, $valor->estado);echo"</td>";
                echo"</tr>";
                    $i++;
                }
?>




            </tbody>

        </table>
        <table class="table table-bordered">

        <tbody>
            <?php
               $this->load->helper('date');
         $datestring = "%d/%m/%Y";
         $time = time();
         $fecha  =   mdate($datestring, $time);

           // echo"<h4>Fecha Reporte: $fecha    </h4>";
$rojo = $_SESSION["FALTAS"];
                        $amarillo = $rojo/2;// la mitad
                        $naranja = $rojo -3;// faltan 3
                         $verde = $amarillo-1;

$amarillo=ceil($amarillo);
$naranja=ceil($naranja);
$verde=ceil($verde);

  echo"
            <h4><font color='#4B8A08'>
 Mas de la Mitad: $verde </font><h4><font color='#D7DF01'>
 Mitad o Menos: $amarillo - </font>
 <font color='#FF8000'>Faltan tres: $naranja - </font>
 <font color='#FF0000'>Sin Dereho Mas de: $rojo</font></h4>";

            ?>

             <thead>
                <tr bgcolor="E0EEEE">
                   <th>Total</th>
                  <th>Justifico</th>
                    <th>Asistio</th>
                    <th>Falto</th>
                </tr>
            </thead>
                <tr>
                    <td><?php echo $_SESSION['total'];?></td>
                                        <td><?php echo $_SESSION["Justificado"]; ?></td>

                    <td><?php echo $_SESSION["Asistio"]; ?></td>
                   <?php
                   if($_SESSION["Ausente"] > $rojo)
                        {
                            echo "<td bgcolor='#FF0000'>";echo $_SESSION['Ausente'];echo"</td>";
                        }


                        if($_SESSION["Ausente"] >= $amarillo)
                        {
                            if($_SESSION["Ausente"] < $naranja){echo "<td bgcolor='#D7DF01'>";echo $_SESSION['Ausente'];echo"</td>";
                                                              }
                        }


                    if($_SESSION["Ausente"] >= $naranja)
                    {
                        if($_SESSION["Ausente"] < $rojo+1)
                        {

                           echo "<td bgcolor='#FF8000'>";echo $_SESSION['Ausente'];echo"</td>";

                        }
                    }



    if($_SESSION["Ausente"] < $amarillo){ echo "<td bgcolor='#4B8A08'>";echo $_SESSION['Ausente'];echo"</td>";}?>


                </tr>
                </tbody>
            </table>
    </div>
</div>

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








