$('.changeEstatus').on('click', function(){
    $div = $(this).closest('.estatus');
    let IdSolicitud = $div.children("input[type=hidden]").val();
    IdEstatus =  $(this).val();
    $("#IdSolicitudCita").val(IdSolicitud);
    $("#IdEstatus").val(IdEstatus);
    
});