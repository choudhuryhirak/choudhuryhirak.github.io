$(document).ready(function(){
    
    //Init Scrollmagic
    
   // var controller = new ScrollMagic.Controller();
    
    //$('.container').each(function(){
        
        //var mainScene = new ScrollMagic.Scene({
            //triggerElement: this.children[0],
            //triggerHook: 0.8
            
            
        //})
        //.setClassToggle(this, 'fade-in')
        //.addIndicators(
            //{
                //name: 'fade scene',
                //colorTrigger: 'black',
                //colorStart: 'orange',
                //colo00000rEnd: 'indigo'

            //})
        
        
        
        
        //.addTo(controller);
        
        
    //})
    
    
    var controller = new ScrollMagic.Controller();
    
    
    var animatein = new TimelineMax();
    animatein
    .from('#bulb img', 0.6, {autoAlpha: 0, ease:Power0.easeNone}, 0.4);
    
    
    var bulbScene = new ScrollMagic.Scene({
        triggerElement: '#bulb img',
        triggerHook: 0.5,
        duration: '20%'
        
    })
    .setTween(animatein)
    .addTo(controller);
    
    
    
    
    
    
    
    
    
    
    
    //build a scene
    
     
    
    
});