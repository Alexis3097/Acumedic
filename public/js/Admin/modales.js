$('.delete').on('click', function(){
    $tr = $(this).closest('tr');
    var id = $tr.children("input[type=hidden]").val();
    $('#IdModal').val(id);
});

$('.editarSintomaSub').on('click', function(){
    $tr = $(this).closest('tr');
    var id = $tr.children("input[type=hidden]").val();
    var datos = $tr.children("td").map(function(){
        return $(this).text();
    });

    $('#IdSintoma').val(id);
    $('#NombreUpdate').val(datos[0]);
    $('#DescripcionUpdate').val(datos[1]);
});