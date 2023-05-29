<?php

include 'conexion_be.php';  //incluye el archivo de conexion
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) 
    VALUES('$nombre_completo','$correo','$usario','$contrasena')";
    //Verificar que el correo no se repita
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>   
        alert("Este correo ya esta registrado, intenta con otro diferente");
        window.location = "../index.php";
        </script>           
        ';
        exit();
    }
    //Verificar que el usuario no se repita 
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usario'");  
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>   
        alert("Este usuario ya esta registrado, intenta con otro diferente");
        window.location = "../index.php";
        </script>
        ';
        exit();
    }   


    
    $ejecutar = mysqli_query($conexion,$query); //ejecuta la consulta   
if($ejecutar){
    echo '
    <script>   
    alert("Usuario almacenado exitosamente");
    window.location = "../index.php";
    </script>
    ';
}
else{
    echo '
    <script>   
    alert("Intentalo de nuevo, usuario no almacenado");
    window.location = "../index.php";
    </script>
    ';
}
mysqli_close($conexion); //cierra la conexion
?>