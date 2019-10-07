$(document).ready(function(){
    CargarTematica(Tematica);
});



function CargarTematica(aux){
    $.ajax({
        url: "../model/tematica.php",
        type: "POST",
        data: { "id": aux },   
        success: function(resp)
        { 

            console.log(resp);
            try {
                var json         = eval("(" + resp + ")");
                $("#IdTematica").text(json[0][2]);
                $("#UrlImage").attr("src", "./src/img/tematicas/"+json[0][1].toLowerCase()+".png");
                console.log(json);
            }catch(error){
                // console.error(error);

                // console.error(resp);
                // alert("Error al cargar la pagina.");
            }
        }
    });
}