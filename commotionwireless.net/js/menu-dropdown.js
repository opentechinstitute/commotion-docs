$(document).ready(function() {
    $('#primary_nav_wrap > ul > li > a').click(function() {
        var checkElement = $(this).next();

        $('#primary_nav_wrap li').removeClass('active');
        $(this).closest('li').addClass('active');

        if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('fast');
        }
        if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#primary_nav_wrap ul ul:visible').slideUp('fast');
            checkElement.slideDown('fast');
        }

        if($(this).closest('li').find('ul').children().length == 0) {
            return true;
        } else {
            return false;
        }

    });
});
