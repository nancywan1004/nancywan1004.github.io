;$(function()
{
    'use strict';

    var sidebar = $('#sidebar'),
        mask = $('.mask'),
        backButton = $('.back-to-top'),
        sidebar_trigger = $('#sidebar_trigger');

    function ShowSideBar(){
        mask.fadeIn();
        sidebar.css('right',0);
    }

    function HideSideBar(){
        mask.fadeOut();
        sidebar.css('right', -sidebar.width());
    }
    sidebar_trigger.on('click', ShowSideBar);
    mask.on('click',HideSideBar);
    backButton.on('click', function () {
        $('html, body').animate({scrollTop: 0},800);
    })

    $(window).on('scroll',function(){
        if($(window).scrollTop() > $(window).height())
            backButton.fadeIn();
        else
            backButton.fadeOut();
    })

    $(window).trigger('scroll');

})