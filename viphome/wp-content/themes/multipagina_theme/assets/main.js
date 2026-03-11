
// El carousel de los proyectos
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        margin:20,
        nav: true,
        responsive: {
            0 : {
                items:1,
                nav:true
            },
            // breakpoint from 480 up
            480 : {
                items:1,
                nav:true
            },
            // breakpoint from 768 up
            768 : {
                items:2,
                nav: true
            },
            1200 : {
                items:3,
                nav: true
            }
        }
    });
  });

  