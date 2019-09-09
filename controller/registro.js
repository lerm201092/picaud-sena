$(document).ready(function(){
    llenar_select_tipoid();

    $("[name=registro]").focus(function(){
        $(this).removeClass("focusedAlert");
        $("#alertaMensaje").hide(300);

        if( ($(this).attr("id")=="txt_email_1")  || ($(this).attr("id")=="txt_email_2") ){
            $("#txt_email_1").removeClass("focusedAlert");
            $("#txt_email_2").removeClass("focusedAlert");
        }
        if( ($(this).attr("id")=="txt_contrasena_1")  || ($(this).attr("id")=="txt_contrasena_2") ){
            $("#txt_contrasena_1").removeClass("focusedAlert");
            $("#txt_contrasena_2").removeClass("focusedAlert");
        }
    });

});

function llenar_select_tipoid(){

    var parametros = {
        "opcion" : "llenar_tipoid"
    };

    $.ajax({
        url: "../model/registro.php",
        type: "POST",
        data: parametros,
        success: function(resp)
        {
            try {
                var json         = eval("(" + resp + ")");
                cargar_select("sel_tipoid", json);
                $("#sel_tipoid").on("change", function(){
                    console.log($("#sel_tipoid").val());
                });
            } catch (error) {
                error_try(error, resp);
            }       
            
        }
    });
}

function error_try(error, resp){
    // console.clear();
    alert("Ha ocurrido un grave error en el sistema, para mayor información verifique la consola del navegador");
    console.error(error);
    console.info(resp);
}

function cargar_select(nombre, datos){
    var html = "<option value='0' selected>- Escoja una opción -</option>";
    var cant_registros = datos.length;
    for(var i=0; i<cant_registros; i++){
        html+="<option value='"+datos[i][0]+"'>"+datos[i][1]+"</option>";
    }   
    $("#"+nombre).html(html);
}

function guardar(){
    if(validar()==true ){
        if(validarEmail() == true){
            var parametros = {
                "opcion" :      "guardar",
                "tipo_id" :     $("#sel_tipoid").val(),
                "num_id"  :     $("#txt_numid").val(),
                "nombres" :     $("#txt_nombres").val(),
                "apellidos" :   $("#txt_apellidos").val(),
                "sexo" :        $("#sel_sexo").val(),
                "ciudad" :      $("#txt_ciudad").val(),
                "telefono" :    $("#txt_telefono").val(),
                "fecha" :       $("#txt_fecha").val(),
                "email":        $("#txt_email_1").val(),
                "contrasena" :  $("#txt_contrasena_1").val()
                };
        
            $.ajax({
                url: "../model/registro.php",
                type: "POST",
                data: parametros,
                success: function(resp)
                {
                    try {
                        var json         = eval("(" + resp + ")");
                        if(json["ok"]){
                            alert("registro guardado satisfactoriamente");
                            limpiar();
                        }else{
                            if(json["error"]["tipo"]=="duplicate"){
                                alert("!Advertencia¡, Numero de identificación registrado anteriormente. verifique sus datos.");
                            }else{
                                alert("!Advertencia¡, error en la transaccion de base de datos");
                            }
                        }
                  
                    }catch(error){
                        error_try(error, resp);
                    }    
                }
            });
        }else{
            $("#txt_email_1").addClass("focusedAlert");
            $("#txt_email_2").addClass("focusedAlert");
            var html = "<b>Escriba un correo electronico valido.<b>";
            $("#alertaMensaje").html(html);
            $("#alertaMensaje").slideToggle(600);
        }
        
    }
}

function limpiar(){
    $("[name=registro]").each(function(){
        tipo=$(this).attr("tipo"), valor = $(this).val();
       if(tipo=="select"){
            $(this).val(0).removeClass("focusedAlert");
       }else{
           $(this).val("").removeClass("focusedAlert");
       }
   });
   $("#alertaMensaje").hide(300);
}

function validar(){
    var cont=0;
    $("[name=registro]").each(function(){
         tipo=$(this).attr("tipo"), valor = $(this).val();
        if(tipo=="select"){
            if(valor==0){
                cont++;
                $(this).addClass("focusedAlert");
            }
        }else{
            if(valor=="" || valor==null){
                cont++;
                $(this).addClass("focusedAlert");
            }
        }
    });

  

    if(cont>0){
        $("#alertaMensaje").text("¡Advertencia!, para completar el almacenamiento de los datos debe diligenciar correctamente el formulario.");
        $("#alertaMensaje").slideToggle(600);
        return false;
    }else{
        var html="";
        if($("#txt_email_1").val() != $("#txt_email_2").val()){
            $("#txt_email_1").addClass("focusedAlert");
            $("#txt_email_2").addClass("focusedAlert");
            html+="<li>Los correos electronicos no coinciden.</li>";
            cont++;
        }

        if($("#txt_contrasena_1").val() != $("#txt_contrasena_2").val()){
            $("#txt_contrasena_1").addClass("focusedAlert");
            $("#txt_contrasena_2").addClass("focusedAlert");
            html+="<li>Las contraseñas no coinciden.</li>";
            cont++;
        }

        if(cont==0){
            return true;
        }else{
            $("#alertaMensaje").html(html);
            $("#alertaMensaje").slideToggle(600);
            return false;
        }
    }
}

function validarEmail() {    
    var email = $("#txt_email_1").val();
    if (/^\w+([\.-]?\w+)*@(?:|hotmail|outlook|yahoo|live|gmail)\.(?:|com|es)$/i.test(email)){
        return true;
    } else {
        return false;
    }
}

function soloNumeros(e, x){
    var aux = x.val().toString();    
    if(aux.length <= 13 ){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    } 
    return false;

}