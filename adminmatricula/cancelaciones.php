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
                            <small>Cancelación de Clases</small>
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
    <div align="center"><legend></legend></div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numerocuenta"> <span class="fa fa-fw fa-search"></span> Número de cuenta</label>
  <div class="col-md-2">
    <input id="numerocuenta" name="numerocuenta" type="search" placeholder="Buscar alumno" class="form-control input-md" required="">
  </div>
</div>

 <!-- Consulta SQL para buscar los nombres y apellidos de los estudiantes tomando el número de cuenta enviado en el buscador -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombrealumno">Nombre</label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><span class="fa fa-fw fa-user"></span>
       <?php
$userr;
            if (!empty ($_GET['numerocuenta'])){


            $qcuenta = "SELECT nombres,apellidos,id_estudiante FROM estudiantes WHERE num_cuenta ='" . $_GET['numerocuenta'] . "'";
            $qcuenta = mysqli_query($conexion, $qcuenta);
            while($lineanombres = mysqli_fetch_assoc($qcuenta)){
            echo $lineanombres['nombres'];
            echo ' ';
            echo $lineanombres['apellidos'];


            }
            }

       ?>
      </span>

      </div>
    </div>
</div>



</fieldset>
</form>



            <!-- / Fin del código del formulario -->
            <!--tabla -->
    <div class="container">
	<div class="row">

        <div class="col-md-12">
        <h4>Clases a Cancelar</h4>
         <div class="panel panel-primary filterable">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                    <th>Código</th>
                    <th>Nombre clase</th>
                    <th>Días</th>
                    <th>Sección</th>
                    <th>Hora inicial</th>
                    <th>Hora final</th>
                    <th>Docente</th>
                    <th>Plan de Estudio</th>
                    <th>Salón</th>

                   </thead>
    <tbody>

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



   $sql =  "SELECT * FROM matriculas INNER JOIN programacion_cursos ON programacion_cursos.id_programacion = matriculas.id_programacion INNER JOIN cursos ON cursos.id_curso = programacion_cursos.id_curso INNER JOIN aulas ON programacion_cursos.id_aula = aulas.id_aula INNER JOIN planes_estudio ON planes_estudio.id_plan_estudio = programacion_cursos.id_plan_estudio INNER JOIN empleados ON empleados.id_empleado = programacion_cursos.id_empleado";





$query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_assoc($query)){
               echo "    <tr>
    <td><form action='cancelarclase.php' method='post'></td>
   <td> <input type='checkbox' name='check_list[]' value=$rows[id_matricula]></td>
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
}
?>
    </tbody>

</table>


<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>


            </div>

        </div>
                 <input type="hidden" value="<?php echo $userr ?>" name="under" />
<div class="form-group">
  <label class="col-md-4 control-label" for="cancelar"></label>
  <div class="col-md-8">
    <td><input type='submit'  value="Cancelar clase" name="cancelar clase" class="btn btn-danger"/></form></td>
     </button>

  </div>
</div>
	</div>

    </div>
                <br><br>


        </div>


  </body>
</html>
