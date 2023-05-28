
<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    echo ' 
    <script>
      alert("Por favor debes iniciar sesión");
      window.location = "index.php";
    </script>
    ';

    header('Location: index.php');
    session_destroy();
    die();
  } 
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Mestilos.css">
</head>
<body>
  <nav>
    <ul>
      <div class="Lista_info">
        <li><a href="#">Aliados </a></li>
        <li><a href="#">Talleres Complementarios </a></li>
        <li><a href="#">Formacion Orale </a></li>
      </div>
    </div>
    </ul>
  </nav>

  <div class="content">
    <h1>Bienvenida Coordinacion de Laboratorio de Participacion Digitial </h1>
    <p>Selecciona una opción del menú para continuar.</p>
  </div>

  <div class="salir">
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>
  </div>
</body>
</html>
