<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrador General</title>

    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../parallax.js"></script>


    <!--JQuery Offline-->
    <script src="jquery.js" type="text/javascript"></script>

    <!--JQuery UI-->
    <script src="jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <link href="jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

    <!--JTable-->
    <link href="jtable/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css"/>
    <script src="jtable/jquery.jtable.min.js" type="text/javascript"></script>

    <!--Script Casi Propio pero que no lo es-->
    <script src="js/script.js" type="text/javascript"></script>
</head>
<body>
   <div class="principal">
           <nav>
                <ul>
                    <!--<li><img src="logo-escudo-ujcv1-300x53.png"></li>-->
                    <li><a href="../index.php"><span><i class="fa fa-home fa-2x"></i></span>INICIO</a></li>
                    <li><a href="academica.php"><span><i class="fa fa-graduation-cap fa-2x"></i></span>ACADÉMICA</a>
                        <ul>
                            <li><a href="facultades.php">FACULTADES</a></li>
                            <li><a href="carreras.php">CARRERAS</a></li>
                            <li><a href="asignaturas.php">ASIGNATURAS</a></li>
                        </ul>
                    </li>
                    <li><a href="aulas.php"><span><i class="fa fa-building fa-2x"></i></span>AULAS</a>
                        <ul>
                            <li><a href="edificios.php">EDIFICIOS</a></li>
                            <li><a href="salones.php">SALONES</a></li>
                        </ul>
                    </li>
                    <li><a href="cursos.php"><span><i class="fa fa-calendar fa-2x"></i></span>CURSOS</a></li>
                    <li><a href="planes_estudio.php"><span><i class="fa fa-file fa-2x"></i></span>PLANES DE ESTUDIO</a></li>
                    <li class="active"><a href="odmisiones.php"><span><i class="fa fa-check-square-o fa-2x"></i></span>ADMISIONES</a>
                        <ul>
                            <li><a href="prematricula.php">PREMATRICULA</a></li>
                            <li><a href="requisitos.php">REQUISITOS</a></li>
                        </ul>
                    </li>
                    <li><a href="usuarios.php"><span><i class="fa fa-users fa-2x"></i></span>USUARIOS</a>
                        <ul>
                            <li><a href="estudiantes.php">ESTUDIANTES</a></li>
                            <li><a href="tutores.php">TUTORES</a></li>
                            <li><a href="docentes.php">DOCENTES</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="#"><span><i class="fa fa-users fa-2x"></i></span>X</a>-->
                </ul>
            </nav>

       <div class="panel">
          <center><a href="edificios.php">PANEL DE ACADÉMICA</a></center>
       </div>

       <center><div class="tablas">
        <div id="PersonTableContainer"></div><br><br>
       </div></center>

        <div class="footer">
            <p>
                Ingenieria de Software II<br>
                Todos los derechos reservados
            </p>
        </div>

   </div>
</body>
</html>
