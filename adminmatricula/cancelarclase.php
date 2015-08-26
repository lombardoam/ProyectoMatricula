 <?php
require 'conexion.php';


if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $borrar)
    {

        //$sql ="DELETE FROM matriculas WHERE id_matricula=$borrar";

       // mysqli_query($conexion, $sql);

    }
}
header('Location: cancelaciones.php?numerocuenta=$_POST['under']');

?>
