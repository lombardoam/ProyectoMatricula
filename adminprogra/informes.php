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
                            Reportes

                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Escritorio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Programación
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                        </div>
                                                  <div class="alert alert-info">

                                                      Aquí se encuentran versiones imprimibles de las tablas más importantes del sistema.<br />
                </div>

            </div>
            <!-- /.container-fluid -->
            <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Programación académica</h3>
                            </div>
                            <div class="panel-body">
                               <a href="reportehorarios.php" target="_blank"><img src="images/libreta.jpg" width="70%" height="70%" /></a>
                            </div>
                        </div>

        </div>

                       <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Asignaturas existentes</h3>
                            </div>
                            <div class="panel-body">
                               <a href="reporteclases.php" target="_blank"><img src="images/libreta.jpg" width="70%" height="70%" /></a>
                            </div>
                        </div>

        </div>

                       <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Docentes universitarios</h3>
                            </div>
                            <div class="panel-body">
                               <a href="reportedocentes.php" target="_blank"><img src="images/libreta.jpg" width="70%" height="70%"  /></a>
                            </div>
                        </div>

        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->


  </body>
</html>
