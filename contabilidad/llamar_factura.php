<?php
include 'conexion.php';
session_start();
if(!empty($_POST['MONTO']))
{
$sqla="SELECT a.id_estudiante,c.id_periodo
      FROM estudiantes a
      INNER JOIN cuotas_estudiante b
      ON a.id_estudiante=b.id_estudiante
      INNER JOIN periodos_academicos c
      ON b.id_periodo=c.id_periodo
      WHERE a.num_cuenta=".$_SESSION['cuenta']."";
$resulta=mysqli_query($conexion,$sqla);
while($rw=mysqli_fetch_row($resulta))
{
  $_SESSION['estudiante']=$rw[0];
  $_SESSION['periodo']=$rw[1];
}
$sqli="INSERT INTO `matricula`.`cuotas_estudiante` (`id_cuotas`, `id_estudiante`, `id_periodo`, `fecha_factura`, `fecha_pago`, `monto_pago`) VALUES (NULL,'".$_SESSION['estudiante']."','".$_SESSION['periodo']."','".date('Y-m-d H-m-s')."','".date('Y-m-d')."','".$_POST['MONTO']."')";
mysqli_query($conexion, $sqli);
}
$sql = "SELECT b.id_cuotas, b.id_estudiante, b.id_periodo, b.fecha_factura, b.fecha_pago, b.monto_pago
      FROM estudiantes a
      INNER JOIN cuotas_estudiante b
      ON a.id_estudiante=b.id_estudiante
      WHERE a.num_cuenta='".$_SESSION['cuenta']."' AND b.fecha_factura='".date('Y-m-d H-m-s')."'";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);
$registros = mysqli_num_rows($resultado);

if ($registros > 0) {
   require_once 'Classes/PHPExcel.php';
   $objPHPExcel = new PHPExcel();

   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("Matricula UJCV")
        ->setLastModifiedBy("Matricula UJCV")
        ->setTitle("Exportar Excel desde MySql")
        ->setSubject("Recibo Prueba")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("Matricula con phpexcel")
        ->setCategory("Recibo");

    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', "Recibo Alumno");
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:D1');
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A3', "Identificador Cuotas");
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B3', "ID Estudiante");
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('C3', "Periodo");
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('D3', "Fecha Factura");
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('E3', "Fecha Pago");
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('F3', "Monto a Pagar");
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
   $i = 6;
   while ($registro = mysqli_fetch_array ($resultado)) {

      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, utf8_encode($registro['id_cuotas']));
       $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B'.$i, utf8_encode($registro['id_estudiante']));
       $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('C'.$i, utf8_encode($registro['id_periodo']));
       $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('D'.$i, utf8_encode($registro['fecha_factura']));
       $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('E'.$i, utf8_encode($registro['fecha_pago']));
       $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('F'.$i, utf8_encode($registro['monto_pago']));
      $i++;
   }

}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Recibo-Alumno.xlsx"');
header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysqli_close ($conexion);
?>
