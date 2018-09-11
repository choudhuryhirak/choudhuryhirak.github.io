$(document).ready(function()
{ 
  
$('.owl-carousel').owlCarousel({
        items:4,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    });    
    
    
    
    
    

});