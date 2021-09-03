jQuery(document).ready(function () {


    $('.dott').click(function () {
        var dotname = $(this).attr('dotname');
       

        $(".page-lequipe").removeClass("lequipe-alexandre lequipe-hugo lequipe-nadine lequipe-alone");
        $(".page-lequipe").addClass('lequipe-' + dotname);
    });


    // $('.dott2').click(function () {
    //     var anm = $('.page-lequipe').attr('current');

    //     if (anm == 'alexandre') {
    //         $(".page-lequipe").removeClass("lequipe-alexandre");
    //         $(".page-lequipe").addClass("lequipe-hugo");
    //         $('.page-lequipe').attr('current', 'hugo');
    //     }
    // });
    // $('.dott3').click(function () {
    //     var anm = $('.page-lequipe').attr('current');

    //     if (anm == 'hugo') {
    //         $(".page-lequipe").removeClass("lequipe-hugo");
    //         $(".page-lequipe").addClass("lequipe-nadine");
    //         $('.page-lequipe').attr('current', 'nadine');
    //     }
    // });
    // $('.dott4').click(function () {
    //     var anm = $('.page-lequipe').attr('current');

    //     if (anm == 'nadine') {
    //         $(".page-lequipe").removeClass("lequipe-nadine");
    //         $(".page-lequipe").addClass("lequipe-alone");
    //         $('.page-lequipe').attr('current', 'alone');
    //     }
    // });


});