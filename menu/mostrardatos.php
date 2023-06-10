<?php
   
        
    
   include '../php/conexion_be.php';  //incluye el archivo de conexion	

  
   //Verifica la conexion
   
   // Consulta SQL para obtener los datos de la base de datos


   if($conexion){

       $sql = "SELECT nombre, correo, usuario FROM usuarios";
       $result = $conexion->query($sql);
       $num_rows = mysqli_num_rows($result);

       
   }else{  
       echo 'No se pudo conectar a la base de datos'; 

   }

   if ($num_rows> 0) {
       // Imprimir la tabla si hay resultados
       echo "<table>";
       echo "<tr><th>Nombre completo </th><th>Correo</th><th>Usuario</th></tr>";
       while ($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>".$row["nombre"]."</td>";
           echo "<td>".$row["correo"]."</td>";
           echo "<td>".$row["usuario"]."</td>";
           echo "</tr>";
       }
       echo "</table>";
   } else {
       echo "No se encontraron datos.";
   }
   
   // Cerrar la conexión a la base de datos
     exit;
       ?>



