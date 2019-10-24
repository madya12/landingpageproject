$(document).ready(function () {
    $("#search a.box-title").click(function (e) {
        $("#search .box").toggleClass("active");
    });
    $(".mobile-menu").click(function (e) {
        $("#menu,.mobile-menu").toggleClass("active");
        $("#search, .mobile-search").removeClass("active");
    });
    $(".mobile-search").click(function (e) {
        $("#search,.mobile-search").toggleClass("active");
        $("#menu, .mobile-menu").removeClass("active");
    });
    $(".filter-toggle").click(function (e) {
        $("#filter").toggleClass("active");
        $(".filter-toggle").toggleClass("active");
    });
    $(".bp-btn-light").click(function (e) {
        $(".bp-btn-light, #overlay, #player, #comment-area").toggleClass("active");
    });
    $("#overlay").click(function (e) {
        $(".bp-btn-light, #overlay, #player, #comment-area").removeClass("active");
    });
    $(".bp-btn-auto").click(function (e) {
        $(".bp-btn-auto").toggleClass("active");
    });
    $("#toggle, .cac-close").click(function (e) {
        $("#comment").toggleClass("active");
    });
    $(".jt").cluetip({
        positionBy : 'fixed'
    });
    $('.top-menu> li').bind('mouseover', openSubMenu);
    $('.top-menu> li').bind('mouseout', closeSubMenu);
    function openSubMenu() {
        $(this).find('.sub-container').css('display', 'block');
    };

    function closeSubMenu() {
        $(this).find('.sub-container').css('display', 'none');
    };

    var oldScrollTop = 0;
    $(window).on("scroll", function () {
        if ($(window).scrollTop() < oldScrollTop) {
            if ($("header").css("position") != "fixed") {
                $("header").css({
                    position: "fixed",
                    top: -$("header").outerHeight(),
                    backgroundColor: "#fff",
                });
                $("header").animate({top: "0px"}, 500);
                $("#main").css("padding-top", $("header").outerHeight());
            }
        } else {
            $("header").css({
                position: "relative",
                top: "0px"
            });
            $("#main").css("padding-top", "0px");
        }
        oldScrollTop = $(window).scrollTop();
    });

 


});
 