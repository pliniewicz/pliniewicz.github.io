
$(document).ready(function () {

    

    

    function goAnchor() {

        let anchors = $(".anchor");

        $.each( anchors, function(i, elem) {

            let anchor = $(elem);

            anchor.on("click", function(e) {
                e.preventDefault();
 
                let target = anchor.attr("href");
                let position = $(target).offset().top;
                
                if ( $("body").outerWidth() <= 768 ) {
                    $(".NAV").hide();
                }

                anchor.animate(target);
                $("html, body").stop().animate({
                    scrollTop: (position - 80)
                }, 500)
            })
        })

    }

    function showNav() {
        var bar = $(".bar")

        bar.on("click", function() {
            $(".NAV").show();
        })
    }
    
    goAnchor();
    showNav();

})