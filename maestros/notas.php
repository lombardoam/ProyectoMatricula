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

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/notas.js" type="text/javascript"></script>
    <script src="js/common.js" type="text/javascript"></script>
    <script src="js/bootbox.js" type="text/javascript"></script>
</head>

<body>
<input type="hidden" id="num_cuenta" value="<?php echo $_SESSION['num_cuenta']?>">
    <div id="wrapper">

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
                    <li class="active">
                        <a href="notas.php"><i class="glyphicon glyphicon-th-list"></i> Notas</a>
                    </li>
                    <li>
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
                            Docentes <small>Gestión de notas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-th-list"></i> Notas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Para empezar a utilizar la gestión de notas, debe configurar su evaluación.</strong> <a href="config.php" class="alert-link">Gestionar Evaluación</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>

            <div class="container-fluid">

              <form class="form-inline">
                 <div class="form-group">
                   <label for="select-clase">Clase: </label>
                     <select class="form-control" id="clases">
                     </select>
                  </div>
                 <div class="form-group">
                   <label> Sección:  </label><label id="seccion" class="text-uppercase"></label>
                  </div>
                 <div class="form-group">
                   <label for="select-seccion">Parcial: </label>
                     <select class="form-control" id="parciales">
                     </select>
                  </div>
                 <a href="javascript:" class="btn btn-default" id="seleccionar">Seleccionar</a>
               </form>
               <h2 class="page-header">Evaluaciones</h2>
               <table class="table table-hover">
                  <thead>
                     <tr id="header">
                     </tr>
                  </thead>
                  <tbody>
                     <tr id="body">
                        <td>1</td>
                        <td>20121019</td>
                        <td>Ricardo</td>
                        <td>Valladares</td>
                        <td><input type="text" name="" id="" placeholder="0" class="form-control"></td>
                        <td><input type="text" name="" id="" placeholder="0" class="form-control"></td>
                     </tr>

                  </tbody>
               </table>
                  <a href="config.php" type="button" class="btn-lg btn-primary">Guardar notas</a>
                  <a href="config.php" type="button" class="btn btn-default">Gestionar Evaluación</a>
            </div><br>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
