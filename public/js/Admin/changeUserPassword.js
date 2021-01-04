$('.delete').on('click', function(){
    $tr = $(this).closest('tr');
    var id = $tr.children("input[type=hidden]").val();
    $('#idUsuarioEliminar').val(id);
});
$('.change').on('click', function(){
    $tr = $(this).closest('tr');
    var id = $tr.children("input[type=hidden]").val();
    $('#idUsuario').val(id);
});

$('.enviar').on('click',function(event){
    $( "#buttonAdd" ).prop( "disabled", true );
    $("#errorPassword1").html('');
    $("#errorPassword2").html('');
    $("#errorPasswordconfirmation").html('');
    let password = $("#password").val();
    let password_confirmation = $("#password_confirmation").val();
    let idUsuario = $("#idUsuario").val();
    let token = $("input[name=_token]").val();
    var route = "/usuarios/password";

    // console.log(idUsuario, password, password_confirmation);
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type: "post",
        datatype: "json",
        data: {
            password: password,
            password_confirmation : password_confirmation,
            idUsuario: idUsuario,
        },
        success: function(data){
            $('#contraseniaUsuario').modal('hide')
            $("#buttonAdd").prop( "disabled", false );
            $('#idUsuario').val('');
            $('#password').val('');
            $('#password_confirmation').val('');
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
            if(data.responseJSON.errors.password.length <= 2){
                $("#errorPassword1").html(data.responseJSON.errors.password[0]);
                $("#errorPassword2").html(data.responseJSON.errors.password[1]);
            }else{
                $("#errorPassword1").html(data.responseJSON.errors.password[0]);
            }
            if(data.responseJSON.errors.password_confirmation.length <= 1){
                $("#errorPasswordconfirmation").html(data.responseJSON.errors.password_confirmation);
                console.log(data.responseJSON.errors.password_confirmation);
            }
        }
    })
});