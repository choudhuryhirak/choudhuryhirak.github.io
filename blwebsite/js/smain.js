$(document).ready(function(){
    
    //Init Scrollmagic
    
    var controller = new ScrollMagic.Controller();
    
    $('.angle-bg sky-bg section-padding').each(function(){
        
        var mainScene = new ScrollMagic.Scene({
            triggerElement: this.children[0],
            triggerHook: 0.8
            
            
        })
        .setClassToggle(this, 'fade-in')
        .addIndicators(
            {
                name: 'fade scene',
                colorTrigger: 'black',
                colorStart: 'orange',
                colo00000rEnd: 'indigo'

            })
        
        
        
        
        .addTo(controller);
        
        
    })
    
    
    
    
});