// modal salidas
$('.btn-modal').bind('click', function(){
    var modal = $(this).attr('data');
    $(".container-body[name='"+modal+"']").addClass('active');
    setTimeout(()=>{
    $(".container-body [name='"+modal+"']").addClass('active');
    }, 100);
    setTimeout(()=>{
    $(".container-body[name='"+modal+"'] .container-quest").addClass('active');
    }, 200);
    });
    
    $(".close-modal").click(()=>{
    $(".container-body .container-quest, .container-body").removeClass('active');
    });
    // modal salidas