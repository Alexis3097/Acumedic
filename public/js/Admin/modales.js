$('.delete').on('click', function(){
    $tr = $(this).closest('tr');
    var id = $tr.children("input[type=hidden]").val();
    $('#IdModal').val(id);
});