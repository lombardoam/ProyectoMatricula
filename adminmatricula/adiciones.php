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
