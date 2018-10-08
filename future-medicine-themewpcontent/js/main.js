/**
 * User: Agenzzia
 * Web:  www.agenzzia.com
 * Date: 5/31/2017
 * Time: 11:55 AM
 */
"use strict";
(function($) {
    var headerContainer = $('.head-content-wrapper');
    var footerContainer = $('.footer-content-wrapper');

    var mobileMenuTrigger = $('.navigation-trigger a:last-child');
    var mobileLink = $('.mobile-links-list-container ul li a:link');
    var linksContainer = $('.mobile-links-list-container');
    var sideMenu = $('.side-menu');
    var sideMenuCloseButton = sideMenu.find('a.side-menu-close-button');
    var mobileMenuLinkIcon = mobileMenuTrigger.find('i');

    var mainPageTrigger = $('.lower-nav >ul').find('a');

    var bannerCloseButton = $('.close-banner');

    var videoPlayButton = $('.video-wrapper >.main-video').find('.content-block a');

    var videoChoser = $('.videos-choser-block ul li').find('a');
    var mainVideo = $('.video-wrapper >.main-video');
    var closeModalButton = $('.button-close-modal');
    var nextImage = '';
    var nextTitle = '';
    var nextContent = '';
    var nextPermalink = '';
    var nextVideoTitle = '';
    var nextVideoSource = '';

    var innerTopicsTopArticle = $('.inner-topic-article-top');
    var innerTopicReadMoreLink = $('.inner-topic-read-more-link');
    var innerTopicTopArticleChangeTrigger = $('.articles-array').find('a');
    var innerTopArticleMainImage = innerTopicsTopArticle.find('> .article-image');
    var innerTopArticleContent = innerTopicsTopArticle.find('> .article-content-wrapper');

    var accordionArticleExcerpt = $('.accordion-content').find('.article-excerpt');

    var SubscriptionPageBenefitsBlockTitle = $('.subscription-page .benefits ul li .subscription-benefit h3');

    var sideMenu = $('.side-menu').find('.menu');


    /**
     * initializations
     */

    CustomNavigation.InitNavigation($('.lower-nav'));
    utilities.MoveExistingImagesToContainerBackgroundCover();

    $('.owl-carouselPostBlock').owlCarousel({
        loop      : true,
        margin    : 20,
        nav       : true,
        navText   : ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0   : {
                items: 1
            },
            992 : {
                items: 2
            },
            1250: {
                items: 3
            }
        }
    });

     $('.owl-carouselEvents').owlCarousel({
        loop      : true,
        margin    : 20,
        nav       : false,
        autoplay  : true,
        autoplayTimeout: 3000,
        navText   : ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0   : {
                items: 1
            },
            992 : {
                items: 2
            },
            1300 : {
                items: 1
            }
        }
    });

    sideMenu.each(function(){
        $(this).append('<li></li><li></li><li></li><li></li><li></li><li></li>');
    });

    /**
     * events
     */

    videoPlayButton.click(function() {
        console.log('vidimo se click');
        $('#exampleModalCenter').find('.video-container iframe').attr('src', $(this).attr('data-video-url'));
        $('#exampleModalCenter').modal('show');
    });

    if(utilities.IsExisty(mobileMenuTrigger)){
        mobileMenuTrigger.click(function(ev) {
            // $(this).removeClass('opened');
            sideMenu.each(function() {
                $(this).removeClass('opened');
            });
            var currentState = linksContainer.css('display');
            SwitchIcon(currentState);
            linksContainer.slideToggle();

            // var icon = $(this).find('i');

        });
    }

    function SwitchIcon(currentState) {
        switch(currentState) {
            case 'none':
                mobileMenuLinkIcon.removeClass();
                mobileMenuLinkIcon.addClass('fa fa-times');
                return false;
                break;
            case 'block':
                mobileMenuLinkIcon.removeClass();
                mobileMenuLinkIcon.addClass('fa fa-bars');
                break;
        }
    }

    /**
     * side menu open functionalityu
     */
    mobileLink.click(function() {
        var dataTargetAttribute = $(this).attr('data-target');
        if(typeof dataTargetAttribute !== typeof undefined && dataTargetAttribute !== false){
            var targetSlideMenuId = $(this).attr('data-target');
            $(targetSlideMenuId).addClass('opened');
            linksContainer.slideUp();
            SwitchIcon('block');
        }

    });

    sideMenuCloseButton.click(function() {
        $(this).closest('.side-menu').removeClass('opened');
    });

    $(window).load(function() {

        if(utilities.IsExisty($('.subscription-page')) || utilities.IsExisty($('.accordion-blocks'))){
            $(this).trigger('resize');
        }

    });

    $(window).resize($.throttle(250, function() {
        utilities.EqualizeElementsHeightByRow(SubscriptionPageBenefitsBlockTitle);
        utilities.EqualizeElementsHeightByRow(accordionArticleExcerpt);

    }));

    innerTopicTopArticleChangeTrigger.click(function() {
        return;
        var targetContainer = innerTopicsTopArticle.find('.article-content-wrapper').add(innerTopicsTopArticle.find('> .article-image'));
        targetContainer.each(function() {
            $(this).css({'opacity': '0'});
        });
        nextImage = $(this).find('.background-image-listener-cover').css('background-image');
        nextTitle = $(this).find('.article-title h3').html();
        nextContent = $(this).find('.article-content.d-none').html();
        nextPermalink = $(this).find('.article-next-permalink').html();
    });

    innerTopArticleMainImage.on('transitionend', function() {
        var newArticleContent = '<h2>' + nextTitle + '</h2>';
        newArticleContent += '<div class="inner-content">' + nextContent + '</div>';
        innerTopArticleContent.html(newArticleContent);

        $(this).find('.background-image-listener-cover').css({
            'background-image': nextImage,

        });
        $(this).css({
            'opacity': '1'
        });
        innerTopArticleContent.css({
            'opacity': '1'
        });
        $(this).parent().find('.article-read-more-link a').attr('href', nextPermalink);

    });

    innerTopicReadMoreLink.click(function() {

        var listItems = ($(this).closest('.inner-topic-past-isues').find('ul li'));
        if(!$(this).hasClass('opened')){
            listItems.each(function() {
                $(this).css({
                    'margin-bottom' : '40px',
                    'padding-bottom': '40px',
                    'border-bottom' : '1px dashed #848484',
                    'max-height'    : '500px'
                });
            })
            $(this).addClass('opened');
        }
        else {
            listItems.each(function(index) {
                if(index > 3){
                    $(this).css({
                        'margin-bottom' : '0',
                        'padding-bottom': '0',
                        'border-bottom' : '0px dashed #848484',
                        'max-height'    : '0'
                    });
                }

            });
            $(this).removeClass('opened');
            var visibleListElement = listItems.eq(4);
            
            window.setTimeout(function() {
                visibleListElement[0].scrollIntoView({
                    behavior: 'smooth'
                })
            }, 2000);
        }

    });

    closeModalButton.click(function() {
        $('#exampleModalCenter').find('iframe').each(function() {
            var el_src = $(this).attr("src");
            $(this).attr("src", '');
        })
        $('#exampleModalCenter').modal('hide');
    });

    videoChoser.click(function() {
        var src = $(this).closest('.image-content').find('img').attr('src');
        var videoSource = $(this).attr('data-video-url');
        console.log(videoSource);
        var title = $(this).closest('.content-block').find('.title').html();
        var checkTitle = mainVideo.find('.title').html();
        if(checkTitle === title) return;
        nextImage = src;
        nextVideoTitle = title;
        nextVideoSource = videoSource
        mainVideo.css({
            'opacity': '0'
        });
    });

    mainVideo.on('transitionend', function(ev) {

        $(this).find('.image-content >img').attr('src', nextImage);
        $(this).find('.content-block a').attr('data-video-url', nextVideoSource);
        $(this).find('.title').html(nextVideoTitle);
        $(this).css({
            'opacity': '1'
        });
    });

    mainPageTrigger.click(function() {
        $(this).toggleClass('active');
    });

    bannerCloseButton.click(function() {
        $(this).closest('.subscribe-add').remove();
    });

    function Init() {

    };

    $('.accordion-trigger').click(function() {
        var parent = $(this).closest('.accordion-item');
        var indicator = $(this).find('span.indicator');
        var content = parent.find('.accordion-content');
        var allContents = $('.accordion-content');
        var allIndicators = $('.accordion-trigger').find('span.indicator');
        if(content.hasClass('active')){
            content.removeClass('active');
            indicator.html('+');
            return;
        }
        allContents.each(function() {
            $(this).removeClass('active');
        });
        allIndicators.html('+');
        content.toggleClass('active');
        indicator.html('&#8212;');
    });

    footerContainer.load('footer.html');
    

}(jQuery));







