<?php

require'header.php';

require 'noautorizado.php';


?>

<!--Código HTML editable-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Programación del período académico
                            <small>Definir y almacenar horarios de las clases</small>
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

            </div><div align="center">
                <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Consulte y programe los horarios de clases de su carrera.
            </div></div>


            <!-- /.container-fluid -->
<?php
require'programacion.php';
?>
            <br><br>
            <div align="center">
<a href="reportehorarios.php" target="_blank" class="btn btn-primary btn-lg" role="button">Versión imprimible</a>
            </div>
            <br><br>

        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->


  </body>
</html>


