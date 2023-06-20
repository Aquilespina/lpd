<?php
include "../php/conexion_be.php";  //incluye el archivo de conexion
$Nombre= $_POST['nombre'];//Obtener el valor del archivo funcionid.php para realizar una consulta con el id
$primer_ap = $_POST['primer_ap'];//Obtener el valor del archivo funcionid.php para realizar una consulta con el id
$segundo_ap = $_POST['segundo_ap'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];



$query = "INSERT INTO jovenes(nombre,primer_ap,segundo_ap,celular,correo) 
    VALUES('$Nombre','$primer_ap','$segundo_ap','$celular','$correo')";
 //Realiaza la consulta de datos por medio de un mensaje de script 
if(mysqli_query($conexion,$query)){
    echo '
    <script>   
    alert("Usuario registrado exitosamente");
    window.location = "../menu/iniciarsesion.php";
    </script>
    ';
}
else{
    echo '
    <script>   
    alert("Error al registrar usuario");
    window.location = "../menu/iniciarsesion.php";
    </script>
    ';
}

?>