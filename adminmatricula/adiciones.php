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
    <button id="consultas" name="consultas" class="btn btn-primary">Historial</button>
  </div>
</div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matricular"></label>
  <div class="col-md-8">
    <button id="imprimir" name="imprimir" class="btn btn-info">Imprimir</button>
    <button id="matricular" name="matricular" class="btn btn-primary">Adicionar Clases</button>
    <button id="finalizarmatricula" name="finalizarmatricula" class="btn btn-danger">Finalizar</button>
  </div>
</div>

</fieldset>
</form>



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





    </tbody>

</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
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
