<?php
include 'conexion.php';
if(!empty($_POST['NUMEROCUENTA']))
{
$sql2="SELECT * FROM estudiantes WHERE num_cuenta='".$_POST['NUMEROCUENTA']."'";
$result2=mysqli_query($conexion,$sql2);
}

if(!empty($_POST['NUMEROCUENTA']))
{
$sql="SELECT b.fecha_pago,c.codigo_periodo,b.monto_pago,b.id_cuotas
      FROM estudiantes a
      INNER JOIN cuotas_estudiante b
      ON a.id_estudiante=b.id_estudiante
      INNER JOIN periodos_academicos c
      ON b.id_periodo=c.id_periodo
      WHERE a.num_cuenta=".$_POST['NUMEROCUENTA']."";
$result=mysqli_query($conexion,$sql);
}
session_start();
unset($_SESSION['completo']);
unset($_SESSION['cuentanum']);
unset($_SESSION['cuenta']);
if(!(
  isset($_SESSION['nombre']) &&
  isset($_SESSION['apellido']) &&
  isset($_SESSION['usuario']) &&
  isset($_SESSION['tipo_usuario']) &&
  isset($_SESSION['num_cuenta']) //hola
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nombre']; echo' '; echo $_SESSION['apellido']  ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><font color="#000000"><i class="fa fa-fw fa-user"></i> Perfil</a></font>
                        </li>
                        <li>
                            <a href="#"><font color="#000000"><i class="fa fa-fw fa-gear"></i> Configuracion </a></font>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><font color="#000000"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesion </a></font>
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
                                <i class="fa fa-dashboard"></i> Generar Historial de Pagos
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- TABLA DE MENSUALIDADES -->
                <form class="form-inline" method="post" action="historial.php">
                    <div class="form-group">
                        <label for="exampleInputName2">Numero de Cuenta</label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Numero de Cuenta" name="NUMEROCUENTA">
                      </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <br>
                    <br>
                    <table>
                        <tr>
                         <td>Nombre del Alumno:</td>
                        <td><?php
                              if(!(empty($_POST['NUMEROCUENTA'])))
                              {
                               while($raw=mysqli_fetch_row($result2))
                               {
                                  echo'&nbsp'.$raw[2].'&nbsp'.$raw[3].'';
                                  echo'</td>';
                                  echo'<tr>';
                                  echo'<td>Numero de Cuenta:</td>';
                                  echo'<td>'.$raw[1].'</td>';
                                  echo'</tr>';
                               }
                              }
                            ?>
                    </tr>
                    </table>
                </form>
                <br>
                                <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Fecha de Pago Max</th>
                                        <th>Periodo</th>
                                        <th>Monto</th>
                                        <th>Identificador de Pago</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        <?php
                                          if(!(empty($_POST['NUMEROCUENTA'])))
                                          {
                                           while($row=mysqli_fetch_row($result))
                                           {
                                              echo'<tr>';
                                              echo'<td>'.$row[0].'</td>';
                                              echo'<td>'.$row[1].'</td>';
                                              echo'<td>'.$row[2].'</td>';
                                              echo'<td>'.$row[3].'</td>';
                                              echo'</tr>';
                                           }
                                          }
                                        ?>
                                </tbody>
                            </table>


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
<style>

    ::-webkit-scrollbar {
    width: 12px;
}
::-webkit-scrollbar-track {
    background-color: #eaeaea;
    border-left: 1px solid #ccc;
}
::-webkit-scrollbar-thumb {
    background-color: #ccc;
}
::-webkit-scrollbar-thumb:hover {
    background-color: #aaa;
}

</style>
</body>

</html>
