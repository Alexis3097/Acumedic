$('.enviar').on('click',function(event){
    $("#enviarSolicitud").prop('disabled',true);
    limpiarErrores();
    let NombreCompleto = $("#NombreCompleto").val();
    let Correo = $("#Correo").val();
    let Telefono = $("#Telefono").val();
    let Ciudad = $("#Ciudad").val();
    let token = $("input[name=_token]").val();
    var route = "/solicitar-cita";
    
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type: "post",
        datatype: "json",
        data: {
            NombreCompleto: NombreCompleto,
            Correo: Correo,
            Ciudad: Ciudad,
            Telefono: Telefono,
        },
        success: function(data){
            $("#enviarSolicitud").prop('disabled',false);
            limpiarErrores();
            limpiarCampos();
            $(".modal-thankYou").addClass('active');
            setTimeout(()=>{
            $(".modal-thankYou").addClass('active');
            }, 1000);
            setTimeout(()=>{
            $(".modal-thankYou").removeClass('active');
            }, 6000);
        },
        error: function(data){
            console.log(data.responseJSON)
            $("#enviarSolicitud").prop('disabled',false);
            if(data.responseJSON.errors.NombreCompleto){
                $('#errorNombre').html(data.responseJSON.errors.NombreCompleto[0]);
            }
            if(data.responseJSON.errors.Correo){
                $('#errorCorreo').html(data.responseJSON.errors.Correo[0]);
            }
            if(data.responseJSON.errors.Telefono){
                $('#errorTelefono').html(data.responseJSON.errors.Telefono[0]);
            }
            if(data.responseJSON.errors.Ciudad){
                $('#errorCiudad').html(data.responseJSON.errors.Ciudad[0]);
            }
            
            
        }
    })
});

function limpiarErrores(){
    $('#errorNombre').html('');
    $('#errorCorreo').html('');
    $('#errorTelefono').html('');
    $('#errorCiudad').html('');
}
function limpiarCampos(){
    $("#NombreCompleto").val('');
    $("#Correo").val('');
    $("#Telefono").val('');
    $("#Ciudad").val('');
}