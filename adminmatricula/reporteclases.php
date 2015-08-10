<?php
    session_start();
   if(!(
      isset($_SESSION['nombre']) &&
      isset($_SESSION['apellido']) &&
      isset($_SESSION['usuario']) &&
      isset($_SESSION['tipo_usuario']) &&
      isset($_SESSION['num_cuenta']) &&
      isset($_SESSION['id_plan_estudio'])
      )
   ){
      header('Location:../index.php?no_aut');
   } else if($_SESSION['tipo_usuario'] != 4){
      header('Location:../index.php?no_aut');
   }
?>

<meta charset="UTF-8">

<!--Código HTML editable-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div align="center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cursos
                            <small> - Información de las clases con sus UV</small>
                        </h1>
                        <ol class="breadcrumb">

                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

            <div align="center">

<?php
require'cursos.php';
?>

            <br><br>

  <form>
<input type='button' onclick='window.print();' value='Impresión' class="btn btn-primary btn-lg" role="button">
                </form>           </div>

            <br><br>

        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->


  </body>
</html>
