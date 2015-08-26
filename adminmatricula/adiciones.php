<?php

require'header.php';
require 'conexion.php';
require 'noautorizado.php';

?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sistema de matrícula
                            <small>Adición de Clases</small>
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

<form name="form" class="form-horizontal" method="POST" role="form" action="adicion_process.php">

<fieldset>

<!-- Form Name -->
<?php
if (empty($_POST['numerocuenta'])){
    echo '
<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numerocuenta"><span class="fa fa-fw fa-search"></span> Número de cuenta</label>
  <div class="col-md-2">
    <input id="numerocuenta" name="numerocuenta" type="search" placeholder="Buscar alumno" class="form-control input-md">
     </div>
</div>';
    }
?>
    <!-- Prepended text-->
    <!-- Consulta SQL para buscar los nombres y apellidos de los estudiantes tomando el número de cuenta enviado en el buscador -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombrealumno">Nombre</label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><span class="fa fa-fw fa-user"></span>
       <?php
            if (!empty ($_POST['numerocuenta'])){
            $qcuenta = "SELECT nombres,apellidos FROM estudiantes WHERE num_cuenta ='" . $_POST['numerocuenta'] . "'";
            $qcuenta = mysqli_query($conexion, $qcuenta);
            while($lineanombres = mysqli_fetch_array($qcuenta)){
            echo $lineanombres['nombres'];
            echo ' ';
            echo $lineanombres['apellidos'];
            }


$qcuenta = "SELECT nombres,apellidos FROM estudiantes WHERE num_cuenta ='" . $_POST['numerocuenta'] . "'";
$qcuenta = mysqli_query($conexion, $qcuenta);
$registroscuenta = mysqli_num_rows($qcuenta);
    if($registroscuenta==0){
        echo '           <div align="center">
                            <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            No hay alumnos con este número de cuenta
                </div></div>';
}
            }



       ?>
      </span>

      </div>
    </div>
</div>

    <!-- Prepended text-->
    <!-- Consulta SQL para buscar el tipo de alumno -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipoestudiante"> Estudiante de </label>
  <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"><span class="fa fa-fw fa-thumb-tack"></span>
        <?php
$id_estu;
if (!empty($_POST['numerocuenta'])){

$qtipo = "SELECT tipo_estudiante,id_estudiante,num_cuenta FROM estudiantes WHERE num_cuenta ='" . $_POST['numerocuenta'] . "'";
$qtipo = mysqli_query($conexion, $qtipo);
 while($lineatipo = mysqli_fetch_array($qtipo)){
 echo $lineatipo['tipo_estudiante'];
   $id_estu = $lineatipo['num_cuenta'];
}
 }

?>
        </span>

      </div>
    </div>
</div>
          <!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="adicionar"></label>
  <div class="col-md-8">
    <button id="finalizaradicion" name="finalizaradicion" class="btn btn-danger" onclick="window.location='adiciones.php';" ><span class="glyphicon glyphicon-remove"></span> Cancelar Adición de Clase
     </button>

  </div>
</div>

            <!-- / Fin del código del formulario -->
            <!--tabla -->
    <div class="container">
	<div class="row">

        <div class="col-md-12">
        <h4>Clases a Adicionar</h4>
         <div class="panel panel-primary filterable">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                    <th>ID</th>
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

<?php

function pegar($clase,$numcuent,$conexion )
{

   $requisitos=" SELECT * FROM historiales_academicos WHERE historiales_academicos.num_cuenta = $numcuent  AND historiales_academicos.estado = 'Aprobado'AND historiales_academicos.id_curso=$clase ";

    $result = mysqli_query($conexion, $requisitos);

    if(count($result)===1)
    {
    return NULL;
    }

return(count($result));


}

$pla_estudio;
if (!empty($_POST['numerocuenta'])){

$qcuentap = "SELECT planes_estudio.nombre_plan, planes_estudio.id_plan_estudio FROM `planes_estudio` INNER JOIN estudiantes INNER JOIN carreras WHERE estudiantes.id_carrera=carreras.id_carrera AND estudiantes.num_cuenta ='" . $_POST['numerocuenta'] . "' AND carreras.id_carrera=planes_estudio.id_carrera";
$qcuentap = mysqli_query($conexion, $qcuentap);
    $registroscuenta = mysqli_num_rows($qcuenta);
    if($registroscuenta==0){
        echo '           <div align="center">
                            <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            No hay registros de horarios
                </div></div>';
}else{
 while($lineaplan = mysqli_fetch_array($qcuentap)){
 echo ' ';
 echo '<center> <h3>';
 echo $lineaplan['nombre_plan'];
$pla_estudio= $lineaplan['id_plan_estudio'];

 echo '</center></h3>';

$sql= "SELECT * FROM programacion_cursos INNER JOIN cursos ON cursos.id_curso = programacion_cursos.id_curso INNER JOIN planes_estudio ON planes_estudio.id_plan_estudio = $pla_estudio INNER JOIN empleados ON empleados.id_empleado = programacion_cursos.id_empleado INNER JOIN aulas ON aulas.id_aula= programacion_cursos.id_aula WHERE programacion_cursos.id_curso NOT IN (SELECT programacion_cursos.id_curso FROM programacion_cursos INNER JOIN historiales_academicos ON historiales_academicos.id_curso = programacion_cursos.id_curso WHERE historiales_academicos.estado ='Aprobado' AND historiales_academicos.num_cuenta=$id_estu )AND programacion_cursos.id_plan_estudio =$pla_estudio  ORDER BY programacion_cursos.id_programacion";


     $i = 0;


$query = mysqli_query($conexion, $sql);


     $sql= "SELECT * FROM cursos INNER JOIN programacion_cursos on programacion_cursos.id_curso = cursos.id_curso INNER JOIN planes_estudio ON planes_estudio.id_plan_estudio = cursos.id_plan_estudio INNER JOIN empleados ON empleados.id_empleado = programacion_cursos.id_empleado INNER JOIN aulas ON aulas.id_aula = programacion_cursos.id_aula WHERE cursos.id_plan_estudio =$pla_estudio
OR programacion_cursos.id_curso != (SELECT cursos.id_curso FROM historiales_academicos INNER JOIN evaluaciones ON historiales_academicos.id_evaluacion = evaluaciones.id_evaluacion INNER JOIN configuraciones ON configuraciones.id_configuracion = evaluaciones.id_configuracion INNER JOIN programacion_cursos ON programacion_cursos.id_programacion = configuraciones.id_programacion INNER JOIN cursos ON cursos.id_curso = programacion_cursos.id_programacion INNER JOIN empleados ON empleados.id_empleado = programacion_cursos.id_empleado INNER JOIN planes_estudio ON planes_estudio.id_plan_estudio = programacion_cursos.id_plan_estudio INNER JOIN aulas ON aulas.id_aula = programacion_cursos.id_aula WHERE historiales_academicos.num_cuenta =$id_estu AND historiales_academicos.estado ='Aprobado' AND programacion_cursos.estatus_curso='Activo'";


            while($rows = mysqli_fetch_array($query))
            {

     $requisitos="SELECT id_requisito,requisitos_curso.id_requisito1,requisitos_curso.id_requisito2,requisitos_curso.id_requisito3 FROM  requisitos_curso WHERE                      requisitos_curso.id_curso = $rows[id_curso]  and requisitos_curso.id_plan_estudio =$pla_estudio";

                $status =1;

                $consulta = mysqli_query($conexion, $requisitos);
                {

                 while($row = mysqli_fetch_array($consulta))
                 {

                     if($row['id_requisito1'])
                     {
                         if( pegar($row['id_requisito1'],$id_estu,$conexion))
                         {
                             $status =1;

                         }
                         else
                         {
                             $status =0;
                           break;
                         }
                     }


                     if($row['id_requisito2'])
                     {


                         if( pegar($row['id_requisito2'],$id_estu,$conexion))
                         {
                             $status =1;
                         }
                         else
                         {
                             $status =0;
                           break;
                         }
                     }

                     if($row['id_requisito3'])
                     {

                         if( pegar($row['id_requisito3'],$id_estu,$conexion))
                         {
                             $status =1;

                         }
                         else
                         {
                             $status =0;
                           break;
                         }
                     }

                 }

                }

                if($status ===1)
                {
            echo "<tr>
    <td><input class='checkthis' type='checkbox' name='check[]' id='check' value='$i++' /></td>
    <td><input class='id' type='hidden' name='id_programacion[]' readonly id='id_programacion' value='$rows[id_programacion]'> $rows[id_programacion]</td>
    <td><input class='codigo' type='hidden' name='codigo[]' readonly id='codigo' value='$rows[codigo_prog_curso]'> $rows[codigo_prog_curso]</td>
    <td><input class='asignatura' type='hidden' name='nombre[]' readonly id='nombre' value='$rows[nombre_curso]'>$rows[nombre_curso]</td>
    <td><input class='plan' type='hidden' name='plan[]' readonly id='plan' value='$rows[nombre_plan]'> $rows[nombre_plan]</td>
    <td><input class='dias' type='hidden' name='dias[]' readonly id='dias' value='$rows[dias]'> $rows[dias]</td>
    <td><input class='seccion' type='hidden' name='seccion[]' readonly id='seccion' value='$rows[seccion]'>$rows[seccion]</td>
    <td><input class='inicio'type='hidden' name='inicio[]' readonly id='inicio' value='$rows[hora_inicio]'>$rows[hora_inicio]</td>
    <td><input class='termina' type='hidden' name='termina[]' readonly id='termina' value='$rows[hora_termina]'>$rows[hora_termina]</td>
    <td><input class='docente' type='hidden' name='nombres[]' readonly id='nombres' value='$rows[nombres]'>$rows[nombres]</td>
    <td><input class='aula' type='hidden' name='aula[]' readonly id='aula' value='$rows[codigo_aula]'>$rows[codigo_aula]</td>
    <input class='cuenta' type='hidden' name='cuenta[]' readonly id='cuenta' value='" .$_POST['numerocuenta'] . "'>
    ";
                }
?>
                 <!-- Inicio de programación de botón de guardado, únicamente pregunta con un mensaje de alerta si eliges no, regresa a la página -->
            <!-- Modal -->
<div class="modal fade" id="MatriculaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sistema de matrícula</h4>
      </div>
      <div class="modal-body"><div align="center">
        ¿Desea guardar la configuración elegida de Adición de clase para el estudiante?
          </div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <input type= "submit" class="btn btn-primary" name="submit" id="submit"  value="Sí"/>

      </div>
    </div>

  </div>
</div>
        </fieldset>

</form>
<?php

    if(isset($_POST['submit'])){
    $checkthis=$_POST['check'];
    $id=$_POST['id_programacion'];
;


    foreach($checkthis as $i){

        $query = mysqli_query($conexion, "INSERT INTO matriculas (num_cuenta, id_programacion)
       VALUES('" . $_POST['numerocuenta']. "', '{$id [$i]}')");

   }
    }
 }
 }
}

}



//Si la búsqueda está vacía hace una muestra sin filtro de todos los horarios sin buscar el plan de estudio del estudiante

 if (empty($_POST['numerocuenta'])){
            $sql = "SELECT programacion_cursos.id_programacion, programacion_cursos.codigo_prog_curso, cursos.nombre_curso, planes_estudio.nombre_plan, programacion_cursos.dias, programacion_cursos.seccion, programacion_cursos.hora_inicio, programacion_cursos.hora_termina,  empleados.nombres, aulas.codigo_aula FROM programacion_cursos INNER JOIN cursos INNER JOIN planes_estudio INNER JOIN empleados INNER JOIN aulas WHERE programacion_cursos.id_curso = cursos.id_curso AND programacion_cursos.id_plan_estudio = planes_estudio.id_plan_estudio AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_aula = aulas.id_aula AND programacion_cursos.estatus_curso='Activo' ORDER BY id_programacion;;";

$query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_array($query)){
               echo "    <tr>
    <td><input type='checkbox' class='checkthis' /></td>
    <td>$rows[id_programacion]</td>
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

<br><br>
<?php

if (empty($_POST['numerocuenta'])) {
echo '<div align="center">
<button id="adicionar" name="adicionar" class="btn btn-primary disabled"><span class="fa fa-fw fa-check-square-o"></span>Adicionar</button>

<button id="imprimir" name="imprimir" class="btn btn-primary disabled" title="Imprimir horario"><span class="fa fa-fw fa-print"></span> Imprimir</button><br><br>

</div>';
$qcuenta = "SELECT saldo FROM estudiantes WHERE num_cuenta =''";
$qcuenta = mysqli_query($conexion, $qcuenta);
 while($lineasaldo = mysqli_fetch_array($qcuenta)){
$lineasaldo['saldo'];
}

}
if (!empty($_POST['numerocuenta'])) {
$qcuenta = "SELECT saldo FROM estudiantes WHERE num_cuenta ='" . $_POST['numerocuenta'] . "'";
$qcuenta = mysqli_query($conexion, $qcuenta);
 while($lineasaldo = mysqli_fetch_array($qcuenta)){
$lineasaldo['saldo'];
if ($lineasaldo['saldo']!='0') {
echo '<div align="center">
<button id="adicionar" name="adicionar" class="btn btn-primary disabled"><span class="fa fa-fw fa-check-square-o"></span>Adicionar</button>

<button id="imprimir" name="imprimir" class="btn btn-primary disabled" title="Imprimir horario"><span class="fa fa-fw fa-print"></span> Imprimir</button>

</div>';
}else {

    //fa fa-fw fa-check-square-o
 echo '<div align="center">
<input type="button" id="adicionar" name="adicionar" data-toggle="modal" data-target="#MatriculaModal" class="btn btn-primary" value="Adicionar"</input>

<button id="imprimir" name="imprimir" class="btn btn-primary" title="Imprimir horario"><span class="fa fa-fw fa-print"></span> Imprimir</button>

</div>';
}
 }
}

?>


        <script>
            var $table = $('table'),
    $bodyCells = $table.find('tbody tr:first').children(),
    colWidth;

// Get the tbody columns width array
colWidth = $bodyCells.map(function() {
    return $(this).width();
}).get();

// Set the width of thead columns
$table.find('thead tr').children().each(function(i, v) {
    $(v).width(colWidth[i]);
});
        </script>


            <br><br>


        </div>
        <!-- /#page-wrapper -->

            </div>
        <!-- /#page-wrapper -->



    <!-- /#wrapper -->


  </body>
</html>

