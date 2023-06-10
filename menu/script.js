function buscarid(){
    var Id_jovenes= document.getElementById( Id_jovenes).value;//obtiene el valor del id
    $.ajax({//ajax para enviar el id a id.php

        url:"id.php",//archivo que recibe la peticion
        method:"POST",//forma en que se envia la peticion
        data:{data: Id_jovenes},//datos a enviar
        success:function(data){//funcion que se ejecuta cuando se recibe una respuesta
            $('#result').html(data);//escribe la respuesta en el div result
        }
    }
);

}