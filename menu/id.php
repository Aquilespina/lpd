<?php
include "../php/conexion_be.php";  //incluye el archivo de conexion
//Obtener el valor del archivo funcionid.php para realizar una consulta con el id



$Id = $_POST['id_jovenes'];
//Realizar la consulta con el id
$query = "SELECT * FROM jovenes WHERE Id_jovenes = '$Id'";
$result = mysqli_query($conexion,$query);
if($result->num_rows > 0){//si la consulta arroja un resultado
    $result = $conexion->query($query);//guarda el resultado de la consulta en la variable result
    foreach ($result as $row) {//recorre el resultado de la consulta
        echo "<br>";
        echo "Id: ". ['Id_jovenes'];//imprime el id del usuario


    }
}







// 

?>