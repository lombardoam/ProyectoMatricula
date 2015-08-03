<?php

require'header.php';

?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Prematricula
                            <small>Conoce la programación de clases y pre matriculate</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Escritorio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Portal del Estudiante
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
            <!-- /.Colocar aquí el código y contenido que se desee poner en la página -->
            <div align="center">
            <form name="form" action="prematricula.php" method="post">

    <table><thead><tr>
    <th></th>
    <th>Asignatura</th>
    <th>Hora Inicial</th>
    <th>Hora Final</th>
    <th>Dias</th>
    <th>Sección</th></tr></thead>
    <tbody>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "matricula");
    $sql=mysqli_query($conexion, "SELECT nombre_asignatra, hora_inicial, hora_final, dias, seccion FROM cursos INNER JOIN asignaturas WHERE cursos.id_asignatura = asignaturas.id_asignatura");

    $i = 0;

    while($row=mysqli_fetch_array($sql)){
    ?>

    <tr>
    <td width="5%"><input class="check" type="checkbox" name="select[]" value="<?php echo $i++; ?>"/></td>
    <td><input class="asignaturas" type="text" name="asignatura[]" readonly id="nombre_asignatra" value="<?php echo $row['nombre_asignatra']; ?>"></td>
    <td><input class="horas" type="text" name="inicial[]" readonly id="hora_inicial" value="<?php echo $row['hora_inicial']; ?>"></td>
    <td><input class="horas" type="text" name="final[]" readonly id="hora_final" value="<?php echo $row['hora_final']; ?>"></td>
    <td><input class="dias" type="text" name="dias[]" readonly id="dias" value="<?php echo $row['dias']; ?>"></td>
    <td><input class="seccion" type="text" name="seccion[]" readonly id="seccion" value="<?php echo $row['seccion']; ?>"></td>
    </tr>
    <?php
    }//end whil loop
    ?>
    </tbody>

    </table>
    <input class="btn" type="submit" name="submit" value="Pre Matricular"/>
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
<script>var $table = $('table'),
    $bodyCells = $table.find('tbody tr:first').children(),
    colWidth;

// Get the tbody columns width array
colWidth = $bodyCells.map(function() {
    return $(this).width();
}).get();

// Set the width of thead columns
$table.find('thead tr').children().each(function(i, v) {
    $(v).width(colWidth[i]);
}); </script>
            </div>
<br /><br />
        </div>
        <!-- /#page-wrapper -->



    <!-- /#wrapper -->


  </body>
</html>

