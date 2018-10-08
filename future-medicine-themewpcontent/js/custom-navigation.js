/**
 * Web:  www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 18-May-18
 * Time: 15:45
 */
"use strict";

var CustomNavigation = (function($) {
    var trigger;
    var dropdownContainer;
    var isButtonHover = false;

    function initNavigation(menuElement) {

        var menuParent = menuElement.find('>ul');
        trigger = menuParent.find('a[data-has-menu]');
        dropdownContainer = menuElement.find('.navigation-dropdown');

        trigger.click(function() {

            var targetId = $(this).attr('data-has-menu');
            var dropdownElement = $(targetId);

            if(!$(this).hasClass('active')){
                dropdownContainer.each(function() {
                    if($(this).hasClass('active')){
                        $(this).removeClass('active');
                    }
                });
                trigger.each(function() {
                    if($(this).hasClass('active')){
                        $(this).removeClass('active');
                    }
                });
                PlaceDropdown($(this), dropdownElement, menuElement);
                dropdownElement.addClass('active');
            }
            else {
                dropdownElement.removeClass('active');
            }
        });

        trigger.hover(function() {
            isButtonHover = true;
        }, function() {
            isButtonHover = false;
        });

        dropdownContainer.on('transitionend', function() {
            if(!$(this).hasClass('active')){
                var targetFlag = '#' + $(this).attr('id');
                var targetButton = menuParent.find('[data-has-menu = "' + targetFlag + '"]');
                targetButton.removeClass('active');

            }
        });

    }

    $(document).mouseup(function(e) {

        if(!isButtonHover){
            var container = dropdownContainer;
            if(!container.is(e.target) && container.has(e.target).length === 0){
                container.removeClass('active');

            }
        }

    });

    function PlaceDropdown(trigger, dropdownElement, menuElement) {

         if(dropdownElement.hasClass('search')) return;

        var triggerOffset = trigger.offset().left;
        var containerOffset = menuElement.offset().left;
        var dropdownFarRightSidePosition = $(dropdownElement.width())[0] + triggerOffset;
        var windowWidth = $(window).width();
        if(windowWidth > dropdownFarRightSidePosition){
            dropdownElement.css({
                'left': utilities.AddPixelMeasure(triggerOffset - containerOffset)
            });
        }
        else {

            dropdownElement.css({
                right: 0
            })
        }
    }

    return {
        InitNavigation: initNavigation
    }
}(jQuery));
