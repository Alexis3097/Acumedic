// ease on click - transision lenta para el click de un botón
(function($){
    $(document).ready(   
      function(){    
        // Comprobar si estamos, al menos, 100 px por debajo de la posición top
        // para mostrar o esconder el botón
        $(window).scroll(function(){    
          if ( $(this).scrollTop() > 100 ) {    
            $('.scroll-to-top').fadeIn();    
          } else {  
            $('.scroll-to-top').fadeOut();   
          }    
        });   
        // al hacer click, animar el scroll hacia arriba
        $('.scroll-to-top').click( function( e ) {
          e.preventDefault();
          $('html, body').animate( {scrollTop : 0}, 800 );   
        });   
      });
    })(jQuery);
    // scroll touch
    $(function($){       
        $('a').on('click', function(e){
              var $anchor = $(this).attr("href");
              var $hrefStart = $anchor.substr(0, 1);
      
              if ( $hrefStart == "#" ) {
                  $('html,body').animate({
                      scrollTop: $($anchor).offset().top
                  }, 1000);
      
                  e.preventDefault(); 
              } else {
                  window.location.href = $anchor;
              }
        });
      });
// modal destinos
    $('.infobox .box #ver-salidas').bind('click', function(){
        var modal = $(this).attr('data');
        $(".destino-modal[name='"+modal+"']").addClass('active');
    });
    
    $(".back-modal").click(()=>{
        $("body .destino-modal").removeClass('active');
    });
// modal alert
// modal salidas
$('.destinos-detail .infobox .box #ver-salidas').bind('click', function(){
  var modal = $(this).attr('data');
  $(".modal-salidas[name='"+modal+"']").addClass('active');
  setTimeout(()=>{
  $(".modal-salidas [name='"+modal+"']").addClass('active');
  }, 100);
  setTimeout(()=>{
  $(".modal-salidas[name='"+modal+"'] .container-modal").addClass('active');
  }, 200);
  });
  
  $(".close-modal").click(()=>{
  $(".modal-salidas, .modal-salidas .container-modal").removeClass('active');
  });
  // modal salidas
// Procesos animation
        var figures = $(".services-procesos .procesleft figure").length;
        var position = figures;
    
        setInterval(function(){
          
          var element = $(".services-procesos .procesleft");
          if(position == 0){
            $(element).find('figure:nth-of-type('+figures+')').css('opacity',1);  
            position = figures;
          }
          else{
            $(element).find('figure:nth-of-type('+position+')').css('opacity',0);
            if((position - 1) != 0){
            $(element).find('figure:nth-of-type('+(position - 1)+')').css('opacity',1);
            }         
            position--;
          }
        },3000);
// End procesos banner animation
//contact form animations
$('.formulario .main-form input, .formulario .main-form select, .formulario .main-form textarea, .formulario .main-form label').click(()=>{
  $('.formulario .main-form label').addClass('active');
});


/* Aparatología events */

$(".aparatologiaInfo .iconsContainer .item").on("click", function(){
  $(".aparatologiaInfo .iconsContainer .item").removeClass('active');
  $(this).addClass('active');
  var attr = $(this).attr('ref');
  $(".servicesContainer .itemService").removeClass('active');
  $(".servicesContainer .itemService[ref='"+attr+"']").addClass('active');
});

$(".aparatologiaInfo .stepsContainer .stepItem").on("click", function(){
  $(".aparatologiaInfo .stepsContainer .stepItem").removeClass('active');
  $(this).addClass('active');
  var attr = $(this).attr('refsubitem');
  $(".servicesContainer .rightSide .subItem").removeClass('active');
  $(".servicesContainer .rightSide .subItem[refsubitem='"+attr+"']").addClass('active');
});

// End aparatología events
//click al enter me pase al siguiente input
// preloader
// window.onload =function(){
//     var contenedor = document.getElementById('preloader');
//     contenedor.style.visibility='hidden;'
//     contenedor.style.opacity='0';
//     contenedor.style.zIndex="-1000";
// }
