$(document).ready(function () {
    $("#slider").css({
        height: $(window).height()
    });

    $(window).resize(function () {
        $("#slider").css({
            height: $(window).height()
        });
    })
});

! function(e) {
    e(document).ready(function() {
        e("select").chosen({
            width: "",
            disable_search_threshold: 100,
            inherit_select_classes: !0
        }), e(".form-datepicker").datepicker({
            autoclose: !0,
            startDate: new Date
        });
        var o = e(".site-header-nav"),
            n = e(".site-header-nav-toggle");
        n.on("click", function() {
            e(this).toggleClass("open"), o.toggleClass("open")
        });
        var a = e(".room");
        e('[data-toggle="room"]').on("click", function() {
            a.removeClass("open"), e(this).parent().addClass("open")
        }), e(".site-header-nav li.dropdown").on("mouseover", function() {
            e(".site-header-nav li.dropdown.open").removeClass("open"), e(this).addClass("open")
        });
        var t = !1;
        e(".site-header-navbar").on("mouseover", function() {
            t = !0
        }).on("mouseout", function() {}), e(".page-content").on("mouseover", function() {
            t && e(".site-header-nav li.dropdown.open").removeClass("open")
        }), e(".fancybox").fancybox()
    })
}(jQuery);