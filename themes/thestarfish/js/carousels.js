(function($) {

    $('.carousel-container').flickity({
        // options
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true,
        fullscreen: true,
        pageDots: false,
        contain: true
    });

    $('.carousel-top-25').flickity({
        // options
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true,
        fullscreen: true,
        pageDots: false,
        contain: true
    });

    $('.container-single').each(function (){
        $(this).append('<div class="carousel-btns"></div>');
        $(this).children('.flickity-prev-next-button').appendTo($(this).find('.carousel-btns'));
    });
    
    $('.container-double').each(function (){
        $(this).append('<div class="carousel-btns"></div>');
        $(this).children('.flickity-prev-next-button').appendTo($(this).find('.carousel-btns'));
    });

})( jQuery );