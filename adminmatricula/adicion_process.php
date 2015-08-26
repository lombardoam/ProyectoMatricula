<?php


require 'conexion.php';

require 'adiciones.php';



    if(isset($_POST['submit'])){
    $checkthis=$_POST['check'];
    $id=$_POST['id_programacion'];

    foreach($checkthis as $i){

        $query = mysqli_query($conexion, "INSERT INTO matriculas (num_cuenta, id_programacion)
       VALUES('{$id_estu}', '{$id [$i]}')");

   }
    }

?>
