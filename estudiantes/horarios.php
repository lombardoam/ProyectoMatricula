<?php

require'header.php';


?>

<!--Código HTML editable-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Programación del período académico
                            <small>Horarios disponibles de los cursos</small>
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
<?php
require'programacion.php';
?>
            <div align="right">
<a href="reportehorarios.php" target="_blank" class="btn btn-primary" role="button" title="Versión imprimible"><i class="fa fa-fw fa-print"></i></a>
            </div>
            <br><br>

        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->


  </body>
</html>


