$(function(){

    initCarousel()
    
    $('.teachers__theme').click(function () {
        let listId = $(this).data("filtered");
        if( !$(this).hasClass('active') ) {
            $('.teachers__theme').removeClass('active');
            $(this).toggleClass('active');
            $('.teachers__block_person').addClass('invisible');
            $('.teachers__block_person[data-filtered="'+listId+'"').toggleClass('invisible').css('opacity', 0).animate({ opacity: 1 }, 2000);
        }
    });
    
    function initCarousel() {
        if (!$('.owl-carousel').length) return;
    
        $(document).on('init', '.owl-carousel', function() {
            var
            $carousel = $(this),
            defaults = {
                loop: false,
                margin: 30,
                lazyLoadEager: 1,
                lazyLoad:true,
                nav: true
            },
            options = {}
            ;
    
            if ( $carousel.data('owl-options') ) {
                options = $carousel.data('owl-options');
                $.extend(defaults, options);
            }
    
            $carousel.owlCarousel(defaults);
        });
    
        $('.owl-carousel').trigger('init');
    }   
})

