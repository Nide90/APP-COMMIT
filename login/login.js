$(document).ready(function(){

    var email = "email@hotmail.com";
    var contraseña = "1234";
    var inputContraseña = $("#contraseña").val();
    var inputEmail = $("#email").val();

    $("#submit").click(function(){
        if (inputEmail === "" || 
            inputContraseña === "") {
            alert("Completar todos los campos.");
        } else {
            if (inputEmail === email && 
                inputContraseña === contraseña) {
                alert("Login correcto");
            } else {
               alert("Usuario y/o contraseña incorrectos")
            }
        }
    });
});