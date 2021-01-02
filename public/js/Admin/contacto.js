$('#form').on('submit', function(e) {
    e.preventDefault();
})
$('#infoContacto').on('click', function(){
    let token = $("input[name=_token]").val();
    var route = "/sobre-nosotros/datosContacto";
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type: "GET",
        datatype: "json",
        success: function(data){
            $('#Telefono').val(data.Telefono);
            $('#Horario').val(data.Horario);
            $('#id').val(data.id);
            $("#editInfo").modal("show");
        },
        error: function(data){
            console.log(data.responseJSON);
        }
    })
});

$('.ActualziarContacto').on('click',function(event){
    $("#errorTelefono").html('');
    $("#errorHorario").html('');
    let Telefono = $("#Telefono").val();
    let Horario = $("#Horario").val();
    let id = $("#id").val();
    let token = $("input[name=_token]").val();
    var route = "/sobre-nosotros/actualizarContacto";

    // console.log(idUsuario, password, password_confirmation);
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type: "put",
        datatype: "json",
        data: {
            id:id,
            Telefono: Telefono,
            Horario : Horario,
        },
        success: function(data){
            $('#editInfo').modal('hide')
            $('#alerta').html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Se actualizo la informacion de contacto
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>`)
                setTimeout(function() {
                    $(".alert").fadeOut(1500);
                },3000);
        },
        error: function(data){
            $("#errorTelefono").html(data.responseJSON.errors.Telefono[0]);
            $("#errorHorario").html(data.responseJSON.errors.Horario[0]);
        }
    })
});