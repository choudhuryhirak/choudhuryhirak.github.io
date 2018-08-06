//owl carousel

//end caro





$(document).ready(function(){

    var tl = new TimelineMax({repeat:-1});

    $(".slider-anim").each(function(index, element){
       
        
        tl.to(element, 3, {Autoalpha:"-90%", opacity:1})
    .to(element, 2, {Autoalpha:"15%", opacity:0, ease:Power2.easeIn}, "+=1")
        
      
    })
    


    var tlanim;
    $('.owl-container').hover(
    
    function()
        {
            tlanim = new TimelineMax();
            tlanim.to($(this).find('.transitionbox'), 0.3, {scaleX:1.50, scaleY:1.50, autoAlpha:0.9, ease:Power1.easeIn}, 0.3)
            .to($(this).find('.carotitle'), 1, {autoAlpha:1, x:"0", y:"60%", ease:Power1.easeInOut},0.4);
            
            
        },
        function()
        {
            tlanim.reverse();
        }
    
    
    
    )
    
    
    var tileanimtl;
    $('.tile, .tile2').hover(
    
        function()
        {
            tileanimtl = new TimelineMax();
            tileanimtl.to( $(this).find('.tile-img > img'), 2, {scaleX:1.08, scaleY:1.08, ease:Power1.easeInOut}, 0.2);
            
            
            
        },
        function()
        {
            tileanimtl.reverse();
        }
    
    
    )
    
    
    
    
    
    
    

});