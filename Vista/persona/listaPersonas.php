<?php
    include_once "../../configuracion.php";
    include_once ("../estructura/cabecera.php");
    $objAbmPersona= new AbmPersona();
    $listaPersona=$objAbmPersona->buscar(null);
?>

<h3>Listado de Personas</h3>
<table class="table table-striped table-hover">
<thead>
        <tr>
          <th scope="col">Nro Dni</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">Fecha Nacimiento</th>
          <th scope="col">Telefono</th>
          <th scope="col">Domicilio</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
    </thead>
    <?php
    if(count($listaPersona)>0){
        foreach($listaPersona as $objPersona){
            echo '<tr>';
            echo '<td ">'.$objPersona->getNroDni().'</td>';
            echo '<td ">'.$objPersona->getApellido().'</td>';
            echo '<td ">'.$objPersona->getNombre().'</td>';
            echo '<td ">'.$objPersona->getFechaNac().'</td>';
            echo '<td ">'.$objPersona->getTelefono().'</td>';
            echo '<td ">'.$objPersona->getDomicilio().'</td>';
            /* echo '<td><a href="../accion/autosPersona.php?DniDuenio='.$objPersona->getNroDni().'">Mostrar Lista de auto</a></td>';
            echo '<td><a href="../accion/accionBuscarPersona.php?NroDni='.$objPersona->getNroDni().'"">editar</a></td>';
            echo '<td><a href="accion/abmPersona.php?accion=borrar&NroDni='."'".$objPersona->getNroDni()."'".'">borrar</a></td>'; */ 
            echo '</tr>'; 
        }
        echo '<a class="btn btn-success" href="../Libreria/exportarDatos.php">Exportar</a>';
        //echo '<a class="btn btn-primary" href="../Libreria/formularioImportar.php">Importar</a> ';
    }else{
        echo '<h4>Aun no hay Personas cargadas en la base</h4>';
        
    }
    ?>
</table>
<?php
    include_once ("../estructura/pie.php");
?>