

<?php
include "../php/conexion_be.php";  //incluye el archivo de conexion
//Obtener el valor del archivo funcionid.php para realizar una consulta con el id


$nombre = $_POST['nombre'];

//Realizar la consulta con el id
$query = "SELECT * FROM jovenes WHERE nombre = '$nombre'";
$resultado = mysqli_query($conexion,$query);

//Mostrar los datos en una tabla
 if ($resultado->num_rows > 0) {
    echo "<table><tr><th>Id</th><th>nombre</th><th>Primer apellido</th><th>Segundo apellido</th><th>Celular</th><th>Correo</th></tr>";
    // output data of each row
    while($row = $resultado->fetch_assoc()) {
        echo "<tr><td>".$row["Id_jovenes"]."</td><td>".$row["nombre"]."</td><td>".$row["primer_ap"]."</td><td>".$row["segundo_ap"]."</td><td>".$row["celular"]."</td><td>".$row["correo"]."</td></tr>";
    }

    echo "</table>";
    echo "<br><br>";

} else {
    echo "0 results";
}
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <style>
        body{
    background-color: #ffefe4;
background-image: url("data:image/svg+xml,%3Csvg width='32' height='64' viewBox='0 0 32 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 28h20V16h-4v8H4V4h28v28h-4V8H8v12h4v-8h12v20H0v-4zm12 8h20v4H16v24H0v-4h12V36zm16 12h-4v12h8v4H20V44h12v12h-4v-8zM0 36h8v20H0v-4h4V40H0v-4z' fill='%239bc9fc' fill-opacity='0.12' fill-rule='evenodd'/%3E%3C/svg%3E");
}


        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

    


        
    </style>

</body>
</html> 
