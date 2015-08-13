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
<fieldset>

<!-- Form Name -->
    <div align="center"><legend>Matrícula de estudiantes</legend></div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numerocuenta">Número de cuenta</label>
  <div class="col-md-2">
    <input id="numerocuenta" name="numerocuenta" type="search" placeholder="Buscar alumno" class="form-control input-md" required="">
    <p class="help-block">Introduzca el número de cuenta del alumno</p>
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

          <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="verhorarios"></label>
  <div class="col-md-4">
    <button id="verhorarios" name="verhorarios" class="btn btn-primary">Ver horarios</button>
  </div>
</div>


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
  <label class="col-md-4 control-label" for="clase1">Clase 1</label>
  <div class="col-md-4">
    <select id="clase1" name="clase1" class="form-control">
      <option value="Clase 1">Clase 1</option>
      <option value="Clase 22">Clase 2</option>
    </select>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="secciones1">Secciones</label>
  <div class="col-md-4">
    <label class="radio-inline" for="secciones1-0">
      <input type="radio" name="secciones1" id="secciones1-0" value="A" checked="checked">
      A
    </label>
    <label class="radio-inline" for="secciones1-1">
      <input type="radio" name="secciones1" id="secciones1-1" value="B">
      B
    </label>
    <label class="radio-inline" for="secciones1-2">
      <input type="radio" name="secciones1" id="secciones1-2" value="C">
      C
    </label>
    <label class="radio-inline" for="secciones1-3">
      <input type="radio" name="secciones1" id="secciones1-3" value="D">
      D
    </label>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="estadoclase1">Estado de clase</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Asignatura</span>
      <input id="estadoclase1" name="estadoclase1" class="form-control" placeholder="" type="text">
    </div>

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="clase2">Clase 2</label>
  <div class="col-md-4">
    <select id="clase2" name="clase2" class="form-control">
      <option value="Clase 1">Clase 1</option>
      <option value="Clase 2">Clase 2</option>
    </select>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="secciones2">Secciones</label>
  <div class="col-md-4">
    <label class="radio-inline" for="secciones2-0">
      <input type="radio" name="secciones2" id="secciones2-0" value="1" checked="checked">
      A
    </label>
    <label class="radio-inline" for="secciones2-1">
      <input type="radio" name="secciones2" id="secciones2-1" value="2">
      B
    </label>
    <label class="radio-inline" for="secciones2-2">
      <input type="radio" name="secciones2" id="secciones2-2" value="3">
      C
    </label>
    <label class="radio-inline" for="secciones2-3">
      <input type="radio" name="secciones2" id="secciones2-3" value="4">
      D
    </label>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="estadoclase2">Estado de clase</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Asignatura</span>
      <input id="estadoclase2" name="estadoclase2" class="form-control" placeholder="" type="text">
    </div>

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="clase3">Clase 3</label>
  <div class="col-md-4">
    <select id="clase3" name="clase3" class="form-control">
      <option value="1">Clase 1</option>
      <option value="2">Clase 2</option>
    </select>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="secciones3">Secciones</label>
  <div class="col-md-4">
    <label class="radio-inline" for="secciones3-0">
      <input type="radio" name="secciones3" id="secciones3-0" value="1" checked="checked">
      A
    </label>
    <label class="radio-inline" for="secciones3-1">
      <input type="radio" name="secciones3" id="secciones3-1" value="2">
      B
    </label>
    <label class="radio-inline" for="secciones3-2">
      <input type="radio" name="secciones3" id="secciones3-2" value="3">
      C
    </label>
    <label class="radio-inline" for="secciones3-3">
      <input type="radio" name="secciones3" id="secciones3-3" value="4">
      D
    </label>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="estadoclase3">Estado de clase</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Asignatura</span>
      <input id="estadoclase3" name="estadoclase3" class="form-control" placeholder="" type="text">
    </div>

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="clase4">Clase 4</label>
  <div class="col-md-4">
    <select id="clase4" name="clase4" class="form-control">
      <option value="1">Clase 1</option>
      <option value="2">Clase 2</option>
    </select>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="secciones4">Secciones</label>
  <div class="col-md-4">
    <label class="radio-inline" for="secciones4-0">
      <input type="radio" name="secciones4" id="secciones4-0" value="1" checked="checked">
      A
    </label>
    <label class="radio-inline" for="secciones4-1">
      <input type="radio" name="secciones4" id="secciones4-1" value="2">
      B
    </label>
    <label class="radio-inline" for="secciones4-2">
      <input type="radio" name="secciones4" id="secciones4-2" value="3">
      C
    </label>
    <label class="radio-inline" for="secciones4-3">
      <input type="radio" name="secciones4" id="secciones4-3" value="4">
      D
    </label>
  </div>
</div>

    <!-- Button -->
    <div align="center">
<div class="form-group">
  <label class="col-md-4 control-label" for="agregar"></label>
  <div class="col-md-4">
    <button id="agregar" name="agregar" class="btn btn-warning">Agregar Clase</button>
  </div>
        </div></div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matricular">Validación</label>
  <div class="col-md-8">
    <button id="matricular" name="matricular" class="btn btn-success">Matricular</button>
    <button id="imprimir" name="imprimir" class="btn btn-info">Imprimir horario</button>
  </div>
</div>

<!-- Button -->
    <div align="center">
<div class="form-group">
  <label class="col-md-4 control-label" for="finalizarmatricula"></label>
  <div class="col-md-4">
    <button id="finalizarmatricula" name="finalizarmatricula" class="btn btn-danger">Finalizar Matrícula</button>
  </div>
        </div></div>

</fieldset>
</form>



            <!-- / Fin del código del formulario -->
                <br><br>


        </div>
        <!-- /#page-wrapper -->

            </div>
        <!-- /#page-wrapper -->



    <!-- /#wrapper -->


  </body>
</html>
