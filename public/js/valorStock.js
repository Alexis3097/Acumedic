let stock = $('#Stock').text();
if(stock == 0) {
    $("#modal-carrito").text('AGOTADO');
    $("#modal-carrito").prop('disabled',true);
    
}
$('#Cantidad').prop('max', stock);

//calcualaando el total a pagar
$('#Cantidad').on('change', function(e){
    $("#enviar").prop( "disabled", false );
    let Cantidad = $("#Cantidad").val();
    let cantidadDisponible = $('#Stock').text();
    if(Cantidad > cantidadDisponible){
        $('#errorCantidad').html('La cantidad no debe ser mayor a '+ cantidadDisponible);
        $("#enviar").prop( "disabled", true );
    }
    let precio = $('#Precio').text();
    let Total = precio * $(this).val();
    $('#Total').html('$'+ Total);
});

//ENVIO DE FORM
$('.enviar').on('click',function(event){
    
    limpiarErrores();
    $("#enviar").prop( "disabled", true );
    let IdProducto = $("#IdProducto").val();
    let NombreCompleto = $("#NombreCompleto").val();
    let Correo = $("#Correo").val();
    let Telefono = $("#Telefono").val();
    let Cantidad = $("#Cantidad").val();
    let Estado = $("#Estado").val();
    let Municipio = $("#Municipio").val();
    let Colonia = $("#Colonia").val();
    let Calle = $("#Calle").val();
    let NoInterior = $("#NoInterior").val();
    let Calle1 = $("#Calle1").val();
    let Calle2 = $("#Calle2").val();
    let NoExterior = $("#NoExterior").val();
    let token = $("input[name=_token]").val();
    var route = "/productos/detallado/ordenDeCompra";
    let cantidadDisponible = $('#Stock').text();
    if(Cantidad <= cantidadDisponible){
        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN':token},
            type: "post",
            datatype: "json",
            data: {
                IdProducto: IdProducto,
                NombreCompleto: NombreCompleto,
                Correo : Correo,
                Telefono: Telefono,
                Cantidad: Cantidad,
                Estado : Estado,
                Municipio: Municipio,
                Colonia: Colonia,
                Calle : Calle,
                NoInterior: NoInterior,
                Calle1: Calle1,
                Calle2 : Calle2,
                NoExterior: NoExterior,
            },
            success: function(data){
                $(".modal-orden, .modal-orden .container-modal").removeClass('active');
                $("#enviar").prop( "disabled", false );
                $(".modal-thankYou").addClass('active');
                setTimeout(()=>{
                $(".modal-thankYou").addClass('active');
                }, 1000);
                setTimeout(()=>{
                $(".modal-thankYou").removeClass('active');
                }, 6000);
                limpiarCampos();
            },
            error: function(data){
                console.log(data.responseJSON)
                $("#enviar").prop( "disabled", false );
                if(data.responseJSON.errors.NombreCompleto){
                    $('#errorNombre').html(data.responseJSON.errors.NombreCompleto[0]);
                }
                if(data.responseJSON.errors.Correo){
                    $('#errorCorreo').html(data.responseJSON.errors.Correo[0]);
                }
                if(data.responseJSON.errors.Telefono){
                    $('#errorTelefono').html(data.responseJSON.errors.Telefono[0]);
                }
                if(data.responseJSON.errors.Cantidad){
                    $('#errorCantidad').html(data.responseJSON.errors.Cantidad[0]);
                }
                if(data.responseJSON.errors.Estado){
                    $('#errorEstado').html(data.responseJSON.errors.Estado[0]);
                }
                if(data.responseJSON.errors.Municipio){
                    $('#errorMunicipio').html(data.responseJSON.errors.Municipio[0]);
                }
                if(data.responseJSON.errors.Colonia){
                    $('#errorColonia').html(data.responseJSON.errors.Colonia[0]);
                }
                if(data.responseJSON.errors.Calle){
                    $('#errorCalle').html(data.responseJSON.errors.Calle[0]);
                }
                
            }
        })
    }
    else{
        $("#enviar").prop( "disabled", false );
        $('#errorCantidad').html('La cantidad no debe ser mayor a ' + cantidadDisponible);
    }
    
});

function limpiarErrores(){
    $('#errorNombre').html('');
    $('#errorCorreo').html('');
    $('#errorTelefono').html('');
    $('#errorCantidad').html('');
    $('#errorEstado').html('');
    $('#errorMunicipio').html('');
    $('#errorColonia').html('');
    $('#errorCalle').html('');
}

function limpiarCampos() {
    $("#NombreCompleto").val('');
    $("#Correo").val('');
    $("#Telefono").val('');
    $("#Cantidad").val(0);
    $("#Estado").val('');
    $("#Municipio").val('');
    $("#Colonia").val('');
    $("#Calle").val('');
    $("#NoInterior").val('');
    $("#Calle1").val('');
    $("#Calle2").val('');
    $("#NoExterior").val('');
}

