<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css"/>
    
    <!-- validator -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrapValidator.min.css">

    <!-- css -->
    <link rel="stylesheet" href="../css/estilos.css"/>
    

</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
        <!-- Navbar content -->
        <div class="container">
          <!-- inicio -->
          <a href="../inicio/index.php" class="navbar-brand">Inicio</a>
          <!-- boton menu -->
          <button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#contenidoMenu"
					aria-controls="contenidoMenu"
					aria-expanded="false"
					aria-label="Mostrar/Ocultar Navegación"
			    >
            <span class="navbar-toggler-icon"></span>
				  </button>
          <!-- menu -->
          <div class="collapse navbar-collapse" id="contenidoMenu">
            <!-- enlaces -->
            <ul class="navbar-nav me-auto">
              <li class="nav-item dropdown mx-4">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  id="datopersona"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >Datos Persona</a
                >
                <ul class="dropdown-menu" aria-labelledby="datopersona">
                  <li><a class="dropdown-item" href="../persona/listaPersonas.php">Ver Listado</a></li>
                  <!-- <li><a class="dropdown-item" href="../persona/BuscarPersona.php">Buscar Persona</a></li>
                  <li><a class="dropdown-item" href="../persona/NuevaPersona.php">Ingresar Datos Persona</a></li>-->
                </ul> 
              </li>
              <li class="nav-item dropdown mx-4">
                <a class="nav-link" href="../Libreria/formularioImportar.php">Importar Datos a MYSql</a>
              </li>
              <!-- <li class="nav-item dropdown mx-4">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  id="datoauto"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >Datos Autos</a
                >
                <ul class="dropdown-menu" aria-labelledby="datoauto">
                  <li><a class="dropdown-item" href="../auto/VerAutos.php">Lista Auto</a></li>
                  <li><a class="dropdown-item" href="../auto/buscarAuto.php">Buscar un Auto</a></li>
                  <li><a class="dropdown-item" href="../auto/NuevoAuto.php">Ingresar Datos Auto</a></li>
                  <li><a class="dropdown-item" href="../auto/CambioDuenio.php">Ingresar nuevo Due&ntilde;o</a></li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
  </header>
  <main class="container my-4">