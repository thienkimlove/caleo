$(function() {

    var sidebar =   $('#sidebar');
    var top = sidebar.offset().top.toFixed(0);
    var maxY = top - sidebar.outerHeight().toFixed(0);


    $(window).scroll(function(evt) {


        var y = $(this).scrollTop().toFixed(0);

        if (y > top) {
            if (y < maxY) {
                sidebar.addClass('fixed').removeAttr('style');
            } else {
                sidebar.removeClass('fixed').css({
                    position: 'absolute',
                    top: (maxY - top) + 'px'
                });
            }
        } else {
            sidebar.removeClass('fixed');
        }


    });
});