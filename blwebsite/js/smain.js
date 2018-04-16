$(document).ready(function(){
    
    //Init Scrollmagic
    
    var controller = new ScrollMagic.Controller();
    
    $('.section').each(function(){
        
        var mainScene = new ScrollMagic.Scene({
            triggerElement: this.children[0],
            triggerHook: 0.8
            
            
        })
        .setClassToggle(this, 'fade-in')
        .addTo(controller);
        
        
    })
    
    
    
    
});