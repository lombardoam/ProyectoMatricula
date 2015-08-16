<?php

require'header.php';
require 'conexion.php';
require 'noautorizado.php';

?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-11">
                        <h1 class="page-header">
                            Sistema de matrícula
                            <small>Matrícula de estudiantes</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Escritorio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Administración
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
            <!-- /.Colocar aquí el código y contenido que se desee poner en la página -->


    <!-- /Inicio de código de formulario -->

<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">>
    <script src="js/table.js"></script>
<fieldset>

<!-- Form Name -->
    <div align="center"></div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numerocuenta"><span class="fa fa-fw fa-search"></span> Número de cuenta</label>
  <div class="col-md-2">
    <input id="numerocuenta" name="numerocuenta" type="search" placeholder="Buscar alumno" class="form-control input-md" required="">
     </div>
</div>
    <!-- Prepended text-->
    <!-- Consulta SQL para buscar los nombres y apellidos de los estudiantes tomando el número de cuenta enviado en el buscador -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombrealumno">Nombre</label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><span class="fa fa-fw fa-user"></span> <?php
if (!empty ($_GET['numerocuenta'])){


$qcuenta = "SELECT nombres,apellidos FROM estudiantes WHERE num_cuenta ='" . $_GET['numerocuenta'] . "'";
$qcuenta = mysqli_query($conexion, $qcuenta);
 while($lineanombres = mysqli_fetch_assoc($qcuenta)){
 echo $lineanombres['nombres'];
 echo ' ';
 echo $lineanombres['apellidos'];
 }
}

        ?>
        </span>

      </div></div></div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="consultas">Consultar</label>
  <div class="col-md-8">
    <button id="consultas" name="consultas" class="btn btn-primary"><span class="fa fa-fw fa-list-ol"></span> Historial</button>
    <button id="saldo" name="saldo" class="btn btn-primary"><span class="fa fa-fw fa-exclamation-circle"></span> Saldo</button>
      </div>
</div>


<!-- Prepended text-->
    <!-- Consulta SQL para buscar el saldo -->
<div class="form-group">
  <label class="col-md-4 control-label" for="saldoalumno"> Saldo</label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><span class="fa fa-fw fa-money"></span>
        <?php
if (!empty($_GET['numerocuenta'])){

$qcuenta = "SELECT saldo FROM estudiantes WHERE num_cuenta ='" . $_GET['numerocuenta'] . "'";
$qcuenta = mysqli_query($conexion, $qcuenta);
 while($lineasaldo = mysqli_fetch_assoc($qcuenta)){
 echo 'L. ';
 echo $lineasaldo['saldo'];

if (($lineasaldo['saldo'] != "0" OR $lineasaldo['saldo'] != "0.00" )) {
    echo '           <div align="center">
                            <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Alumno no solvente.
                </div></div>';
}
 }
        }
?>
        </span>
        </div></div></div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cantidadclases">Clases a matricular</label>
  <div class="col-md-4">
    <label class="radio-inline" for="cantidadclases-0">
      <input type="radio" name="cantidadclases" id="cantidadclases-0" value="1" checked="checked">
      1
    </label>
    <label class="radio-inline" for="cantidadclases-1">
      <input type="radio" name="cantidadclases" id="cantidadclases-1" value="2">
      2
    </label>
    <label class="radio-inline" for="cantidadclases-2">
      <input type="radio" name="cantidadclases" id="cantidadclases-2" value="3">
      3
    </label>
    <label class="radio-inline" for="cantidadclases-3">
      <input type="radio" name="cantidadclases" id="cantidadclases-3" value="4">
      4
    </label>
    <label class="radio-inline" for="cantidadclases-4">
      <input type="radio" name="cantidadclases" id="cantidadclases-4" value="5">
      5
    </label>
    <label class="radio-inline" for="cantidadclases-5">
      <input type="radio" name="cantidadclases" id="cantidadclases-5" value="6">
      6
    </label>
    <label class="radio-inline" for="cantidadclases-6">
      <input type="radio" name="cantidadclases" id="cantidadclases-6" value="7">
      7
    </label>
  </div>
</div>

<!-- Prepended text-->
    <!-- Consulta SQL para buscar el tipo de alumno -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipoestudiante"> Estudiante de </label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><span class="fa fa-fw fa-thumb-tack"></span>
        <?php
if (!empty($_GET['numerocuenta'])){

$qtipo = "SELECT tipo_estudiante FROM estudiantes WHERE num_cuenta ='" . $_GET['numerocuenta'] . "'";
$qtipo = mysqli_query($conexion, $qtipo);
 while($lineatipo = mysqli_fetch_assoc($qtipo)){
 echo $lineatipo['tipo_estudiante'];
}
 }

?>
        </span>

      </div></div></div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matricular"></label>
  <div class="col-md-8">
    <button id="finalizarmatricula" name="finalizarmatricula" class="btn btn-danger" onclick="window.location='matricula.php';" ><span class="fa fa-fw fa-eraser"></span> Borrar
     </button>

  </div>
</div>

</fieldset>
</form>

  <!-- / Fin del código del formulario -->

<!--Tabla -->
    <div class="container">
	<div class="row">


        <div class="col-md-11">
        <h4>Cursos Disponibles</h4>
         <div class="panel panel-primary filterable">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Código</th>
                    <th>Nombre clase</th>
                    <th>Plan de Estudio</th>
                     <th>Días</th>
                     <th>Sección</th>
                     <th>Inicio</th>
                     <th>Final</th>
                     <th>Docente</th>
                     <th>Salón</th>



                   </thead>
    <tbody>

<!-- Consulta SQL, primero verifica si el campo del buscador está vacío, si no lo está busca, muestra nombre, cuenta, saldo, carrera y
los horarios automáticamente se filtran al plan de estudio al cual pertenece el estudiante.

Primero busca el plan de estudio, luego el query de los horarios en los dos escenarios posibles, si no hay búsqueda muestra los horarios
generales de todas las carreras que están disponibles -->

        <!-- Primero buscando el plan de estudio del estudiante, al detectarlo procede a filtrar los horarios -->
<?php
if (!empty($_GET['numerocuenta'])){

$qcuentap = "SELECT planes_estudio.nombre_plan, planes_estudio.id_plan_estudio FROM `planes_estudio` INNER JOIN estudiantes INNER JOIN carreras WHERE estudiantes.id_carrera=carreras.id_carrera AND estudiantes.num_cuenta ='" . $_GET['numerocuenta'] . "' AND carreras.id_carrera=planes_estudio.id_carrera";
$qcuentap = mysqli_query($conexion, $qcuentap);
 while($lineaplan = mysqli_fetch_assoc($qcuentap)){
 echo ' ';
 echo '<center> <h3>';
 echo $lineaplan['nombre_plan'];
 $lineaplan['id_plan_estudio'];
 echo '</center></h3>';


            $sql = "SELECT programacion_cursos.id_programacion, programacion_cursos.codigo_prog_curso, cursos.nombre_curso, planes_estudio.nombre_plan, programacion_cursos.dias, programacion_cursos.seccion, programacion_cursos.hora_inicio, programacion_cursos.hora_termina,  empleados.nombres, aulas.codigo_aula FROM programacion_cursos INNER JOIN cursos INNER JOIN planes_estudio INNER JOIN empleados INNER JOIN aulas WHERE programacion_cursos.id_curso = cursos.id_curso AND programacion_cursos.id_plan_estudio = planes_estudio.id_plan_estudio AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_aula = aulas.id_aula AND programacion_cursos.id_plan_estudio='" . $lineaplan['id_plan_estudio'] . "' ORDER BY id_programacion;;";

$query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_assoc($query)){
               echo "    <tr>
    <td><input type='checkbox' class='checkthis' /></td>
    <td>$rows[codigo_prog_curso]</td>
    <td>$rows[nombre_curso]</td>
    <td>$rows[nombre_plan]</td>
    <td>$rows[dias]</td>
    <td>$rows[seccion]</td>
    <td>$rows[hora_inicio]</td>
    <td>$rows[hora_termina]</td>
    <td>$rows[nombres]</td>
    <td>$rows[codigo_aula]</td>
    ";
   }
 }
     // Si es alumno de primer ingreso, únicamente filtrará la carrera y el periodo "1" de las clases según su plan de estudio
    $qtipo = "SELECT tipo_estudiante FROM estudiantes WHERE num_cuenta ='" . $_GET['numerocuenta'] . "'";
$qtipo = mysqli_query($conexion, $qtipo);
 while($lineatipo = mysqli_fetch_assoc($qtipo)){
  $lineatipo['tipo_estudiante'];

  if ($lineatipo['tipo_estudiante']='Primer Ingreso'){

            $sql = "SELECT programacion_cursos.id_programacion, programacion_cursos.codigo_prog_curso, cursos.nombre_curso, planes_estudio.nombre_plan, programacion_cursos.dias, programacion_cursos.seccion, programacion_cursos.hora_inicio, programacion_cursos.hora_termina,  empleados.nombres, aulas.codigo_aula FROM programacion_cursos INNER JOIN cursos INNER JOIN planes_estudio INNER JOIN empleados INNER JOIN aulas INNER JOIN estudiantes WHERE programacion_cursos.id_curso = cursos.id_curso AND programacion_cursos.id_plan_estudio = planes_estudio.id_plan_estudio AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_aula = aulas.id_aula AND programacion_cursos.id_plan_estudio='" . $lineaplan['id_plan_estudio'] . "' AND estudiantes.num_cuenta='" . $_GET['numerocuenta'] . "' AND estudiantes.tipo_estudiante='" . $lineatipo['tipo_estudiante'] . " ORDER BY id_programacion;;";


}

 }
}

//Si la búsqueda está vacía hace una muestra sin filtro de todos los horarios sin buscar el plan de estudio del estudiante

 if (empty($_GET['numerocuenta'])){
            $sql = "SELECT programacion_cursos.id_programacion, programacion_cursos.codigo_prog_curso, cursos.nombre_curso, planes_estudio.nombre_plan, programacion_cursos.dias, programacion_cursos.seccion, programacion_cursos.hora_inicio, programacion_cursos.hora_termina,  empleados.nombres, aulas.codigo_aula FROM programacion_cursos INNER JOIN cursos INNER JOIN planes_estudio INNER JOIN empleados INNER JOIN aulas WHERE programacion_cursos.id_curso = cursos.id_curso AND programacion_cursos.id_plan_estudio = planes_estudio.id_plan_estudio AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_aula = aulas.id_aula ORDER BY id_programacion;;";

$query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_assoc($query)){
               echo "    <tr>
    <td><input type='checkbox' class='checkthis' /></td>
    <td>$rows[codigo_prog_curso]</td>
    <td>$rows[nombre_curso]</td>
    <td>$rows[nombre_plan]</td>
    <td>$rows[dias]</td>
    <td>$rows[seccion]</td>
    <td>$rows[hora_inicio]</td>
    <td>$rows[hora_termina]</td>
    <td>$rows[nombres]</td>
    <td>$rows[codigo_aula]</td>
    ";
            }
}
?>

<!-- Fin de la consulta -->

    </tbody>

</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>

            </div>

        </div>
	</div>
    </div>
<!-- Final de la tabla -->

<!-- Botón que inserta la información a la BD -->
    <?php

if (empty($_GET['numerocuenta'])) {
echo '<div align="center">
<button id="matricular" name="matricular" class="btn btn-primary disabled"><span class="fa fa-fw fa-check-square-o"></span> Matrícular</button>

<button id="imprimir" name="imprimir" class="btn btn-primary disabled" title="Imprimir horario"><span class="fa fa-fw fa-print"></span> Imprimir</button>

</div>';
$qcuenta = "SELECT saldo FROM estudiantes WHERE num_cuenta =''";
$qcuenta = mysqli_query($conexion, $qcuenta);
 while($lineasaldo = mysqli_fetch_assoc($qcuenta)){
$lineasaldo['saldo'];
}

}
if (!empty($_GET['numerocuenta'])) {
$qcuenta = "SELECT saldo FROM estudiantes WHERE num_cuenta ='" . $_GET['numerocuenta'] . "'";
$qcuenta = mysqli_query($conexion, $qcuenta);
 while($lineasaldo = mysqli_fetch_assoc($qcuenta)){
$lineasaldo['saldo'];
if ($lineasaldo['saldo']!='0') {
echo '<div align="center">
<button id="matricular" name="matricular" class="btn btn-primary disabled"><span class="fa fa-fw fa-check-square-o"></span> Matrícular</button>

<button id="imprimir" name="imprimir" class="btn btn-primary disabled" title="Imprimir horario"><span class="fa fa-fw fa-print"></span> Imprimir</button>

</div>';
}else {

 echo '<div align="center">
<button id="matricular" name="matricular" class="btn btn-primary"><span class="fa fa-fw fa-check-square-o"></span> Matrícular</button>

<button id="imprimir" name="imprimir" class="btn btn-primary" title="Imprimir horario"><span class="fa fa-fw fa-print"></span> Imprimir</button>

</div>';
}
 }
}




?>
            <br><br>


        </div>
        <!-- /#page-wrapper -->

            </div>
        <!-- /#page-wrapper -->



    <!-- /#wrapper -->


  </body>
</html>
