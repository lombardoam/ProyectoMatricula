 <?php
require 'conexion.php';

$ss=$_POST['under'];
if(!empty($_POST['check'])) {
    foreach($_POST['check'] as $borrar)
    {

       $sql ="DELETE FROM matriculas WHERE id_matricula=$borrar";

        mysqli_query($conexion, $sql);

    }
}
header('Location: cancelaciones.php?numerocuenta='.$ss);

?>
