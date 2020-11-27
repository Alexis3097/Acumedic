$('.delete').on('click', function(){
    $div = $(this).closest('.IdEstudios');
    var id = $div.children("input[type=hidden]").val();
    $('#IdModal').val(id);
});

