$(document).ready(function () {
    "use strict";
    var e, a, o = !0,
        i = !1,
        s = $("body");
    $(".page-header"), $(".page-sidebar"), $(".page-content");
    ! function () {
        var e = admin_url + a_mod,
            a = (admin_url, a_mod, a_act, window.location.href);
        $("ul#main-menu > li a").not("ul li ul a").each(function () {
            var a = $(this).attr("href");
            e === a && ($(this).parent().addClass("active open"), $(".li-" + a_mod).css("display", "block"))
        }), $("ul#main-menu li a").each(function () {
            var e = $(this).attr("href");
            if ("" == o || null == o || null == o) a == e && ($(this).parent().addClass("active open"), $(".li-" + a_mod).css("display", "block"));
            else {
                var o = window.location.href;
                o == e && ($(this).parent().addClass("nav-item-open"), $(".li-" + a_mod).css("display", "block"))
            }
        }), $(".page-sidebar-inner").slimScroll({
            height: "100%"
        }).mouseover();
        s.hasClass("page-sidebar-fixed") && !1 === o && (o = !0), !0 === o && (s.addClass("page-sidebar-fixed"), $("#fixed-sidebar-toggle-button").removeClass("icon-radio_button_unchecked"), $("#fixed-sidebar-toggle-button").addClass("icon-radio_button_checked")), $("#fixed-sidebar-toggle-button").on("click", function () {
            return s.toggleClass("page-sidebar-fixed"), o = !!s.hasClass("page-sidebar-fixed"), $(this).toggleClass("icon-radio_button_unchecked"), $(this).toggleClass("icon-radio_button_checked"), !1
        }), !0 === i && s.addClass("page-sidebar-collapsed"), $(".page-sidebar-collapsed .page-sidebar .accordion-menu").on({
            mouseenter: function () {
                $(".page-sidebar").addClass("fixed-sidebar-scroll")
            },
            mouseleave: function () {
                $(".page-sidebar").removeClass("fixed-sidebar-scroll")
            }
        }, "li"), $("#collapsed-sidebar-toggle-button").on("click", function () {
            return s.toggleClass("page-sidebar-collapsed"), i = !!s.hasClass("page-sidebar-collapsed"), $(".page-sidebar-collapsed .page-sidebar .accordion-menu").on({
                mouseenter: function () {
                    $(".page-sidebar").addClass("fixed-sidebar-scroll")
                },
                mouseleave: function () {
                    $(".page-sidebar").removeClass("fixed-sidebar-scroll")
                }
            }, "li"), !1
        }), $("#sidebar-toggle-button").on("click", function () {
            return s.toggleClass("page-sidebar-visible"), !0
        }), $("#sidebar-toggle-button-close").on("click", function () {
            return s.toggleClass("page-sidebar-visible"), !0
        })
    }(), e = $(".page-sidebar li:not(.open) .sub-menu"), a = $(".page-sidebar li.active-page > a"), e.hide(), $(".accordion-menu").on("click", "a", function () {
        var e = $(this).next(".sub-menu"),
            a = $(this).parent("li"),
            o = $(".accordion-menu > li.open");
        return e.length && !s.hasClass("page-sidebar-collapsed") ? (a.hasClass("open") ? ($(".open .sub-menu li").each(function (e) {
            var a = $(this);
            setTimeout(function () {
                a.removeClass("animation")
            }, 5 * (e + 1))
        }), e.slideUp(100), a.removeClass("open")) : (o.length && ($(".accordion-menu > li.open > .sub-menu").slideUp(100), o.removeClass("open")), e.slideDown(100), a.addClass("open"), $(".open .sub-menu li").each(function (e) {
            var a = $(this);
            setTimeout(function () {
                a.addClass("animation")
            }, 15 * (e + 1))
        })), !1) : (!e.length || !s.hasClass("page-sidebar-collapsed")) && void 0
    }), $(".active-page > .sub-menu").length && a.click()
}), $(document).ready(function () {
    "use strict";
    $(function () {
        feather.replace()
    });
    var e = function (e) {
            if (!$(e).attr("data-init")) {
                var a = $(e).attr("data-height"),
                    o = {
                        height: a = a || $(e).height(),
                        alwaysVisible: !1
                    };
                /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? ($(e).css("height", a), $(e).css("overflow-x", "scroll")) : ($(e).slimScroll(o), $(e).closest(".slimScrollDiv").find(".slimScrollBar").hide()), $(e).attr("data-init", !0)
            }
        },
        a = {
            init: function () {
                this.initComponent()
            },
            initComponent: function () {
                $("#search-button").on("click", function () {
                    $("body").addClass("search-open")
                }), $("#close-search").on("click", function () {
                    $("body").removeClass("search-open")
                }), $("[data-scrollbar=true]").each(function () {
                    e($(this))
                }), 0 !== $('[data-toggle="tooltip"]').length && $("[data-toggle=tooltip]").tooltip(), 0 !== $('[data-toggle="popover"]').length && $("[data-toggle=popover]").popover(), $(document).scroll(function () {
                    $(document).scrollTop() >= 200 ? $("[data-click=scroll-top]").addClass("show") : $("[data-click=scroll-top]").removeClass("show")
                }), $(".content").scroll(function () {
                    $(".content").scrollTop() >= 200 ? $("[data-click=scroll-top]").addClass("show") : $("[data-click=scroll-top]").removeClass("show")
                }), $("[data-click=scroll-top]").on("click", function (e) {
                    e.preventDefault(), $("html, body, .content").animate({
                        scrollTop: $("body").offset().top
                    }, 500)
                })
            },
            scrollTop: function () {
                $("html, body, .content").animate({
                    scrollTop: $("body").offset().top
                }, 0)
            }
        };
    $(document).ready(function () {
        a.init()
    })
}), $(document).ready(function () {
    "use strict";
    var e = window.matchMedia("(min-width:992px) and (max-width: 1199px)");

    function a(e) {
        e.matches ? $("body").addClass("page-sidebar-collapsed") : $("body").removeClass("page-sidebar-collapsed")
    }
    e.addListener(a), a(e)
});