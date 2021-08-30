jQuery(document).ready(function () {

    
    $('.valuers-arrow-down').click(function() {
        var anm = $('.page-enterprise').attr('current');

        if(anm == 'vision') {
            $('.page-enterprise').removeClass('enterprise-vision')
            $('.page-enterprise').addClass('enterprise-moyens')
            $('.page-enterprise').attr('current', 'moyens');
        }

        if(anm == 'moyens') {
            $('.page-enterprise').removeClass('enterprise-moyens')
            $('.page-enterprise').addClass('enterprise-mission')
            $('.page-enterprise').attr('current', 'mission');
           
        }

        if(anm == 'mission') {
            $('.page-enterprise').removeClass('enterprise-mission')
            $('.page-enterprise').addClass('enterprise-vision')
            $('.page-enterprise').attr('current', 'vision');
            
        }
    });



    $('.valuers-arrow-up').click(function() {
        var anm = $('.page-enterprise').attr('current');

        if(anm == 'vision') {
            $('.page-enterprise').removeClass('enterprise-vision')
            $('.page-enterprise').addClass('enterprise-mission')
            $('.page-enterprise').attr('current', 'mission');
           
        }

        if(anm == 'moyens') {
            $('.page-enterprise').removeClass('enterprise-moyens')
            $('.page-enterprise').addClass('enterprise-vision')
            $('.page-enterprise').attr('current', 'vision');
            
        }

        if(anm == 'mission') {
            $('.page-enterprise').removeClass('enterprise-mission')
            $('.page-enterprise').addClass('enterprise-moyens')
            $('.page-enterprise').attr('current', 'moyens');
            
        }
    });
})


