jQuery(document).ready(function(){
    var stickyOffset = jQuery('.header_sticky').offset().top;
    jQuery(window).scroll(function(){
        var sticky = jQuery('.header_sticky'),
            scroll = jQuery(window).scrollTop();
      
        if (scroll >= stickyOffset) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
});

jQuery(document).ready(function(){
    var inner_stickyOffset = jQuery('.sticky_header').offset().top;  
    jQuery(window).scroll(function(){
        var inner_sticky = jQuery('.sticky_header'),
            inner_scroll = jQuery(window).scrollTop();
      
        if (inner_scroll >= 10) inner_sticky.addClass('fixed_inner');
        else inner_sticky.removeClass('fixed_inner');
    });
});