<?php
include 'conexion.php';
session_start();
if(!empty($_POST['NUMEROCUENTA']))
{
$_SESSION['cuenta']=$_POST['NUMEROCUENTA'];
$sql="SELECT * FROM estudiantes WHERE num_cuenta='".$_POST['NUMEROCUENTA']."'";
$result=mysqli_query($conexion,$sql);
while($row=mysqli_fetch_row($result))
{
  $_SESSION['completo']='&nbsp'.$row[2].'&nbsp'.$row[3].'';
  $_SESSION['cuentanum']=$row[1];
}
}
   if(!(
      isset($_SESSION['nombre']) &&
      isset($_SESSION['apellido']) &&
      isset($_SESSION['usuario']) &&
      isset($_SESSION['tipo_usuario']) &&
      isset($_SESSION['num_cuenta'])
      )
   ){
      header('Location:../index.php?no_aut');
   } else if($_SESSION['tipo_usuario'] != 5){
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

    <title>Contabilidad</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

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
                <img src="images/ujcv.png" width="50px" height="55px" align="left" /> <a class="navbar-brand" href="index.php">Portal de Registro Contable de Matrícula</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuracion </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesion </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- MENU LATERAL-->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>Mensualidades</a>
                    </li>
                    <li class="active">
                        <a href="historial.php"><i class="fa fa-fw fa-dashboard"></i>Historial de Pagos</a>
                    </li>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Contabilidad <small>Pagos del Alumno</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Generar Pagos de Mensualidades
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- TABLA DE MENSUALIDADES -->
                <form class="form-inline" action="index.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputName2">Numero de Cuenta</label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Numero de Cuenta" name="NUMEROCUENTA">
                      </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <br>
                <h3>Datos del Alumno</h3>
                <br>
                <table>
                     <tr>
                         <td>Nombre del Alumno:</td>
                        <td>
                        <?php
                          if(!empty($_SESSION['cuenta']))
                          {
                           print_r($_SESSION['completo']);
                          }
                         ?>
                         </td>
                     <tr>
                     <td>Numero de Cuenta:</td>
                    <td><?php
                        if(!empty($_SESSION['cuenta']))
                        {
                        print_r($_SESSION['cuentanum']);
                        }
                        ?></td>
                    </tr>
                </table>
                <br>
                <form class="form-inline" method="post" action="llamar_factura.php">
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">Cantidad (en Lempiras )</label>
                        <div class="input-group">
                          <div class="input-group-addon">L.</div>
                          <input type="text" class="form-control" id="exampleInputAmount" placeholder="Monto" name="MONTO">
                          <div class="input-group-addon">.00</div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Generar Recibo de Pago</button>
                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
