<?php
include_once "../../configuracion.php";
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

/* buscamos y obtenemos los datos de mySql */
$objAbmPersona = new AbmPersona();
$listado=$objAbmPersona->buscar(null);

if(count($listado)>0){
    /* $excel=new Spreadsheet();
    $hojaActiva=$excel->getActiveSheet();
    $hojaActiva->setTitle("Personas");

    $hojaActiva->setCellValue('A1','nroDni');
    $hojaActiva->setCellValue('B1','Apellido');
    $hojaActiva->setCellValue('C1','Nombre');
    $hojaActiva->setCellValue('D1','Fecha');
    $hojaActiva->setCellValue('E1','Telefono');
    $hojaActiva->setCellValue('F1','Direccion');

    $fila=2;
    foreach($listado as $unaPersona){
        $hojaActiva->setCellValue('A'.$fila,$unaPersona->getNroDni());
        $hojaActiva->setCellValue('B'.$fila,$unaPersona->getApellido());
        $hojaActiva->setCellValue('C'.$fila,$unaPersona->getNombre());
        $hojaActiva->setCellValue('D'.$fila,$unaPersona->getFechaNac());
        $hojaActiva->setCellValue('E'.$fila,$unaPersona->getTelefono());
        $hojaActiva->setCellValue('F'.$fila,$unaPersona->getDomicilio());

        $fila++;
    }
    //indica el tipo del documento para poder descargar
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="personas.xlsx"');
    header('Cache-Control: max-age=0');
    $writer = IOFactory::createWriter($excel, 'Xlsx');
    $writer->save('php://output'); */

    /** nuevo */
    descargarExcel($listado,'personas');

    /** nuevo*/
}