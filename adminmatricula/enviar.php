<?php


require 'conexion.php';

require 'matricula.php';



    if(isset($_POST['submit'])){
    $checkthis=$_POST['check'];
    $id=$_POST['id_programacion'];

    for($i = 0; $i<count($checkthis); $i++) {

        $query = mysqli_query($conexion, "INSERT INTO matriculas (num_cuenta, id_programacion)
       VALUES('{$id_estu}', '{$id [$i]}')");

   }
    }

?>
