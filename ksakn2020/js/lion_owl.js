(function($) {

    $(document).ready(function() {

        $('.partners-slider').owlCarousel({
            loop:true,
            autoplay:true,
            autoplayTimeout:1000,
            margin:0,
            nav:true,
            dots:false,

            responsive:{
                0:{
                    items:3
                },
                800:{
                    items:5
                },
                1200:{
                    items:7
                }
            }
        })
    });
})(jQuery);
