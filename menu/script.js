function buscarnombre(){
    var nombre= document.getElementById(nombre).value;//obtiene el valor del id
    $.ajax({//ajax para enviar el id a id.php

        method:"POST",//forma en que se envia la peticion
        data:{data: nombre},//datos a enviar
        success:function(data){//funcion que se ejecuta cuando se recibe una respuesta
            $('#result').html(data);//escribe la respuesta en el div result
        }
    }
);

}