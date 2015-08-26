<?php


require 'conexion.php';

require 'adiciones.php';



    if(isset($_POST['submit'])){
    $checkthis=$_POST['check'];
    $id=$_POST['id_programacion'];
    $cuenta=$_POST['cuenta'];
;

    for($i = 0; $i<count($checkthis); $i++){

        $query = mysqli_query($conexion, "INSERT INTO matriculas (num_cuenta, id_programacion)
       VALUES('{$cuenta [$i]}', '{$id [$i]}')");

   }
    }

?>
