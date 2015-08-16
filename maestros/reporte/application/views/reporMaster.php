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

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
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
 foreach ($resultado->result() as &$valor) {

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
                <tr bgcolor="E0EEEE" >
                    <th>Numero Alumnos</th>
                    <th>Numero Cuenta</th>
                    <th>Nombre</th>
                     <th>Justificadas</th>
                    <th>Asistio</th>
                    <th>Faltas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
<?php
$rojo = $_SESSION["FALTAS"];
                        $amarillo = $rojo/2;// la mitad
                        $naranja = $rojo -3;// faltan 3
                         $verde = $amarillo-1;

$amarillo=ceil($amarillo);
$naranja=ceil($naranja);
$verde=ceil($verde);

  $i=0;
      $z=1;
                foreach ($resultado->result() as &$valor)
               {
                   echo" <td>$z</td>";
                   // $_SESSION['numero_cuenta']= $valor->id_estudiante;
     echo "<td>";echo anchor('reporteIndexControlador/cargaReporte/'.$valor->id_estudiante, $valor->num_cuenta);echo"</td>";

                  echo"   <td>$valor->nombres $valor->apellidos</td>";

                echo"   <td> $resultado5[$i]</td>";

                echo"   <td> $resultado4[$i]</td>";



                    if($resultado3[$i] > $rojo)
                        {
                            echo "<td bgcolor='#FF0000'>";echo$resultado3[$i];echo"</td>";
                        }


                        if($resultado3[$i] >= $amarillo)
                        {
                            if($resultado3[$i] < $naranja){echo "<td bgcolor='#D7DF01'>";echo $resultado3[$i];echo"</td>";
                                                              }
                        }


                    if($resultado3[$i]>= $naranja)
                    {
                        if($resultado3[$i] < $rojo+1)
                        {

                           echo "<td bgcolor='#FF8000'>";echo $resultado3[$i];echo"</td>";

                        }
                    }



    if($resultado3[$i] < $amarillo){ echo "<td bgcolor='#4B8A08'>";echo $resultado3[$i];echo"</td>";}
                    echo"</tr>";

                    $i++;
                    $z++;

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


            //echo"<h4>Fecha Reporte: $fecha    </h4>";
            ?>



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








