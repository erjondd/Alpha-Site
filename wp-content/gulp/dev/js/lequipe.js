jQuery(document).ready(function () {


    $('.dott').click(function () {
        var dotname = $(this).attr('dotname');

        $(".page-lequipe").removeClass("lequipe-alexandre lequipe-hugo lequipe-nadine lequipe-alone");
        $(".page-lequipe").addClass('lequipe-' + dotname);
    });

   
        $(".dott").click(function () {
            $(".dott").removeClass("active");
            $(this).addClass("active");   
           
        });
     

});