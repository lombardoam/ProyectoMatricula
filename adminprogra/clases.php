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
                            Clases
                            <small>Información de las clases con sus UV</small>
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
            <!-- /.container-fluid -->
            <div align="center">
                <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Consulte las asignaturas de su carrera
                        </div>
                            <?php
            require'cursos.php';
            ?>


            <div align="right">
<a href="reporteclases.php" target="_blank" class="btn btn-primary" role="button" title="Versión imprimible"><i class="fa fa-fw fa-print"></i></a>
            </div>
            <br><br>
            </div>

        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->


  </body>
</html>
