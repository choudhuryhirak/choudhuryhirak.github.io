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
    
    
    var controller1 = new ScrollMagic.Controller();
    
    
    var animatein = new TimelineMax();
    animatein
    .from('#dotitle', 0.8, {autoAlpha:0, ease:Power1.easeIn},0.2)
    .from('#tsstyle', 0.6, {autoAlpha:0, ease:Power2.easeIn},0.4)
    .from('#taoofsixtitle', 0.5, {autoAlpha:0, ease:Power3.easeNone},0.6)
    .from('#bulb img', 2, {scaleX:0,scaleY:0},0.8)
    .from('#taoofsix1', 0.6, {autoAlpha:0, x:"-100%",y:"0"},1.4)
    .from('#taoofsix2', 0.6, {autoAlpha:0, x:"-50%",y:"0"},1.6);
    
    
    var bulbScene = new ScrollMagic.Scene({
        triggerElement: '#bulb',
        triggerHook: 0.8
        
        
    })
    .setTween(animatein)
    .addTo(controller1);
    
    
    
    var controller2 = new ScrollMagic.Controller();
    
    var animatein2 = new TimelineMax();
    animatein2
    .from('#sode img', 3, {autoAlpha:0, x:"50%", y:"0"},0.2)
    .from('.dt', 0.6, {autoAlpha:0, x:"-25%", y:"0"},0.2)
    .from('#styleimg', 0.8, {autoAlpha:0, ease:Power1.easeIn},0.4)
    .from('#dwcopy', 0.6, {autoAlpha:0, x:"0", y:"15%"}, 0.6)
    .from('#dwicon', 1.2, {autoAlpha:0, x:"0", y:"40%"}, 1.2)
    ;
    
    var whyusScene = new ScrollMagic.Scene({
        triggerElement: '#whyus',
        triggerHook: 0.6
    })
    .setTween(animatein2)
    .addTo(controller1);
    
    //build a scene
    
     
    
    
});