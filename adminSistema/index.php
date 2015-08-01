<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrador General</title>

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--<script type="text/javascript" src="parallax.js"></script>-->
</head>
<body>
   <div class="principal">
           <nav>
                <ul>
                    <!--<li><img src="logo-escudo-ujcv1-300x53.png"></li>-->
                    <li class="active"><a href="index.php"><span><i class="fa fa-home fa-2x"></i></span>INICIO</a></li>
                    <li><a href="opciones/academica.php"><span><i class="fa fa-graduation-cap fa-2x"></i></span>ACADÉMICA</a>
                        <ul>
                            <li><a href="opciones/facultades.php">FACULTADES</a></li>
                            <li><a href="opciones/carreras.php">CARRERAS</a></li>
                            <li><a href="opciones/asignaturas.php">ASIGNATURAS</a></li>
                            <li><a href="opciones/asignaturas.php">PERÍODOS</a></li>
                        </ul>
                    </li>
                    <li><a href="opciones/aulas.php"><span><i class="fa fa-building fa-2x"></i></span>AULAS</a>
                        <ul>
                            <li><a href="opciones/edificios.php">EDIFICIOS</a></li>
                            <li><a href="opciones/salones.php">SALONES</a></li>
                        </ul>
                    </li>
                    <li><a href="opciones/cursos.php"><span><i class="fa fa-calendar fa-2x"></i></span>CURSOS</a>
                    <ul>
                            <li><a href="opciones/edificios.php">PROGRAMACIÓN DE CURSOS</a></li>
                            <li><a href="opciones/salones.php">CONTENIDO DE CURSOS</a></li>
                        </ul>
                    </li>
                    <li><a href="opciones/planes_estudio.php"><span><i class="fa fa-file fa-2x"></i></span>PLANES DE ESTUDIO</a></li>
                    <li><a href="opciones/admisiones.php"><span><i class="fa fa-check-square-o fa-2x"></i></span>ADMISIONES</a>
                        <ul>
                            <li><a href="opciones/prematricula.php">MATRICULA</a></li>
                            <li><a href="opciones/prematricula.php">PREMATRICULA</a></li>
                            <li><a href="opciones/requisitos.php">REQUISITOS</a></li>
                        </ul>
                    </li>
                    <li><a href="opciones/usuarios.php"><span><i class="fa fa-users fa-2x"></i></span>USUARIOS</a>
                        <ul>
                            <li><a href="opciones/estudiantes.php">ESTUDIANTES</a></li>
                            <li><a href="opciones/tutores.php">EMPLEADOS</a></li>
                            <li><a href="opciones/docentes.php">PUESTOS</a></li>
                        </ul>
                    </li>
                    <li><a href="opciones/usuarios.php"><span><i class="fa fa-cog fa-2x"></i></span>AVANZADO</a>
                    <ul>
                            <li><a href="opciones/estudiantes.php">USUARIOS</a></li>
                            <li><a href="opciones/tutores.php">TIPOS DE USUARIO</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="#"><span><i class="fa fa-users fa-2x"></i></span>X</a>-->
                    <li class="cerrar"><a href=""><span><i class="fa fa-times fa-2x"></i></span>CERRAR SESIÓN</a></li>
                </ul>
            </nav>

       <div class="panel">
          <center><a href="index.php">PANEL DE ADMINISTRACIÓN</a></center>
       </div>



            <div class="contenedor-cartas">
            <!--Inicio de las cartas-->
            <div class="card">
              <div class="image">
                 <img src="img/biblioteca-ujcv1-1024x566.jpg">
                    <span class="title">Académica</span>
              </div>
              <div class="content">
              <p>Ingresa, edita y elimina información pertinente a facultades, carreras y asignaturas.</p>
              </div>
              <div class="action">
                <a href='opciones/academica.php'>Administra esta sección</a>
              </div>
            </div>

                      <div class="card">
              <div class="image">
                 <img src="img/bloggif_5582f9ec9e313.jpeg">
                    <span class="title">Aulas</span>
              </div>
              <div class="content">
              <p>Ingresa, edita y elimina los edificios y cada una de sus aulas, laboratorios y auditorios existentes.</p>
              </div>
              <div class="action">
                <a href='opciones/aulas.php'>Administra esta sección</a>
              </div>
            </div>

                      <div class="card">
              <div class="image">
                 <img src="img/DSC_0568-1024x569.jpg">
                    <span class="title">Cursos</span>
              </div>
              <div class="content">
              <p>Realiza la programación académica de cursos correspondiente a cada período academico.</p>
              </div>
              <div class="action">
                <a href='opciones/cursos.php'>Administra esta sección</a>
              </div>
            </div>

                      <div class="card">
              <div class="image">
                 <img src="img/biblioteca-ujcv-1024x566.jpg">
                    <span class="title">Planes de Estudio</span>
              </div>
              <div class="content">
              <p>Registra cada uno de los planes de estudio existentes por carrera, tomando en cuenta la reforma de los planes antiguos.</p>
              </div>
              <div class="action">
                <a href='opciones/planes_estudio.php'>Administra esta sección</a>
              </div>
            </div>

                      <div class="card">
              <div class="image">
                 <img src="img/bloggif_558312ba13f40.jpeg">
                    <span class="title">Admisiones</span>
              </div>
              <div class="content">
              <p>Ingresa, edita y elimina los requisitos pre existentes para cada una de las asignaturas en los planes de estudio.</p>
              </div>
              <div class="action">
                <a href='opciones/admisiones.php'>Administra esta sección</a>
              </div>
            </div>


                      <div class="card">
              <div class="image">
                 <img src="img/bloggif_558313109120a.jpeg">
                    <span class="title">Usuarios</span>
              </div>
              <div class="content">
              <p>Gestiona el ingreso, editado y borrado de estudiantes, sus respectivos tutores y docentes académicos.</p>
              </div>
              <div class="action">
                <a href='opciones/usuarios.php'>Administra esta sección</a>
              </div>
            </div>
        </div>

        <div class="footer">
            <p>
                Ingenieria de Software II<br>
                Todos los derechos reservados
            </p>
        </div>

   </div>
</body>
</html>
