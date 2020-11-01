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

