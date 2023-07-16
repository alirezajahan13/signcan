var $ = jQuery;

$(window).on('scroll' , function(){
    if($(document).scrollTop() >= 120){
        $('.stickyHeaderParent').addClass('showStickyHeader');        
    
    }
    else{
        $('.stickyHeaderParent').removeClass('showStickyHeader');                        
    }
});
$(document).ready(function(){
    $('.mobMenu>ul>.menu-item-has-children').append('<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 495.9 272.9"><path d="m25 25 222.9 222.9L470.9 25" style="fill:none;stroke:#6f8b74;stroke-linecap:round;stroke-linejoin:round;stroke-width:40px"/></svg>')
    $('.mobMenuParent .mobileMenuIcon').click(function(){
        $('.siteMainOverlay').addClass('showSiteOverlay');
        $('.mainMobileMenuParent').addClass('showMobileMenu');
    });
    $('.mobMenu>ul>.menu-item-has-children>svg ').click(function(){
        $('.mobMenu>ul>.menu-item-has-children>ul').slideUp(300);
        if($(this).siblings("ul").css('display') == 'block'){
            $(this).siblings('ul').slideUp(400);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
        }        

    });
});
