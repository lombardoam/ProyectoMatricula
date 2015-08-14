<?php

require'header.php';

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

<form class="form-horizontal">
    <script src="js/table.js"></script>
<fieldset>

<!-- Form Name -->
    <div align="center"></div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numerocuenta">Número de cuenta</label>
  <div class="col-md-2">
    <input id="numerocuenta" name="numerocuenta" type="search" placeholder="Buscar alumno" class="form-control input-md" required="">
    <p class="help-block">Introduzca la cuenta</p>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="consultas">Consultar</label>
  <div class="col-md-8">
    <button id="consultas" name="consultas" class="btn btn-primary">Historial</button>
    <button id="saldo" name="saldo" class="btn btn-primary">Saldo</button>
  </div>
</div>


<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="saldoalumno">Saldo</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Monto</span>
      <input id="saldoalumno" name="saldoalumno" class="form-control" placeholder="" type="text">
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

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" class="input-small" for="tipomatricula">Tipo de matrícula</label>
  <div class="col-md-4">
    <select id="tipomat" name="tipomat" class="form-control">
      <option value="1">Reingreso</option>
      <option value="2">Primer Ingreso</option>
      <option value="3">Élite</option>
    </select>
  </div>
</div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matricular"></label>
  <div class="col-md-8">
    <button id="finalizarmatricula" name="finalizarmatricula" class="btn btn-danger">Finalizar Matrícula</button>

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
<!-- Consulta SQL -->
<?php
            $conexion = mysqli_connect('localhost','root','','matricula');
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
<div align="center">
<button id="matricular" name="matricular" class="btn btn-success">Realizar Matrícula</button>
<button id="imprimir" name="imprimir" class="btn btn-primary">Imprimir horario</button>

</div>
<!-- Botón que inserta la información a la BD -->
                <br><br>


        </div>
        <!-- /#page-wrapper -->

            </div>
        <!-- /#page-wrapper -->



    <!-- /#wrapper -->


  </body>
</html>
