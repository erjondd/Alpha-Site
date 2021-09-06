jQuery(document).ready(function () {

    $('.references-open a').click(function (e) {
        e.preventDefault();
        var _this = $(this);
        var isOpen = _this.parent().hasClass('current-ref-open');
        var title = _this.attr('title');

        if (isOpen == true) {
            _this.parent().removeClass('current-ref-open');
            $('.menu-wrapper').removeClass('menu-ref-open ' + title);
        } else {

            _this.parent().addClass('current-ref-open');
            $('.menu-wrapper').addClass('menu-ref-open ' + title);
        }
    })

});