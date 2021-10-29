<?php 
function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
        else
            if(!empty($_GET)) {
                $_AAux =$_GET;
            }
        if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }
        return $_AAux;
        
}
function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

/* function __autoload($class_name){
    //echo "class ".$class_name ;
    $directorys = array(
        $_SESSION['ROOT'].'Modelo/',
        $_SESSION['ROOT'].'Modelo/Conector/',
        $_SESSION['ROOT'].'Control/',
        $_SESSION['ROOT'].'vendor/',
      //  $GLOBALS['ROOT'].'util/class/',
    );
    //print_object($directorys) ;
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name . '.php');
            return;
        }
    }
} */

spl_autoload_register(function ($clase) {
    //echo "class ".$clase ;
    $directorios = array(
      $GLOBALS['ROOT'] . 'Modelo/',
      $GLOBALS['ROOT'] . 'Modelo/Conector/',
      $GLOBALS['ROOT'] . 'Control/',
      $GLOBALS['ROOT'] . 'Control/ControlArchivo/',
    );
    //print_object($directorios) ;
    foreach ($directorios as $directorio) {
      if (file_exists($directorio . $clase . '.php')) {
        // echo "se incluyo".$directorio.$clase . '.php';
        require_once($directorio . $clase . '.php');
        return;
      }
    }
  });




/**  nuevo 
  * Libreria PhpSpreadsheet
  */

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
function descargarExcel($objetos, $titulo){
  //echo "<h3>DESCARGANDDO EXCEL</h3>";
    $excel = new Spreadsheet();
    $hojaActiva = $excel->getActiveSheet();
    $hojaActiva->setTitle($titulo);
  
    $letra = range('A', 'Z');
    
    $fila = 2;
    foreach ($objetos as $unobjeto) {
      $col = 0;
      $array = (get_mangled_object_vars($unobjeto));
      //$longitud = (count($array));
      foreach ($array as $elemento) {
        $hojaActiva->setCellValue($letra[$col] . $fila, $elemento);
        //print_r($letra[$i] . $fila.'->'.$elemento.'   |   ');
        $col++;
      }
      $fila++;
      
    }
    //print_r('<br>');
    //descarga el archivo excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="personas.xlsx"');
    header('Cache-Control: max-age=0');
    $writer = IOFactory::createWriter($excel, 'Xlsx');
    $writer->save('php://output');
}

function importarDatos($rutaArchivo){

}





/** nuevo */




?>