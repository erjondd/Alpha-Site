jQuery(document).ready(function () {
  $("#menu-open-trigger").click(function () {

    var pageColor = $('body').attr('page-color');
    console.log("menu-open black");


    $(".menu-wrapper").addClass("menu-open " + pageColor);
  });

  $(".menu-icon-x").click(function () {
    $(".menu-wrapper").removeClass("menu-open");
  });

  $(".black-homepage-bottom").click(function(){
    $(".menu-wrapper").addClass("menu-open black")
  })

  $(".white-homepage-bottom").click(function(){
    $(".menu-wrapper").addClass("menu-open white")
  })


  $(".menu-icon-x").click(function(){
    $(".menu-wrapper").removeClass("menu-open black white ")
  })



  
  $(".menu-item-has-children > a").click(function (e) {
    $(this).parent().toggleClass("menu-item-has-children-open");
    $(".menu").toggleClass("menu-single-submenu");
  });
});
