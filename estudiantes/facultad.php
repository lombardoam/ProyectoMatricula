<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
     <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
    <script src="jtable/localization/jquery.jtable.es.js" type="text/javascript"></script>

  </head>
  <body>

 <form name="form" action="facultad.php" method="post">

    <table>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "matricula");
    $sql=mysqli_query($conexion, "SELECT nombre_asignatra, hora_inicial, hora_final, dias, seccion FROM cursos INNER JOIN asignaturas WHERE cursos.id_asignatura = asignaturas.id_asignatura");

    $i = 0;

    while($row=mysqli_fetch_array($sql)){
    ?>

    <tr>
    <td><input type="checkbox" name="select[]" value="<?php echo $i++; ?>"/></td>
    <td><input type="text" name="asignatura[]" readonly id="nombre_asignatra" value="<?php echo $row['nombre_asignatra']; ?>"></td>
    <td><input type="text" name="inicial[]" readonly id="hora_inicial" value="<?php echo $row['hora_inicial']; ?>"></td>
    <td><input type="text" name="final[]" readonly id="hora_final" value="<?php echo $row['hora_final']; ?>"></td>
    <td><input type="text" name="dias[]" readonly id="dias" value="<?php echo $row['dias']; ?>"></td>
    <td><input type="text" name="seccion[]" readonly id="seccion" value="<?php echo $row['seccion']; ?>"></td>
    </tr>
    <?php
    }//end whil loop
    ?>

    <tr>
    <td><input type="submit" name="submit" value="Pre Matricular"/>
    </td>
    </tr>
    </table>
    </form>

    <?php
    if(isset($_POST['submit'])){
    $select=$_POST['select'];
    $asignatura=$_POST['asignatura'];
    $hora_inicial=$_POST['inicial'];
    $hora_final=$_POST['final'];
    $dias=$_POST['dias'];
    $seccion=$_POST['seccion'];


    foreach($select as $i){
       /*$query=mysqli_query($conexion, "INSERT INTO prem(asignatura, seccion, horario)
       VALUES('".$row['asignatura']."',
            '".$row['seccion']."', '".$row['horario']."')");*/

         $query=mysqli_query($conexion, "INSERT INTO prem(asignatura, hora_inicial, hora_final, dias, seccion)
       VALUES('{$asignatura [$i]}',
            '{$hora_inicial [$i]}', '{$hora_final [$i]}', '{$dias [$i]}', '{$seccion [$i]}')");

    }//end for loop
   }
   ?>
  </body>
</html>
