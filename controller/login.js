function login(){
    var username = $("#txt_user").val(), password = $("#txt_passw").val();
    if( (username.trim() != "" ) && ( password.trim() != "" )){
        $.ajax({
            url: "../model/sesion/login2.php",
            type: "POST",
            data: { "user": username, "passw": password },   
            success: function(resp)
            { 
                try {
                    var json         = eval("(" + resp + ")");
                    if(json["acceso"]=="ok"){
                        location.href = json["pagina"];
                    }else{
                        alert(json["mensaje"]);
                    }
                }catch(error){
                    error_try(error, resp);
                }
            }
        });
    }else{
        alert("Complete todos los campos");
    }
}

function error_try(error, resp){
    // console.clear();
    alert("Ha ocurrido un grave error en el sistema, para mayor información verifique la consola del navegador");
    console.error(error);
    console.info(resp);
}
