<?php
include_once("../../configuracion.php");
include_once("../estructura/cabecera.php");
?>
<div class="col-lg-10">
    <div class="container ">
        <div class='row mt-5'>
            <div class="col-lg-8 mx-auto border">
                <div class="card-body p-5 rounded">
                    <h2>Importar Archivo</h2>
                    <form action="accionObtenerArchivo.php" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                            <input class="btn btn-outline-primary" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../estructura/pie.php");
?>