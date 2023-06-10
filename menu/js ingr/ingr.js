  document.getElementById("personal-info-form").addEventListener("submit", function(event) {
      event.preventDefault(); // Evita que la página se recargue al enviar el formulario
      
      // Obtener los valores ingresados por el usuario
      var nombre = document.getElementById("nombre").value;
      var apellido = document.getElementById("apellido").value;
      var email = document.getElementById("email").value;
      
      // Realizar cualquier acción adicional que desees con los datos ingresados
      
      // Ejemplo: Mostrar una alerta con los datos ingresados
      alert("Datos registrados:\n\nNombre: " + nombre + "\nApellido: " + apellido + "\nEmail: " + email);
      
      // Restablecer el formulario
      document.getElementById("personal-info-form").reset();
    });


    