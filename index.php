<?php


?>




<!DOCTYPE html> <!--Se utilizo el comando ! "Abreviancion emeet"-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio de Participacion Digital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="img/lpd.png">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="estilos.css">


</head>

<body>
    <div class="slider-container">
        <div class="slider-position"></div>
    </div>
    <main> <!-- Se utilizo la abreviancion .contenedor__todo para hacer un div rapido -->
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para encontrar en la pagina  </p>
                    <button id="btn__iniciar--sesion">Iniciar sesion</button>
                </div>
                <div class="caja_trasera_register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion </p>
                    <button id="btn__registrarse" >Registrate</button>
                </div>
            </div>
            <div class="contenedor_login--register">
                <!-- Se utilizo la abreviancion form.formulario para automatizar-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">

                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">

                    <button >Entrar</button>
                </form>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
             
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                  
                    <button>Registrarse</button>
            
                    </form>

            </div>

        </div>
        
    </main>
    <script src="js/script.js"></script>
</body>
</html>
!