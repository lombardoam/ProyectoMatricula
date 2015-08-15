<?php
    session_start();
   if(!(
      isset($_SESSION['nombre']) &&
      isset($_SESSION['apellido']) &&
      isset($_SESSION['usuario']) &&
      isset($_SESSION['tipo_usuario']) &&
      isset($_SESSION['num_cuenta']) //hola
      )
   ){
      header('Location:../index.php?no_aut');
   } else if($_SESSION['tipo_usuario'] != 4){
      header('Location:../index.php?no_aut');
   }
?>


<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Juan Ángel Reyes Monroy" >

    <title>Sistema de matrícula</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Opciones</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <img src="images/ujcv.png" width="50px" height="55px" align="left" /> <a class="navbar-brand" href="index.html">Administración sistema de matrícula</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                                       <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong><font color="#000000">Marco</font></strong>
                                        </h5>
                                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Hoy a las 10:43 AM</p>
                                        <p><font color="#000000">No tenemos docente en la clase de...</font></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong><font color="#000000">María</font></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i><font color="#000000"> Ayer a las 4:32 PM</p>
                                        <p>No me abre una clase...</font></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong><font color="#000000">Laura</font></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i><font color="#000000"> Ayer a las 4:32 PM</p>
                                        <p>Me choca el horario de esta clase...</font></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Leer nuevos mensajes</a>
                        </li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#"><font color="#000000">Alert Name</font> <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#"><font color="#000000">Alert Name</font> <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#"><font color="#000000">Alert Name</font> <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#"><font color="#000000">Alert Name</font> <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#"><font color="#000000">Alert Name</font> <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#"><font color="#000000">Alert Name</font> Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><font color="#000000">Ver todos</font></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nombre']; echo' '; echo $_SESSION['apellido']  ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><font color="#000000"><i class="fa fa-fw fa-user"></i><?php echo $_SESSION['usuario'] ?> </font></a>
                        </li>
                        <li>
                            <a href="#"><font color="#000000"><i class="fa fa-fw fa-envelope"></i>Inbox</font></a>
                        </li>
                        <li>
                            <a href="#"><font color="#000000"><i class="fa fa-fw fa-gear"></i>Opciones</font></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><font color="#000000"><i class="fa fa-fw fa-power-off"></i>Salir</font></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><br>
                        <a href="index.php"><i class="fa fa-fw fa-university"></i> Escritorio</a>
                    </li>
                      <li class="active">
                        <a href="matricula.php"><i class="fa fa-fw fa-pencil"></i> Matrícula</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1">
                            <i class="glyphicon glyphicon-level-up">
                            </i>
                             Editar Matricula <i class="fa fa-fw fa-caret-down"></i>
                        </a>
                            <ul id="demo1" class="collapse">
                                <li>
                                    <a href="cancelaciones.php"><i class="glyphicon glyphicon-remove"></i>Cancelaciones</a>
                                </li>
                                <li>
                                    <a href=""><i class="glyphicon glyphicon-ok"></i> Adiciones</a>
                                </li>

                            </ul>
                    </li>

                    <li>
                        <a href="carreras.php"><i class="fa fa-fw fa-folder-open-o"></i> Carreras</a>
                    </li>
                    <li>
                        <a href="facultades.php"><i class="fa fa-graduation-cap"></i> Facultades</a>
                    </li>
                    <li>
                        <a href="aulas.php"><i class="fa fa-fw fa-building"></i> Aulas</a>
                    </li>


                     <li>
                        <a href="preingreso.php"><i class="fa fa-fw fa-paperclip"></i> Prematricula</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                            <i class="fa fa-fw fa-arrows-v">
                            </i>
                             Administración <i class="fa fa-fw fa-caret-down"></i>
                        </a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="clases.php"><i class="fa fa-fw fa-wrench"></i> Clases</a>
                                </li>
                                <li>
                                    <a href="docentes.php"><i class="fa fa-fw fa-wrench"></i> Docentes</a>
                                </li>
                                <li>
                                    <a href="horarios.php"><i class="fa fa-fw fa-wrench"></i> Horarios</a>
                                </li>
                                <li>
                                    <a href="alumnos.php"><i class="fa fa-fw fa-wrench"></i> Alumnos</a>
                                </li>
                                <li>
                                    <a href="equivalencias.php"><i class="fa fa-fw fa-wrench"></i> Equivalencias</a>
                                </li>
                                <li>
                                    <a href="tipequivalencias.php"><i class="fa fa-fw fa-wrench"></i> Tipos de equivalencias</a>
                                </li>
                            </ul>
                    </li>
                    <li class="active">
                        <a href="informes.php"><i class="fa fa-fw fa-file"></i> Informes</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

          <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
