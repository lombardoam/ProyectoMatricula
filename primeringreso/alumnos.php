<?php

require 'header.php';
require 'noautorizado.php';

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Alumnos
                            <small>Alumnos matriculados de Primer Ingreso</small>
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

            </div>          <div align="center">
                            <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Consulte e ingrese al sistema los alumnos de primer ingreso de la universidad.
            </div></div>
            <!-- /.container-fluid -->
            <!-- /.Colocar aquí el código y contenido que se desee poner en la página -->
            <div align="center">

<?php

require'estudiantes.php';

?>
               <br><br>
            <div align="center">
<a href="reportealumnos.php" target="_blank" class="btn btn-primary btn-lg" role="button">Versión imprimible</a>
            </div>
            <br><br>

        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->


  </body>
</html>

