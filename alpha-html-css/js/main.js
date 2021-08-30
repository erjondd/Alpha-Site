$("#menu-toggle").click(function () {
  $(".menu").toggleClass("menu-open");
});

$(".menu-has-submenu").click(function () {
  $(this).toggleClass("menu-has-submenu-open");
  $(".menu-list").toggleClass("menu-single-submenu")
});


