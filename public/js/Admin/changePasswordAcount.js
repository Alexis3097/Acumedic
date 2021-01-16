$('#modal').on('click', function(e){
    e.preventDefault();
    limpiarErrores();
    limpiarCampos();
    $('#contraseniaUsuario').modal('show')
});

$('.enviar').on('click',function(event){
    $( "#buttonAdd" ).prop( "disabled", true );
    limpiarErrores();
    let passwordActual = $("#passwordActual").val();
    let password = $("#password").val();
    let password_confirmation = $("#password_confirmation").val();
    let idUsuario = $("#idUsuario").val();
    let token = $("input[name=_token]").val();
    var route = "/mi-cuenta/changePassword";
    console.log(password,password_confirmation,idUsuario, passwordActual)
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type: "put",
        datatype: "json",
        data: {
            passwordActual: passwordActual,
            password: password,
            password_confirmation : password_confirmation,
            idUsuario: idUsuario,
        },
        success: function(data){
            $('#contraseniaUsuario').modal('hide')
            $("#buttonAdd").prop( "disabled", false );
            limpiarCampos();
            $('#alerta').html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Se ha cambiado la contraseña del usuario
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>`)
                setTimeout(function() {
                    $(".alert").fadeOut(1500);
                },3000);
        },
        error: function(data){
            $("#buttonAdd").prop( "disabled", false );
            console.log(data.responseJSON.errors);
            if(data.responseJSON.errors.passwordActual){
                $("#errorpasswordActual").html(data.responseJSON.errors.passwordActual[0]);
            }
            $("#errorPassword").html(data.responseJSON.errors.password[0]);
            $("#errorPasswordconfirmation").html(data.responseJSON.errors.password_confirmation[0]);
            
            
        }
    })
});

function limpiarErrores(){
    $("#errorpasswordActual").html('');
    $("#errorPassword").html('');
    $("#errorPasswordconfirmation").html('');
}

function limpiarCampos(){
    $('#passwordActual').val('');
    $('#password').val('');
    $('#password_confirmation').val('');
}