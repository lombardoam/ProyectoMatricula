<?php
    header('Content-type: application/json');
    require '../../require/conexion.php';
    //Get records from database
    $result = mysqli_query($conexion, "SELECT nombre_facultad AS DisplayText, id_facultad AS Value FROM facultades");

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
