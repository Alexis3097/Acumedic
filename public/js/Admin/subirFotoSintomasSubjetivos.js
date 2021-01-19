$("#nuevaFoto").on('click',function(){
    limpiarErrores();
    limpiarCampos();
});
$('.enviar').on('click',function(event){
    limpiarErrores();
    $(this).prop('disabled',true);
    let token = $("input[name=_token]").val();
    var route = "/consulta-paciente/estudioGabinete";

    var frmData = new FormData;
    frmData.append("IdPaciente",$("#IdPaciente").val());
    frmData.append("Url",$("input[name=Url]")[0].files[0]);
    frmData.append("Nombre",$("#Nombre").val());
    frmData.append("Descripcion",$("#Descripcion").val());
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type: "post",
        datatype: "json",
        data: frmData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data){
            $('#ButtonEnviar').prop('disabled',false);
            $("#sintomasList").on('click',function() { 
                location.href = this.href; 
            });
           $("#sintomasList").click();
        },
        error: function(data){
            $('#ButtonEnviar').prop('disabled',false);
            if(data.responseJSON.errors.Url){
                $("#errorUrl").html(data.responseJSON.errors.Url[0]);
            }
            if(data.responseJSON.errors.Nombre){
                $("#errorNombre").html(data.responseJSON.errors.Nombre[0]);
            }
            if(data.responseJSON.errors.Descripcion){
                $("#errorDescripcion").html(data.responseJSON.errors.Descripcion[0]);
            }
        }
    })
});

function limpiarErrores(){
    $("#errorUrl").html('');
    $("#errorNombre").html('');
    $("#errorDescripcion").html('');
}
function limpiarCampos(){
    $("#Url").val('');
    $("#Nombre").val('');
    $("#Descripcion").val('');

}