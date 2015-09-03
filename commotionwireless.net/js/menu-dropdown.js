$(document).ready(function() {
    $('button.toggle-menu').click(function() {
        $(this).next('div').toggle();
    });
    $('.accordion > ul > li > a').click(function() {
        var origElement = $(this);
        var checkElement = origElement.next();
        var iconElement = origElement.find('i');

        $('.accordion li').removeClass('active');
        $(this).closest('li').addClass('active');

        // reset icon on inactive element
        if ($('.accordion i').hasClass('fa-minus')) {
            $('.accordion i').removeClass('fa-minus').addClass('fa-plus');
        }

        // set icon on active element
        if (iconElement.hasClass('fa-plus')) {
            iconElement.removeClass('fa-plus').addClass('fa-minus');
        } else {
            iconElement.removeClass('fa-minus').addClass('fa-plus');
        }

        if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('fast');
        }

        if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('.accordion ul ul:visible').slideUp('fast');
            checkElement.slideDown('fast');
        }

        if($(this).closest('li').find('ul').children().length == 0) {
            return true;
        } else {
            return false;
        }

    });
});
