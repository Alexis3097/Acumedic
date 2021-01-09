// $("#search-icon").click(function() {
//     $(".nav").toggleClass("search");
//     $(".nav").toggleClass("no-search");
//     $(".search-input").toggleClass("search-active");
//   });
  
  $('.menu-toggle').click(function(){
     $(".nav").toggleClass("mobile-nav");
     $(this).toggleClass("is-active");
  });
// nav responsive animación
// contador de info numeros
$('.counter').each(function() {
   var $this = $(this),
       countTo = $this.attr('data-count');
   
   $({ countNum: $this.text()}).animate({
     countNum: countTo
   },
 
   {
 
     duration: 7000,
     easing:'linear',
     step: function() {
       $this.text(Math.floor(this.countNum));
     },
     complete: function() {
       $this.text(this.countNum);
      //  alert('finished');
     }
 
   });  
 
 });
// contador de info numeros
// dropdown
//-----------funcion para el cambio de fecha para ver la disponibilidad de citas dependiendo la fecha----------
$('#Fecha').change(function(){
    var fecha = $(this).val();
    $.get('/horarios',{fecha:fecha},function(horarios){
        $('#Hora').empty();
        $.each(horarios,function(index, value){
            $('#Hora').append("<option value='"+ index + "'> "+ value +"</option>");
        })
    });
});

$('#FechaEdit').change(function(){
  var fecha = $(this).val();
  var IdCita = $('#IdCita').val();
  $.get('/horariosEdit',{fecha:fecha,IdCita:IdCita},function(horarios){
      $('#Hora').empty();
      $.each(horarios,function(index, value){
          $('#Hora').append("<option value='"+ index + "'> "+ value +"</option>");
      })
  });
});
// reloj admin
Number.prototype.pad = function(n) {
  for (var r = this.toString(); r.length < n; r = 0 + r);
  return r;
};

function updateClock() {
  var now = new Date();
    sec = now.getSeconds(),
    min = now.getMinutes(),
    hou = now.getHours(),
    mo = now.getMonth(),
    dy = now.getDate(),
    yr = now.getFullYear();
  var months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  var tags = ["mon", "d", "y", "h", "m", "s"],
    corr = [months[mo], dy, yr, hou.pad(2), min.pad(2), sec.pad(2)];
  for (var i = 0; i < tags.length; i++)
    document.getElementById(tags[i]).firstChild.nodeValue = corr[i];
}

function initClock() {
  updateClock();
  window.setInterval("updateClock()", 1);
}

// reloj admin
  // modal salidas
  $('#modal-carrito').click(function(){
  $(".modal-orden").addClass('active');
  setTimeout(()=>{
  $(".modal-orden").addClass('active');
  }, 100);
  setTimeout(()=>{
  $(".modal-orden .container-modal").addClass('active');
  }, 200);
  })

  $("#close-modal").click(()=>{
    $(".modal-orden, .modal-orden .container-modal").removeClass('active');
    });

