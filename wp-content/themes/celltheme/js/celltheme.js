$(document).ready(function () {
    $(".welcome").css('opacity', '1');
    $(".welcome").css('padding-top', '0');

    var scroll_start = 0;
    var startchange = $('#change-navbar');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $("header").css('background-color', 'white');
                $("header").css('box-shadow', 'rgba(0,0,0,0.1) 0px 0px 15px 0px');
                $("img:first").attr('src', './img/logo.png')
                $("#main-menu").css('color', '#0A3C6D');

                $("#main-menu li").hover(function () {
                    $(this).css('background-color', '#0A3C6D');
                    $(this).css('color', 'gold');
                }, function () {
                    $(this).css("background-color", "inherit");
                    $(this).css('color', 'inherit');
                });

            } else {
                $('header').css('background-color', '#0A3C6D');
                $("header").css('border-bottom', 'none');
                $("header").css('box-shadow', 'none');
                $("img:first").attr('src', './img/logo_white.png')
                $("#main-menu").css('color', '#fff');

                $("#main-menu li").hover(function () {
                    $(this).css('background-color', '#fff');
                    $(this).css('color', '#0A3C6D');
                }, function () {
                    $(this).css("background-color", "inherit");
                    $(this).css('color', 'inherit');
                });
            }
        });
    }
});

