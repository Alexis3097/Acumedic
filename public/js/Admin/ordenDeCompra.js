$('.ver').on('click', function(){
    $tr = $(this).closest('tr');
    var datos = $tr.children("input[type=hidden]").map(function(){
        return $(this).val();
    });
    $('#Estado').html(datos[0]);
    $('#Municipio').html(datos[1]);
    $('#Colonia').html(datos[2]);
    $('#Calle').html(datos[3]);
    $('#NoExterior').html(datos[4]);
    $('#NoInterior').html(datos[5]);
    $('#Calle1').html(datos[6]);
    $('#Calle2').html(datos[7]);
    $('#IdOrden').val(datos[8]);

    //validar si ya esta completado el pedido ya no dar esa opcion
    if(datos[9] == 'Completado'){
        $('#Completado').prop('disabled',true);
    }
});


$(".IdEstatus").on("click",function(e){
    $IdEstatus = $(this).val();
    $IdOrden = $("#IdOrden").val();
    $("#IdEstatus").val($IdEstatus);
    $("#IdOrdenEdit").val($IdOrden);
});
