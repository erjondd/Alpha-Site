jQuery(document).ready(function () {
  $('#menu-open-trigger').click(function () {
    var pageColor = $('body').attr('page-color');
    $('.menu-wrapper').addClass('menu-open ' + pageColor);
  });

  $('body').on('click', '.menu-open-black', function(){
    $('.menu').removeClass('menu-single-submenu');
    $('.menu-item-has-children-open').removeClass('menu-item-has-children-open');
    $('.menu-wrapper').removeClass('white').addClass('menu-open black');
  });

  $('body').on('click', '.menu-open-white', function(){
    $('.menu').removeClass('menu-single-submenu');
    $('.menu-item-has-children-open').removeClass('menu-item-has-children-open');
    $('.menu-wrapper').removeClass('black').addClass('menu-open white');
  });

  $('.menu-icon-x').click(function(){
    $('.menu').removeClass('menu-single-submenu');
    $('.menu-item-has-children-open').removeClass('menu-item-has-children-open');
    $('.menu-wrapper').removeClass('menu-open black white')
  })
  
  $('.menu-item-has-children > a').click(function (e) {
    $(this).parent().toggleClass('menu-item-has-children-open');
    $('.menu').toggleClass('menu-single-submenu');
  });
});
