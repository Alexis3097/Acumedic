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

