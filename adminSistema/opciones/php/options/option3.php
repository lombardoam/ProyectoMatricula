<?php
    header('Content-type: application/json');
    require '../../require/conexion.php';
    //Get records from database
    $result = mysqli_query($conexion, "SELECT nombres AS DisplayText, id_empleado AS Value FROM empleados");

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
