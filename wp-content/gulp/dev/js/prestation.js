jQuery(document).ready(function () {
    $('.box-slide-click').click(function () {
        var video = $('.prestations-video');
        
        $('.video-is-played').removeClass('video-is-played');

        for( var i = 0; i <= video.length; i++ ){

            if(typeof video[i] !== 'undefined'){
                video[i].pause();
            }
            
        }

        var anm = $('.page-prestations').attr('current');
        if (anm == 'genie_civil') {
            $(".page-prestations").removeClass("prestation-genie_civil");
            $(".page-prestations").addClass("prestation-batiment");
            $('.page-prestations').attr('current', 'batiment');
        }
        if (anm == 'batiment') {
            $(".page-prestations").removeClass("prestation-batiment");
            $(".page-prestations").addClass("prestation-artisans_macon");
            $('.page-prestations').attr('current', 'artisans_macon');
        }
        if (anm == 'artisans_macon') {
            $(".page-prestations").removeClass("prestation-artisans_macon");
            $(".page-prestations").addClass("prestation-genie_civil");
            $('.page-prestations').attr('current', 'genie_civil');
        }
    });
});