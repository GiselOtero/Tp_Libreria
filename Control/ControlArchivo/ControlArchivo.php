<?php
class ControlArchivo{
    public function guardarArchivo($datos){
        $target_dir="../../archivos/";
        /* $direccionArchivos=$target_dir.$datos["fileToUpload"]["name"];
        $nombreArchivo=$datos["fileToUpload"]["tmp_name"];
        $tipoArchivo=$datos["fileToUpload"]["type"]; */

         /* tipos de extenciones  */
        $allowedFileType = [
            'application/vnd.ms-excel',
            'text/xls',
            'text/xlsx',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            ];

            $salida=[];
        $salida["error"]="";
        $salida["link"]="";
       /*  print_r($datos); */
       /* verifico si la extencion del archivo es valido */
        if (in_array($datos["fileToUpload"]["type"], $allowedFileType)){
                
            /* if(!copy($datos["fileToUpload"]["tmp_name"],$target_dir.$datos["fileToUpload"]["name"])){
                $salida["error"]="El archivo no se copio correctamente";
            }else{
           $salida["link"]="".$target_dir.$datos["fileToUpload"]["name"];
            } */



            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $archivoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // 
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                
                $salida["link"]=$target_file;
                
            }else{
                $salida["error"]="El archivo no se copio correctamente";
            } 

        }else{
                $salida["error"]="El archivo debe ser tipo .xls, .xlsx";
        }
        return $salida;
        
    }
}