
/*floating header*/

$(function() {
         if ($('.ybc_custom_float_header').length > 0)
         {                
                if ( $('#header.layout_2').length > 0 || ('#header.layout_3').length > 0 ){
                    if ( $('.ybc-menu-wrapper').length > 0){
                        var sticky_navigation_offset_top = $('.ybc-menu-wrapper').offset().top;
                    }
                }else{
                    var sticky_navigation_offset_top = $('.ybc_custom_float_header').offset().top;
                }
                var headerFloatingHeight = $('.ybc_custom_float_header').height();
                
                var sticky_navigation = function(){
                    var scroll_top = $(window).scrollTop(); 
                    
                     
                    if (scroll_top > sticky_navigation_offset_top) {
                        $('.ybc_custom_float_header').addClass('scroll_heading').css({ 'position': 'fixed','background-color': '#fff','z-index':'10'});
                        $('#header').css({'margin-bottom':''+headerFloatingHeight+'px'});
                    } else {
                        $('.ybc_custom_float_header').removeClass('scroll_heading').css({ 'position': 'relative','background-color': 'transparent','z-index':'0' });
                        $('#header').css({'margin-bottom':'0px'});
                    }  
                };
                
                sticky_navigation();
                 
                $(window).scroll(function() {
                     sticky_navigation();
                });
            }
    });

$(window).resize(function(){
    if ($(window).width() < 768){
        $('.ybc_custom_float_header').addClass('no_scroll_heading');
        $('#header').addClass('no_scroll_header');
    } else {
        $('.ybc_custom_float_header').removeClass('no_scroll_heading');
        $('#header').removeClass('no_scroll_header');
        
        
        
        if ( $('#header.layout_2').length > 0 || ('#header.layout_3').length > 0 ){
            if ( $('.ybc-menu-wrapper').length > 0){
                var sticky_navigation_offset_top = $('.ybc-menu-wrapper').offset().top;
            }
        }else{
            var sticky_navigation_offset_top = $('.ybc_custom_float_header').offset().top;
        }
        var headerFloatingHeight = $('.ybc_custom_float_header').height();
        
        var sticky_navigation = function(){
            var scroll_top = $(window).scrollTop(); 
            if (scroll_top > sticky_navigation_offset_top) {
                $('.ybc_custom_float_header').addClass('scroll_heading').css({ 'position': 'fixed','background-color': '#fff','z-index':'10'});
                $('#header').css({'margin-bottom':''+headerFloatingHeight+'px'});
            } else {
                $('.ybc_custom_float_header').removeClass('scroll_heading').css({ 'position': 'relative','background-color': 'transparent','z-index':'0' });
                $('#header').css({'margin-bottom':'0px'});
            }  
        };
        sticky_navigation();
        
    }
});

$(document).ready(function(){
   $(document).on('click','.header_bottom.scroll_heading .ybc-menu-toggle',function(){
        if ( $(window).width() > 767 && $(window).width() < 992){
            $(this).parent().find('#ybc-menu-main-content').toggleClass('floating_active');
        }
        return false;
   }); 
    if ($(window).width() < 768){
        $('.ybc_custom_float_header').addClass('no_scroll_heading');
        $('#header').addClass('no_scroll_header');
    } else {
        $('.ybc_custom_float_header').removeClass('no_scroll_heading');
        $('#header').removeClass('no_scroll_header');
    }
});

$(document).ready(function() {    
    
    if(YBC_TC_FLOAT_CSS3)
    {  
       var wow = new WOW(
          {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       false        // trigger animations on mobile devices (true is default)
          }
        );
        wow.init();
        
        $(document).on('click','#home-page-tabs a', function(){
            var datahref = $(this).attr('href');
            $('.tab-content .tab-pane:not(.active) .wow').removeClass('animated').css({'visibility':'hidden','animation-name':'none'});
            $(datahref+' .wow').delay(200).addClass('animated').css({'visibility':'visible','animation-name':'zoomIn'});                 
            
        });
        
    } else
    {
        $('.animated').removeClass('animated');
        $('.animation').removeClass('animation');        
    }    
});

