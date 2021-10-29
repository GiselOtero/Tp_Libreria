<?php
include_once "../../configuracion.php";
include_once "../estructura/cabecera.php";
$datos=data_submitted();
$objLinkArchivo = new ControlArchivo();
$link=$objLinkArchivo->guardarArchivo($_FILES);
if($link["error"]==""){
    header("Location: importarDatos.php?nombre=".$link["link"]);
}else{
    echo "<h3>".$link["error"]."</h3>";
}
?>
<?php
include_once "../estructura/pie.php";
?>