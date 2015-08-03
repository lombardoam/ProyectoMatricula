<?php
    header('Content-type: application/json');
    require '../../require/conexion.php';
    //Get records from database
    $result = mysqli_query($conexion, "SELECT empleados.nombres AS DisplayText, empleados.id_empleado AS Value FROM empleados INNER JOIN puestos ON empleados.id_puesto = puestos.id_puesto WHERE puestos.descripcion = 'docente'");

    //Add all records to an array
    $rows = array();
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    //Return result to jTable
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    $jTableResult['Options'] = $rows;
    echo json_encode($jTableResult);
?>
