document.getElementById("btn__iniciar--sesion").addEventListener("click",iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click",register);
window.addEventListener("resize",anchopagina);
//Declaracion de  variables 
var contenedor_login_register=document.querySelector(".contenedor_login--register");

var formulario__login=document.querySelector(".formulario__login");
var formulario__register=document.querySelector(".formulario__register");

var caja_trasera_login=document.querySelector(".caja_trasera_login");
var caja__trasera_register=document.querySelector(".caja_trasera_register");

function anchopagina(){
    if(window.innerWidth>850){
        caja_trasera_login.style.display="block";
        caja__trasera_register.style.display="block";
    }else{
        caja__trasera_register.style.display="block";
        caja__trasera_register.style.opacity="1";
        caja_trasera_login.style.display="none";
        formulario__login.display="block";
        formulario__register.style.display="none";
        contenedor_login_register.style.left="0";

    }
}
anchopagina();


function iniciarSesion(){
    if(window.innerWidth>850){
        formulario__register.style.display="none";
        contenedor_login_register.style.left="10px";
        formulario__login.style.display="block";
        caja__trasera_register.style.opacity="1";
        caja_trasera_login.style.opacity="0";

    }else{
        formulario__register.style.display="none";
        contenedor_login_register.style.left="0px";
        formulario__login.style.display="block";
        caja__trasera_register.style.display="block";
        caja_trasera_login.style.display="none";

    }

   
   }
   

function register(){
    if(window.innerWidth>850){
formulario__register.style.display="block";
 contenedor_login_register.style.left="410px";
 formulario__login.style.display="none";
 caja__trasera_register.style.opacity="0";
 caja_trasera_login.style.opacity="1";

    }else{
        formulario__register.style.display="block";
        contenedor_login_register.style.left="0px";
        formulario__login.style.display="none";
        caja__trasera_register.style.display="none";
        caja_trasera_login.style.display="block";
        caja_trasera_login.style.opacity="1";
    }
 
}

