$('.delete').on('click', function(){
    $div = $(this).closest('div');
    var id = $div.children("input[type=hidden]").val();
    $('#IdFotoProducto').val(id);
});
