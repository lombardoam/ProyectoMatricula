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
                            Docentes
                            <small>Gestión de docentes</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Escritorio</a>
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
            <div align="center">

<?php

require'catedraticos.php';

?>
               <br><br>
            <div align="center">
<a href="reportedocentes.php" target="_blank" class="btn btn-primary btn-lg" role="button">Versión imprimible</a>
            </div>
            <br><br>

        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->


  </body>
</html>





