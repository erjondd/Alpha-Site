jQuery(document).ready(function () {

    $('.page').on('scroll',function(e){
        
        var scrolltop = $(this).scrollTop();
        if(scrolltop > 40){
            $('.menu-wrapper').addClass('scroll-up-to-100');
        }else{
            $('.menu-wrapper').removeClass('scroll-up-to-100');
        }

    })

});
