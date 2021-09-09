jQuery(document).ready(function () {

  $('.prestations-info').click(function () {
    var _this = $('.prestations-info');
    var video = $('.prestations-video:visible')[0];
    
    if (_this.hasClass('video-is-played')) {
      video.pause();
      _this.removeClass('video-is-played');
      console.log('pause')
    } else {
      video.play();
      _this.addClass('video-is-played');
      console.log('play');
    }
  });



  $('#menu-open-trigger').click(function () {
    var pageColor = $('body').attr('page-color');
    $('.menu-wrapper').addClass('menu-open ' + pageColor);
  });

  $('body').on('click', '.menu-open-black', function () {
    $('.menu').removeClass('menu-single-submenu');
    $('.menu-item-has-children-open').removeClass('menu-item-has-children-open');
    $('.menu-wrapper').removeClass('white menu-ref-open batiment genie-civil artisans-macon').addClass('menu-open black');
  });

  $('body').on('click', '.menu-open-white', function () {
    $('.menu').removeClass('menu-single-submenu');
    $('.menu-item-has-children-open').removeClass('menu-item-has-children-open');
    $('.menu-wrapper').removeClass('black menu-ref-open batiment genie-civil artisans-macon').addClass('menu-open white');
  });

  $('.menu-icon-x').click(function () {
    $('.menu').removeClass('menu-single-submenu');
    $('.menu-item-has-children-open').removeClass('menu-item-has-children-open');
    $('.current-ref-open').removeClass('current-ref-open');
    $('.menu-wrapper').removeClass('menu-open black white menu-ref-open batiment genie-civil artisans-macon')
  })

  $('.menu-item-has-children > a').click(function (e) {
    $(this).parent().toggleClass('menu-item-has-children-open');
    $('.menu').toggleClass('menu-single-submenu');
  });

  
});
