$('.agregarId').on('click', function(){
    $tr = $(this).closest('tr');
    var id = $tr.children("input[type=hidden]").val();
    $('.IdProducto').val(id);
});
$('.editar').on('click', function(){
    limpiarProp();
    $tr = $(this).closest('tr');
    var id = $tr.children("input[type=hidden]").val();
    var datos = $tr.children("td").map(function(){
        return $(this).text();
    });
    $('#editCantidad').val(datos[1]);
    $('#Stock').val(datos[2]);
});

$('.form').on('submit',function(event){
    event.preventDefault();
});
$('.enviar').on('click',function(event){
    $( "#buttonAdd" ).prop( "disabled", true );
    $("#errorCantidad1").html('');
    $("#errorCantidad2").html('');
    let Cantidad = $("#Cantidad").val();
    let IdProducto = $("#IdProducto").val();
    let token = $("input[name=_token]").val();
    var route = "/inventario/agregar";
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type: "put",
        datatype: "json",
        data: {
            Cantidad: Cantidad,
            IdProducto: IdProducto,
        },
        success: function(data){
            $("#list").on('click',function() { 
                location.href = this.href; 
           });
           $("#list").click();
        },
        error: function(data){
            $("#buttonAdd").prop( "disabled", false );
            if(data.responseJSON.errors.Cantidad.length <= 2){
                $("#errorCantidad1").html(data.responseJSON.errors.Cantidad[0]);
                $("#errorCantidad2").html(data.responseJSON.errors.Cantidad[1]);
            }else{
                $("#errorCantidad1").html(data.responseJSON.errors.Cantidad[0]);
            }
        }
    })
    
});

$('.update').on('click',function(event){
    $( "#buttonEditar" ).prop( "disabled", true );
    let IdProducto = $("#IdProductoEditar").val();
    let Cantidad = $("#editCantidad").val();
    let StockMinimo = $("#Stock").val();
    let token = $("input[name=_token]").val();
    var route = "/inventario/actualizar";
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type: "put",
        datatype: "json",
        data: {
            IdProducto: IdProducto,
            Cantidad: Cantidad,
            StockMinimo: StockMinimo,
        },
        success: function(data){
            $("#list").on('click',function() { 
                location.href = this.href; 
           });
           $("#list").click();
        },
        error: function(data){
            $("#buttonEditar").prop( "disabled", false );
            $("#errorEditCantidad1").html(data.responseJSON.errors.Cantidad[0]);
            $("#errorStock1").html(data.responseJSON.errors.StockMinimo[0]);
        }
    })
    
});

function limpiarProp(){
    $("#errorEditCantidad1").html('');
    $("#errorStock1").html('');
}

$('.AgregarProducto').on('click',function(){
    $("#errorCantidad1").html('');
    $("#errorCantidad2").html('');
    $("#Cantidad").val('');
    $tr = $(this).closest('tr');
    var id = $tr.children("input[type=hidden]").val();
    $('#IdProducto').val(id);
});

