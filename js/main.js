function comprobar(){
    if($("#c2").val().length == 0){      
        $("#c3").attr("disabled","disabled");
    }
}
function habilitar(){
   $("#c3").removeAttr("disabled");
}