
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>
   <?php
      require '';
      $sql = "SELECT cursos.nombre_curso, programacion_cursos.id_programacion, programacion_cursos.seccion FROM usuarios INNER JOIN empleados INNER JOIN programacion_cursos INNER JOIN cursos WHERE usuarios.num_cuenta = empleados.num_cuenta AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_curso = cursos.id_curso";
      $query = mysqli_query();
   ?>
</body>
</html>
