<?php
include_once "../../configuracion.php";
require '../../vendor/autoload.php';

$datos=data_submitted();

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;



//El archivo a importar
//Recomiendo poner la ruta absoluta si no está junto al script
$rutaArchivo = $datos["nombre"];

$documento = IOFactory::load($rutaArchivo);
//Se espera que en la primera hoja estén los productos
$hoja = $documento->getSheet(0);

// Calcular el máximo valor de la fila como entero, es decir, el
//límite de nuestro ciclo
$numeroMayorDeFila = $hoja->getHighestRow(); // Numérico
$letraMayorDeColumna = $hoja->getHighestColumn(); // Letra
//Convertir la letra al número de columna correspondiente
$numeroMayorDeColumna = Coordinate::columnIndexFromString($letraMayorDeColumna);

// Recorrer filas; comenzar en la fila 2 porque omitimos el encabezado
for ($indiceFila = 2; $indiceFila <= $numeroMayorDeFila; $indiceFila++) {
    
    // Aquí para obtener el valor de la celdacon: $hoja->getCellByColumnAndRow(columna, Fila);
    $hoja->getCellByColumnAndRow(1, $indiceFila);
    
    $objAbmPersona = new AbmPersona();

    $datos['NroDni']=$hoja->getCellByColumnAndRow(1, $indiceFila);
    $datos['Apellido']=$hoja->getCellByColumnAndRow(2, $indiceFila);
    $datos['Nombre']=$hoja->getCellByColumnAndRow(3, $indiceFila);
    $fechadelarchivo=$hoja->getCellByColumnAndRow(4, $indiceFila);
    $datos['Telefono']=$hoja->getCellByColumnAndRow(5, $indiceFila);
    $datos['Domicilio']=$hoja->getCellByColumnAndRow(6,$indiceFila);
    /* echo "<br>";
    echo " Numero Dni: ".$hoja->getCellByColumnAndRow(1, $indiceFila);
    echo " Apellido: ".$hoja->getCellByColumnAndRow(2, $indiceFila);
    echo " Nombre: ".$hoja->getCellByColumnAndRow(3, $indiceFila);
    echo " Fecha: ".$hoja->getCellByColumnAndRow(4, $indiceFila);
    echo " telefono: ".$hoja->getCellByColumnAndRow(5, $indiceFila);
    echo " Domicilio:".$hoja->getCellByColumnAndRow(6, $indiceFila);
     */
     $fecha = substr($fechadelarchivo,0,4).'-'. substr($fechadelarchivo,4,2).'-'.substr($fechadelarchivo,6,2);
    echo $fecha;
    /*$unaFecha=date_create($fecha); */
    $datos['fechaNac']=$fecha;
    $buscarP['NroDni']= $datos['NroDni'];
    $listaPersona = $objAbmPersona->buscar($buscarP);
        
    if(count($listaPersona)>0){
            $respuesta="La Persona ya existe";
    }else{
        $respuesta=$objAbmPersona->alta($datos);
    }
    
}
 header("Location: ../persona/listaPersonas.php");
exit;
?>