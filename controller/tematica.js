$(document).ready(function(){
    CargarTematica(Tematica);
});



function CargarTematica(aux){
    $.ajax({
        url: "../model/sesion/login.php",
        type: "POST",
        data: { "user": username, "passw": password },   
        success: function(resp)
        { 
            try {
                var json         = eval("(" + resp + ")");
            }catch(error){
                console.error(error);
                console.error(resp);
                alert("Error al cargar la pagina.");
            }
        }
    });
}