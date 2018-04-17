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
    .from('#dotitle', 0.8, {autoAlpha:0, ease:Power1.easeIn},0.2)
    .from('#tsstyle', 0.6, {autoAlpha:0, ease:Power2.easeIn},0.4)
    .from('#taoofsixtitle', 0.5, {autoAlpha:0, ease:Power3.easeNone},0.6)
    .from('#bulb img', 2, {scaleX:0,scaleY:0},0.8)
    .from('#taoofsix1', 2, {scaleX:0,scaleY:0},0.8)
    .from('#taoofsix2', 2, {scaleX:0,scaleY:0},0.8);
    
    
    var bulbScene = new ScrollMagic.Scene({
        triggerElement: '#bulb',
        triggerHook: 0.8,
        
        
    })
    .setTween(animatein)
    .addTo(controller);
    
    
    //build a scene
    
     
    
    
});