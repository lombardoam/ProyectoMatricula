<?php

require'header.php';

require 'noautorizado.php';

?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
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
    <div align="center"><legend></legend></div>

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
    <button id="consultas" name="consultas" class="btn btn-success">Historial</button>
    <button id="saldo" name="saldo" class="btn btn-danger">Saldo</button>
  </div>
</div>


<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="saldoalumno">Saldo</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Cantidad</span>
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
    <button id="imprimir" name="imprimir" class="btn btn-info">Imprimir horario</button>
    <button id="matricular" name="matricular" class="btn btn-success">Matricular</button>
    <button id="finalizarmatricula" name="finalizarmatricula" class="btn btn-danger">Finalizar Matrícula</button>
  </div>
</div>

</fieldset>
</form>



            <!-- / Fin del código del formulario -->
            <!--tabla -->
    <div class="container">
	<div class="row">

        <div class="col-md-12">
        <h4>Clases Disponibles</h4>
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


                   </thead>
    <tbody>

    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>IIT2000</td>
    <td>Ingeniería de Software I</td>
    <td>L-M-V</td>
    <td>A</td>
    <td>13:50</td>
    <td>14:40</td>
    <td>Marco Antonio</td>
    <td>Ingeniería en Infotecnología</td>

    </tr>

    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>IIT2001</td>
    <td>Ingeniería de Software II</td>
    <td>L-M-V</td>
    <td>B</td>
    <td>14:50</td>
    <td>15:40</td>
    <td>Marco Antonio</td>
    <td>Ingeniería en Infotecnología</td>

    </tr>

    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>DER1001</td>
    <td>Derecho Constitucional</td>
    <td>L-M-V</td>
    <td>B</td>
    <td>16:50</td>
    <td>18:40</td>
    <td>Claudia</td>
    <td>Derecho</td>

    </tr>



    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>ARQ2000</td>
    <td>Diseño I I</td>
    <td>L-M-V</td>
    <td>A</td>
    <td>15:50</td>
    <td>18:40</td>
    <td>Mejía</td>
    <td>Arquitectura</td>

    </tr>


    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>MAT1001</td>
    <td>Orientación Universitaria</td>
    <td>L-M-V</td>
    <td>A</td>
    <td>6:50</td>
    <td>8:40</td>
    <td>Martinez</td>
    <td>Ingeniería Civil</td>

    </tr>





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
                <br><br>


        </div>
        <!-- /#page-wrapper -->

            </div>
        <!-- /#page-wrapper -->



    <!-- /#wrapper -->


  </body>
</html>
