
// ===== Scroll to Top ====
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
                    $('#return-to-top, .socialSticky, .at4-share').fadeIn(200);    // Fade in the arrow
                } else {
                    $('#return-to-top, .socialSticky, .at4-share').fadeOut(200);   // Else fade out the arrow
                }
            });
            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 500);
            });



    (function(){

      if (window.screen.width <= 768) {

        var shareBtn = $('.share-btn');
        var socialTag = $('.socialtag');

          shareBtn.click(function(){

            socialTag.toggleClass('toggleFBS');

          });
      }

    })();

    (function(){

       $(".smooth-down").click(function() {
          $('html, body').animate({
              scrollTop: $("#highlights").offset().top
          }, 1500);
       });

     })();
//Share the current page to Facebook


//end


$(document).ready(function(){


  $('.inthisLook').owlCarousel({
      items:4,
      loop:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      nav:true,
      responsive:{
          0:{
              items:1,
              nav:false
          },
          500:{
              items:2,
              nav:true
          },
          768:{
              items:3,
              nav:true
          },

          992:{
              items:4,
              nav:true,
          }
      }
  })



  $('.owl-father').owlCarousel({
      items:3,
      loop:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      nav:true,
      responsive:{
          0:{
              items:1,
              nav:false
          },
          600:{
              items:2,
              nav:true
          },
          768:{
              items:3,
              nav:true
          },

          992:{
              items:3,
              nav:true,
          }
      }
  })
});

$('.owl-uncle1').owlCarousel({
        items:1,
          loop:true,
          nav:false,
          dots: false,
          autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:true,
          nav:true,
        responsive: {
            0:{
                  items:1,
                  nav:true
              },
              600:{
                  items:1,
                  nav:true
              },
              768:{
                  items:1,
                  nav:true
              },

              992:{
                  items:1,
                  nav:true,
              }


            }

    })


    $('.owl-keep').owlCarousel({
        items:5,
          loop:true,
          nav:false,
          dots: false,
          autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:true,
          nav:true,
          responsive: {
            0:{
                  items:1,
                  nav:false
              },
              600:{
                  items:2,
                  nav:true
              },
              768:{
                  items:3,
                  nav:true
              },

              992:{
                  items:4,
                  nav:true,
              }

            }
    })



//end caro

    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }


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



    //about-page

    var jrnycontroller2 = new ScrollMagic.Controller();


    var jrnytimeline2 = new TimelineMax();

    jrnytimeline2


    .from(".journeytitle > p", 1, {css:{color: "#fff"}, ease:Power1.easeOut},0.2)
    .reverse();
    ;

    var jrnyscene2 = new ScrollMagic.Scene({

        triggerElement: '#journey'

    })
    .setTween(jrnytimeline2)
    .addTo(jrnycontroller2);



    var jrnycontroller = new ScrollMagic.Controller();


    var jrnytimeline = new TimelineMax();

    jrnytimeline


    .from(".journeytitle > p", 1, {css:{color: "#000"}, ease:Power1.easeOut},0.2)
    .reverse();
    ;

    var jrnyscene = new ScrollMagic.Scene({

        triggerElement: '#jrnytrigger'




    })
    .setTween(jrnytimeline)
    .addTo(jrnycontroller);



    //menu--nav--overlay
    var menuscroller = new ScrollMagic.Controller();
    var menutl = new TimelineMax();

    menutl

    .to("i.fas.fa-bars", 0.2,{css:{color: "#000"}, ease:Power1.easeOut}, 0.1)
    .to("i.fas.fa-bars", 0.2,{css:{color: "#fff"}, ease:Power1.easeOut}, 0.1)
    ;

    var menutlScene = new ScrollMagic.Scene({

        triggerElement: '#cover-overlay'

    })
    .setTween(menutl)
    .addTo(menuscroller);



    //2mno


    var menuscroller2 = new ScrollMagic.Controller();
    var menutl2 = new TimelineMax();

    menutl2

    .to("i.fas.fa-bars", 0.2,{css:{color: "#fff"}, ease:Power1.easeOut}, 0.1)
    .to("i.fas.fa-bars", 0.2,{css:{color: "#000"}, ease:Power1.easeOut}, 0.2)
    ;


    var menutlScene2 = new ScrollMagic.Scene({

        triggerElement: '#blockcc'




    })
    .setTween(menutl2)
    .addTo(menuscroller2);


    var menuscroller3 = new ScrollMagic.Controller();
    var menutl3 = new TimelineMax();

    menutl3

    .to("i.fas.fa-bars", 0.2,{css:{color: "#fff"}, ease:Power1.easeOut}, 0.1)
    .to("i.fas.fa-bars", 0.2,{css:{color: "#000"}, ease:Power1.easeOut}, 0.2)
    ;


    var menutlScene3 = new ScrollMagic.Scene({


        triggerElement: '#highlights'

    })
    .setTween(menutl3)
    .addTo(menuscroller3);



    var logoscroller = new ScrollMagic.Controller();
    var logotl = new TimelineMax();

    logotl
    .to("#logonav", 0.2, {autoAlpha:1, ease:Power1.easeIn}, 0.1);

    var logoscrollerScene = new ScrollMagic.Scene({

            triggerElement: '#why-us'

    })
    .setTween(logotl)
    .addTo(logoscroller);


   //
   //  var tlanim;
   // $('.owl-container').hover(
   //
   // function()
   //     {
   //         tlanim = new TimelineMax();
   //         tlanim.to($(this).find('.transitionbox'), 0.3, {scaleX:1.50, scaleY:1.50, autoAlpha:0.9, ease:Power1.easeIn}, 0.3)
   //         .to($(this).find('.carotitle'), 1, {autoAlpha:1, x:"0", y:"60%", ease:Power1.easeInOut},0.4);
   //
   //
   //     },
   //     function()
   //     {
   //         tlanim.reverse();
   //     }
   //
   //
   //
   // )



//    card-commit zoom


    var cardzoom;
    $('.category-card').hover(


    function()
        {
            cardzoom = new TimelineMax();
            cardzoom.to($(this).find('.card'), 0.6, {scaleX:1.1, scaleY:1.1, ease:Power1.easeInOut}, 0.3)
        },
        function()
        {
            cardzoom.reverse();
        }

    )



});



$(document).ready(function(){


//Pagination
pageSize = 9;

$(function() {
  var pageCount = Math.ceil($(".line-content").size() / pageSize);

  for (var i = 0; i < pageCount; i++) {

    if (i == 0)
      $("#pagin").append('<li><a class="current" href="javascript:void(0)">' + (i + 1) + '</a></li>');
    else
      $("#pagin").append('<li class="pagination-button"><a href="javascript:void(0)">' + (i + 1) + '</a></li>');
  }


  showPage(1);

  $("#pagin li a").click(function() {
    $("#pagin li a").removeClass("current");
    $(this).addClass("current");
    showPage(parseInt($(this).text()))

    $("html, body").animate({ scrollTop: 1200 }, 1000);
  });

})

showPage = function(page) {
  $(".line-content").hide();

  $(".line-content").each(function(n) {
    if (n >= pageSize * (page - 1) && n < pageSize * page)
      $(this).show();
  });
}

// $('#pagin li').click(function(){
//   $("html, body").animate({ scrollTop: 1200 }, 1000);
//   return false;
// });
//

    // (function(){

    //     var paginate = {
    //         startPos: function(pageNumber, perPage) {
    //             // determine what array position to start from
    //             // based on current page and # per page
    //             return pageNumber * perPage;
    //         },

    //         getPage: function(items, startPos, perPage) {
    //             // declare an empty array to hold our page items
    //             var page = [];

    //             // only get items after the starting position
    //             // items = items.slice(startPos, items.length);
    //             // items = items.css('display','none');

    //             // loop remaining items until max per page
    //             for (var i=0; i < perPage; i++) {
    //                 page.push(items[i]); }

    //             return page;
    //         },

    //         totalPages: function(items, perPage) {
    //             // determine total number of pages
    //             return Math.ceil(items.length / perPage);
    //         },

    //         createBtns: function(totalPages, currentPage) {
    //             // create buttons to manipulate current page
    //             var pagination = $('<div class="pagination" />');

    //             // add a "first" button
    //             pagination.append('<span class="pagination-button">&laquo;</span>');

    //             // add pages inbetween
    //             for (var i=1; i <= totalPages; i++) {
    //                 // truncate list when too large
    //                 if (totalPages > 5 && currentPage !== i) {
    //                     // if on first two pages
    //                     if (currentPage === 1 || currentPage === 2) {
    //                         // show first 5 pages
    //                         if (i > 5) continue;
    //                     // if on last two pages
    //                     } else if (currentPage === totalPages || currentPage === totalPages - 1) {
    //                         // show last 5 pages
    //                         if (i < totalPages - 4) continue;
    //                     // otherwise show 5 pages w/ current in middle
    //                     } else {
    //                         if (i < currentPage - 2 || i > currentPage + 2) {
    //                             continue; }
    //                     }
    //                 }

    //                 // markup for page button
    //                 var pageBtn = $('<span class="pagination-button page-num" />');

    //                 // add active class for current page
    //                 if (i == currentPage) {
    //                     pageBtn.addClass('active'); }

    //                 // set text to the page number
    //                 pageBtn.text(i);

    //                 // add button to the container
    //                 pagination.append(pageBtn);
    //             }

    //             // add a "last" button
    //             pagination.append($('<span class="pagination-button">&raquo;</span>'));

    //             return pagination;
    //         },

    //         createPage: function(items, currentPage, perPage) {
    //             // remove pagination from the page
    //             $('.pagination').remove();

    //             // set context for the items
    //             var container = items.parent(),
    //                 // detach items from the page and cast as array
    //                 items = items.detach().toArray(),
    //                 // get start position and select items for page
    //                 startPos = this.startPos(currentPage - 1, perPage),
    //                 page = this.getPage(items, startPos, perPage);

    //             // loop items and readd to page
    //             $.each(page, function(){
    //                 // prevent empty items that return as Window
    //                 if (this.window === undefined) {
    //                     container.append($(this)); }
    //             });

    //             // prep pagination buttons and add to page
    //             var totalPages = this.totalPages(items, perPage),
    //                 pageButtons = this.createBtns(totalPages, currentPage);

    //             container.after(pageButtons);
    //         }
    //     };

    //     // stuff it all into a jQuery method!
    //     $.fn.paginate = function(perPage) {
    //         var items = $(this);

    //         // default perPage to 5
    //         if (isNaN(perPage) || perPage === undefined) {
    //             perPage = 5; }

    //         // don't fire if fewer items than perPage
    //         if (items.length <= perPage) {
    //             return true; }

    //         // ensure items stay in the same DOM position
    //         if (items.length !== items.parent()[0].children.length) {
    //             items.wrapAll('<div class="pagination-items" />');
    //         }

    //         // paginate the items starting at page 1
    //         paginate.createPage(items, 1, perPage);

    //         // handle click events on the buttons
    //         $(document).on('click', '.pagination-button', function(e) {
    //             // get current page from active button
    //             var currentPage = parseInt($('.pagination-button.active').text(), 10),
    //                 newPage = currentPage,
    //                 totalPages = paginate.totalPages(items, perPage),
    //                 target = $(e.target);

    //             // get numbered page
    //             newPage = parseInt(target.text(), 10);
    //             if (target.text() == '«') newPage = 1;
    //             if (target.text() == '»') newPage = totalPages;

    //             // ensure newPage is in available range
    //             if (newPage > 0 && newPage <= totalPages) {
    //                 paginate.createPage(items, newPage, perPage); }

    //             $("html, body").animate({ scrollTop: 1200 }, 1000);
    //             return false;
    //         });
    //     };

    // })();

    // /* This part is just for the demo,
    // not actually part of the plugin */
    // $('.article-loop').paginate(9);

});


(function(){

  const prdSelectAlert = document.querySelector('#prdSelectAlert');
        prdSelectAlert.onclick = function(){
          this.style.bottom = '-310px';
        }

  const sendPrdRequestAlertClose = document.querySelector('#sendPrdRequestAlert');
        sendPrdRequestAlertClose.onclick = function(){
          this.style.bottom = '-310px';
        }

  const productCheckWrap = document.querySelectorAll('.productselect .product-check-round');
  const cartBox = document.querySelector('.cart-box');
  const cartValbox = document.querySelector('.cart-value input');

  // console.log(cartbox);

  for(var i = 0;i < productCheckWrap.length; i++){

    productCheckWrap[i].onclick = function(){

      prdSelectAlert.style.bottom = '-350px';

      const thisCheckInput = this.children[0];

      if(!thisCheckInput.checked){

        thisCheckInput.checked = true;

        var thisValIn = cartValbox.value ++;

          if(thisValIn+1 > 0){
            cartBox.style.display = 'block';
          }
          if(thisCheckInput.checked){
            thisCheckInput.setAttribute('class','prdvalue');
          }

          const checkedInput = document.querySelectorAll('.prdvalue');
          const sendPrdRequestAlert = document.querySelector('#sendPrdRequestAlert');
          if(checkedInput.length == 1){
            // console.log('yes');
            sendPrdRequestAlert.style.bottom = '40px';
          }else{
            // console.log('noe');
            sendPrdRequestAlert.style.bottom = '-350px';
          }
          
        this.style.display = 'block';

      }else{
        thisCheckInput.checked = false;
        var thisValDc = cartValbox.value --;
        this.style.display = 'none';

          if(thisValDc == 1){
            cartBox.style.display = 'none';
          }
          if(!thisCheckInput.checked){
            thisCheckInput.removeAttribute('class');
          }
      }

    } //eo onclick

  } //eo loop


  cartBox.onclick = function(){

    const productCheckElement = document.querySelectorAll('.productselect .product-check-round .prdvalue');
    const dataAppendTo = document.querySelector('.dataAppend');

    let selectedProductList = [];

    for (let prdtitle of productCheckElement){

        let takePrdValue = prdtitle.value;

        selectedProductList.push(takePrdValue);
    }

    dataAppendTo.value = selectedProductList + ' , ';


    // for(let selectprdValue of selectedProductList){

    //     const selectListElm  = document.createElement('span');

    //     dataAppendTo.appendChild(selectListElm).textContent = selectprdValue;

    //    // console.log(dataAppendTo);

    // }


    $('#productRequestModal').modal('show');

  }


})();
