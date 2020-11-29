(function($) {
    
    "use strict"; 
    
    // author : lionthemes
    
    $(document).ready(function() {
        
        var html = $("html"),
            body = $("body"),
            list = $("nav ul li, .carousel-caption, #ABOUT").find("a"),
            tags = $(".tags ul li").find("a");
            
        
        list.each(function(i, elem) {
            
            var elem = $(this),
                elemAttr = elem.attr("href");
            
                elem.on("click", function(e) {
                   
                    if(elem.attr("href") === "CONTACT") {
                       $("html, body").stop().animate({scrollTop: $(document).height() }, 1000);
                    }
                    $("html, body").stop().animate({scrollTop: $(elemAttr).offset().top}, 1000);
                });
           
        });
       
        $('.more-link').addClass('btn button-104').text('Więcej');
        
        $('<span class="cor cor-short-arrow-right"aria-hidden="true"></span>').prependTo($('.more-link'));
        
        tags.each(function() {
            
            var eachTags = $(this),
                eachTagsAttr = eachTags.attr("href");
            
            eachTags.on("click", function(e) {
               e.preventDefault();
                $("html, body").stop().animate({scrollTop: $(eachTagsAttr).offset().top - 160}, 1000);
                $(eachTagsAttr).addClass('thisGas').siblings().removeClass('thisGas');
                
            });
        });
        
    });
 
 
})(jQuery);