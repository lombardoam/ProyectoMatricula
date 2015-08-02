<?php
   session_start();
   if(!(
      isset($_SESSION['nombre']) &&
      isset($_SESSION['apellido']) &&
      isset($_SESSION['usuario']) &&
      isset($_SESSION['tipo_usuario']) &&
      isset($_SESSION['num_cuenta'])
      )
   ){
      header('Location:../index.php?no_aut');
   }

require'header.php';

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Docentes de la UJCV
                            <small>Listado de docentes</small>
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
            <?php
            require'catedraticos.php';
            ?>

                <br><br>
            </div>

        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->


  </body>
</html>
