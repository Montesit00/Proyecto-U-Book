<?php
    session_start();

    $usuario = $_SESSION['usuario'];

    if(!isset($_SESSION['logueado'])){
       header('Location: ../index.php'); 
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-Book</title>
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/cetralcs.css" rel="stylesheet">
    <link rel="icon" href="../galeria/uBook_Icon3.png">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
  <header>
  <div class="container-fluid">
        <!--Barra de Navegacion-->
        <nav class="navbar navbar-expand-md navbar-ligth border-3 border-bottom border-primary bg-white">
            <div class="container-fluid">
                <!--Agregarle estilos al logo-->
                <ul><li><a href="central.php" class="navbar-brand">
                          <img src="../galeria/uBook_Icon3.png"  alt="" class="img-fluid">
                        </a>
                    </li>
                </ul>
                <!--Boton de navegacion desplegable-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                  <div id="menuNavegacion" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item"><a class="nav-link" href="central.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="libreria.php">Libreria</a></li>
                        <li class="nav-item"><a class="nav-link" href="trabajos.php">Trabajos</a></li>
                        <li class="nav-item"><a class="nav-link" href="examenes.php">Examenes</a></li>
                        <li class="nav-item"><a class="nav-link" href="motivacion.php">Motivacion</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                  </div>
                    <!--Inicion Sesion-->
                  <div id="divNav">  
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item">
                        <li class="nav-item"><a class="nav-link"><?php echo $usuario?></a></li>
                        <a class="nav-link" href="../php/logout.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                  </div>
            </div>
        </nav>
    </div>
  </header>
<!--Inicio de pagina-->
<div class="containertable">
    <div class="texto_table">
      <h2>Trabajos Practicos</h2>
        <div class="div_table">
          <table>
            <tr>
              <th>Ciclo Lectivo</th>
              <th>Año</th>
              <th>Cuatrimestre</th>
              <th>Materia</th>
              <th>Nivel Materia</th>
              <th>Descargar</th>
            </tr>
            <tr>
              <td rowspan="7">2022</td>
              <td rowspan="7">Primer año</td>
              <td rowspan="7">Primer Cuatrimestre</td>
              <td>Matemática</td>
              <td>I</td>
              <td><button type="button" class="btn btn-light"><a href="tpmate.php">Encontrar</a></button></td>
            </tr>
            <tr>
              <td>Programación</td>
              <td>I</td>
              <td><button type="button" class="btn btn-light">Encontrar</button></td>
            </tr>
            <tr>
              <td>Ingles</td>
              <td>I</td>
              <td><button type="button" class="btn btn-light">Encontrar</button></td>
            </tr>
            <tr>
              <td>Algoritmo</td>
              <td>I</td>
              <td><button type="button" class="btn btn-light">Encontrar</button></td>
            </tr>
            <tr>
              <td>Base de Datos</td>
              <td>I</td>
              <td><button type="button" class="btn btn-light">Encontrar</button></td>
            </tr>
            <tr>
              <td>Arquitectura</td>
              <td>I</td>
              <td><button type="button" class="btn btn-light">Encontrar</button></td>
            </tr>
            <tr>
              <td>Taller de Integración</td>
              <td>I</td>
              <td><button type="button" class="btn btn-light">Encontrar</button></td>
            </tr>
          </table>
        </div>
    </div>
</div>
<br>
<!--fin de pag/inicio footer-->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!--Titulo footer  -->
      <div class="me-5 d-none d-lg-block">
        <span>Gracias por usar nuestro Sitio Web</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>U-Book
            </h6>
            <p>
            Este sitio web es un proyecto de nuestra institucion, esperamos poder ayudar en todas sus consultas y problemas. Att: Que te vaya bien 
            </p>
          </div>
          <!-- Grid column -->
  
  
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Administradores
            </h6>
            <p>
              <a href="#!" class="text-reset">Brunelli Juan</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Montellano Marcos</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Recalde Agustin</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Ruta Nacional 81 Km 1190, ARG</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              Ubook@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i>  (+549) 3705019880</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="http://localhost/U-Book/html/central.php">U-book.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>