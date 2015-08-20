$(document).ready(function() {
    $('button.toggle-menu').click(function() {
        $(this).next('div').toggle();
    });
    $('#menu-dropdown > ul > li > a').click(function() {
        var checkElement = $(this).next();

        $('#menu-dropdown li').removeClass('active');
        $(this).closest('li').addClass('active');

        if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('fast');
        }
        if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#menu-dropdown ul ul:visible').slideUp('fast');
            checkElement.slideDown('fast');
        }

        if($(this).closest('li').find('ul').children().length == 0) {
            return true;
        } else {
            return false;
        }

    });
});
