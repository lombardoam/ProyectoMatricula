<?php
   require 'conexion.php';
   if(isset($_GET['selectparciales'])){
      $sql = "SELECT * FROM parciales";
      $result = mysqli_query($con, $sql);
      if($result){
         $html = "<option value=\"0\">Seleccione un parcial..</option>";
         while($rows = mysqli_fetch_assoc($result)){
            $html = $html."
               <option value=\"$rows[id_parcial]\">$rows[nombre]</option>
            ";
         }
         $array = array(
            'result' => 'bien',
            'html' => $html,
            'mensaje' => '<h4>Se han capturado los parciales</h4>'
         );
         echo json_encode($array);
      }else{
         $array = array(
            'result' => null,
            'mensaje' => '<h4>No se pudo capturar los parciales</h4>'
         );
         echo json_encode($array);
      }

   }
   if(isset($_GET['parciales'])){
      $sql = "SELECT * FROM parciales";
      $result = mysqli_query($con, $sql);
      $i = 0;
      while($row = mysqli_fetch_assoc($result)){
         $parciales[$i] = $row;
         echo "
            <section>
                  <h3>".$row['nombre']." <a href=\"javascript:\" class=\"btn btn-info\" onclick=\"agregar(".$i.")\">Agregar</a></h3>
                  <table class=\"table table-hover\">
                     <thead>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Puntos</th>
                        <th>Acciones</th>
                     </thead>
                     <tbody id=\"$i\">";

         echo "<input type=\"hidden\" value=\"0\" id=\"h$i\">
                     </tbody>
                  </table>
                  <div class=\"alert alert-info\">
                     <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     <i class=\"fa fa-info-circle\"></i> <strong> Nota!</strong> Asegurese de que la sumatoria de la columna puntos sea igual al total de los puntos oro o base a 100 del parcial.
                  </div>
               </section>
         ";
         $i++;
      }
      if($i == 0){
         echo "
            <script>
               bootbox.dialog({
                  message: \"Por favor contactese con el administrador.\",
                  title: \"No hay parciales en el sistema!\",
                  buttons: {
                     success: {
                        label: \"Aceptar\",
                        className: \"btn-primary\"
                     }
                  }
               });
            </script>
            <input type=\"hidden\" id=\"cancelartodo\" value=\"\">
         ";
      }
      echo "<input type=\"hidden\" value=\"$i\" id=\"cantidadparciales\">";
   }
   if((isset($_GET['clases'])) && (isset($_GET['cuenta']))){
      $cuenta = $_GET['cuenta'];
      $sql = "SELECT cursos.nombre_curso, programacion_cursos.id_programacion, programacion_cursos.seccion FROM usuarios INNER JOIN empleados INNER JOIN programacion_cursos INNER JOIN cursos WHERE usuarios.num_cuenta = empleados.num_cuenta AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_curso = cursos.id_curso AND empleados.num_cuenta = ". $cuenta;
      $result = mysqli_query($con, $sql);
      echo "<option value=\"0\">Seleccione una clase..</option>";
      $i = 0;
      while($rows = mysqli_fetch_assoc($result)){
         echo "
            <option value=\"$rows[id_programacion]\">$rows[nombre_curso]</option>
         ";
         $i++;
      }
      if($i == 0){
         echo "
            <script>
               bootbox.dialog({
                  message: \"Por favor contactese con el administrador.\",
                  title: \"No hay cursos asignados para usted!\",
                  buttons: {
                     success: {
                        label: \"Aceptar\",
                        className: \"btn-primary\"
                     }
                  }
               });
            </script>
         ";
      }
   }
   if((isset($_GET['seccion'])) && (isset($_GET['id_progra']))){
      $prog = $_GET['id_progra'];
      $sql = "SELECT seccion FROM programacion_cursos WHERE id_programacion = ".$prog;
      $query = mysqli_query($con, $sql);
      if($query){
         $row = mysqli_fetch_assoc($query);
         $seccion = $row['seccion'];
         $array = array(
            'seccion' => $seccion,
            'mensaje' => '<h4>Se capturado la sección</h4>'
         );
         echo json_encode($array);
      }else{
         $array = array(
            'seccion' => null,
            'mensaje' => '<h4>No se pudo capturar la sección</h4>'
         );
         echo json_encode($array);
      }

   }
   if(isset($_GET['eval'])){
      $result = mysqli_query($con, "SELECT nombre, tipo_evaluacion FROM tipos_evaluacioens");
      echo "<option value=\"0\">Seleccione un tipo de evaluacion..</option>";
      $i = 0;
      while($row = mysqli_fetch_assoc($result)){
         echo "
            <option value=\"$row[tipo_evaluacion]\">$row[nombre]</option>
         ";
         $i++;
      }
      if($i == 0){
         echo "
            <script>
               bootbox.dialog({
                  message: \"Por favor contactese con el administrador.\",
                  title: \"No hay evaluaciones registradas en el sistema!\",
                  buttons: {
                     success: {
                        label: \"Aceptar\",
                        className: \"btn-primary\"
                     }
                  }
               });
            </script>
            <input type=\"hidden\" id=\"cancelartodo\" value=\"\">
         ";
      }
   }
   if(isset($_GET['hidden'])){
      $result = mysqli_query($con, "SELECT count(*) AS parciales FROM parciales");
      $row = mysqli_fetch_row($result);
      echo "
         <input type=\"hidden\" value=\"$row[0]\" id=\"num_parciales\">
      ";
   }
   if(isset($_GET['id_prog'])){
      $id_prog = $_GET['id_prog'];
      if($id_prog != 0){

         //id prog no esta en "seleccionar una clase.."
         $result = mysqli_query($con, "
         SELECT
         id_configuracion, tipo_evaluacion FROM
         configuraciones WHERE
         id_programacion =
         ".$id_prog);
         $row = mysqli_fetch_assoc($result);
         if($row['id_configuracion'] != null){

            //Si existe la configuracion actualmente para el id prog
            $array = array(
               'id_config' => $row['id_configuracion'],
               'tipo_eval' => $row['tipo_evaluacion']
            );
            echo json_encode($array);
         }else{

            //No existe configuracion para el id prog
            $array = array(
               'mensaje' => 'No ha configurado esta clase!',
            );
            echo json_encode($array);
         }
      }else{

         //id prog esta en "seleccionar una clase.."
         $array = array(
            'id_config' => 0,
            'tipo_eval' => 0
         );
         echo json_encode($array);
      }
   }
   if((isset($_GET['mostrar'])) && (isset($_GET['id_config']))){
      $conf = $_GET['id_config'];
      $request = mysqli_query($con, "SELECT count(*) AS parciales FROM parciales");
      $response = mysqli_fetch_assoc($request);
      $evaluaciones = array();
      $aux = array();

      //hay que hacer un arreglo multidimencional, ya que hay x parciales por y evaluaciones
      //$evaluaciones

      if($response['parciales'] != null){
         $cantparciales = $response['parciales'] + 1;
         for($i = 1; $i < $cantparciales; $i++){
            $sql = "SELECT * FROM evaluaciones WHERE id_configuracion = ".$conf." AND id_parcial = ".$i;
            $query = mysqli_query($con, $sql);
            $j = 1;
            $string = "";
            while($result = mysqli_fetch_assoc($query)){
               $string = $string . "
                  <tr>
                     <td><input type=\"text\" class=\"form-control\" placeholder=\"Nombre\" name=\"nombre\" value=\"$result[nombre]\" readonly></td>
                     <td><input type=\"text\" class=\"form-control\" placeholder=\"Descripcion\" name=\"descripcion\" value=\"$result[descripcion]\" readonly></td>
                     <td><input type=\"text\" class=\"form-control\" placeholder=\"0\" name=\"puntos\" value=\"$result[valor]\" readonly></td>
                     <td>
                        <a href=\"javascript:\" class=\"btn btn-success\" onclick=\"habilitareditar($i, this)\">Editar</a>
                        <input type=\"hidden\" value=\"$result[id_evaluacion]\" id=\"hideval\">
                        <a href=\"javascript:\" class=\"btn btn-danger\" onclick=\"eliminar($i, this)\">X</a>
                     </td>
                  </tr>
               ";
            }
            $evaluaciones[$i][$j] = $string;

         }
      }
      echo json_encode($evaluaciones);
   }
   if((isset($_GET['notas'])) && (isset($_GET['idprog'])) && (isset($_GET['parcial'])) ){
      $idprog = $_GET['idprog'];
      $parcial = $_GET['parcial'];
      $array = array();
      $sql = "SELECT id_evaluacion, nombre FROM evaluaciones INNER JOIN configuraciones WHERE evaluaciones.id_configuracion = configuraciones.id_configuracion AND configuraciones.id_programacion = $idprog AND evaluaciones.id_parcial = $parcial";
      $query = mysqli_query($con, $sql);
      if($query){
         $header = "
            <th>#</th>
            <th>Cuenta</th>
            <th>Nombre</th>
            <th>Apellido</th>
         ";
         $evals = 0;
         while($rows = mysqli_fetch_assoc($query)){
            $header = $header . "
               <th>$rows[nombre]</th>
               <th>Valor</th>
            ";
            $evals++;
         }
         if($evals != 0){
            $array = array(
               'result' => 'bien',
               'header' => $header,
               'mensaje' => '<h4>Se han capturado las evaluaciones.</h4>'
            );
         }else{
            $array = array(
               'result' => 'error',
               'header' => $header,
               'mensaje' => '<h4>No hay evaluaciones para esta clase.</h4>Configure las evaluaciones desde la ventana Gestionar Evaluación'
            );
         }
         //alumnos + evaluaciones
         $sql = "SELECT estudiantes.id_estudiante, estudiantes.num_cuenta, estudiantes.id_estudiante, estudiantes.nombres, estudiantes.apellidos FROM programacion_cursos INNER JOIN matriculas INNER JOIN estudiantes WHERE programacion_cursos.id_programacion = matriculas.id_programacion AND estudiantes.id_estudiante = matriculas.id_estudiante AND programacion_cursos.id_programacion = ".$idprog;
         $query = mysqli_query($con, $sql);
         $content = "";
         $num_estudiante = 1;
         while($estudiantes = mysqli_fetch_assoc($query)){
            $sql2 = "SELECT id_evaluacion, nombre, valor FROM evaluaciones INNER JOIN configuraciones WHERE evaluaciones.id_configuracion = configuraciones.id_configuracion AND configuraciones.id_programacion = $idprog AND evaluaciones.id_parcial = $parcial";
            $query2 = mysqli_query($con, $sql2);
            $content = $content . "
               <tr>
                  <input type=\"hidden\" value=\"$estudiantes[id_estudiante]\" id=\"id_estudiante\">
                  <td>$num_estudiante</td>
                  <td>$estudiantes[num_cuenta]</td>
                  <td>$estudiantes[nombres]</td>
                  <td>$estudiantes[apellidos]</td>
            ";
            $i = 0;
            while($evaluaciones = mysqli_fetch_assoc($query2)){
               $content = $content . "
                  <td class=\"coleval\" id=\"coleval$i\"><input type=\"text\" name=\"\" id=\"eval\" placeholder=\"0\" class=\"form-control\" maxlength=\"". strlen($evaluaciones['valor']) ."\">
                  <input type=\"hidden\" value=\"$evaluaciones[id_evaluacion]\" id=\"id_evaluacion\"></td>
                  <td>/ $evaluaciones[valor]</td>
               ";
               $i++;
            }
            $num_estudiante++;
            $content = $content . "</tr>";
         }
         if($num_estudiante == 1){
            $array['noestudiante'] = '<h4>No hay estudiantes matriculados en esta clase</h4>';
            $colspan = 4 + $evals*2;
            $content = "
               <tr><td colspan=\"$colspan\"><div class=\"alert alert-warning\">
                   <center><i class=\"fa fa-info-circle\"></i>  <strong>No hay estudiantes matriculados en esta clase.</strong></center>
               </div></td></tr>
            ";
         }
         $array['content'] = $content;
         echo json_encode($array);
      }else{
         $array = array(
            'result' => null,
            'mensaje' => '<h4>Hubo un error al ejecutar la consulta.</h4>'
         );
         echo json_encode($array);
      }
   }
?>
