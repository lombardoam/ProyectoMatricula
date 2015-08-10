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
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Docentes | Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="js/bootbox.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/common.js" type="text/javascript"></script>
</head>

<body>
   <div id="hidden"></div>
   <input type="hidden" id="num_cuenta" value="<?php echo $_SESSION['num_cuenta']?>">
   <input type="hidden" id="id_config" value="">
   <div id="wrapper">

        <!-- Navigation -->
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Portal del Maestro</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nombre'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="notas.php"><i class="glyphicon glyphicon-th-list"></i> Notas</a>
                    </li>
                    <li class="active">
                        <a href="config.php"><i class="glyphicon glyphicon-cog"></i> Gestionar Evaluación</a>
                    </li>
                    <li>
                        <a href="asistencias.php"><i class="glyphicon glyphicon-tasks"></i> Asistencias</a>
                    </li>
                    <li>
                        <a href="reporte.php"><i class="glyphicon glyphicon-tasks"></i> Reportes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Configuración de las evaluaciones
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-cog"></i> Gestionar Evaluaciones
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>

            <div class="container-fluid">
               <h2 class="page-header">General</h2>
               <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="fa fa-info-circle"></i> <strong> Nota!</strong> Asegurese de guardar el tipo de evaluación antes de guardar las evaluaciones por parcial.
               </div>
               <form class="form-inline" id="form_tipo_eval">
                 <div class="form-group">
                   <label for="select-clase">Tipo de evaluación: </label>
                     <select class="form-control" id="tipo_evaluacion">
                     </select>
                  </div> <a href="javascript:" type="button" class="btn btn-success" onclick="guardar()">Guardar</a>
               </form><br>
               <form class="form-inline">
                 <div class="form-group">
                   <label for="select-clase">Clase: </label>
                     <select class="form-control" id="clases">
                     </select>
                  </div>
                 <div class="form-group">
                   <label> Sección:  </label><label id="seccion" class="text-uppercase"></label>
                  </div>
                 <button type="submit" class="btn btn-default">Seleccionar</button>
               </form>
               <br>

               <h2 class="page-header">Evaluaciones</h2>
               <div id="parciales">
                  <!--Petición de ajax-->
               </div>

            </div><br>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
