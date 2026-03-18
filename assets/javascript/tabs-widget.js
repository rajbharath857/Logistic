"use strict";
jQuery(window).on("elementor/frontend/init", function() {
    elementorFrontend.hooks.addAction("frontend/element_ready/logico_tabs.default", function(e) {
        let i, t, a = e.find(".logico-video-trigger-button"), n = e.find(".logico-video-container"), r = e.find(".logico-video-wrapper"), o = e.find(".logico-close-popup-layer"), u = jQuery(r).attr("data-src"), d = e.find(".logico-tabs-titles-container"), s = e.find(".logico-tabs-content-container");
        jQuery(d).find(".logico-tab-title-item").first().addClass("active"),
        jQuery(s).find(".logico-tab-content-item").first().addClass("active"),
        e.find(".logico-tab-title-item a").on("click", function() {
            let e = jQuery(this).parent().attr("data-id");
            jQuery(this).parent().is(".active") || (d.find(".active").removeClass("active"),
            s.find(".active").removeClass("active"),
            jQuery(this).parent().addClass("active"),
            s.find("#" + e).addClass("active"))
        }),
        jQuery(a).on("click", function() {
            jQuery(n).addClass("active"),
            setTimeout(function() {
                i = jQuery(r).height(),
                t = i * (16 / 9),
                jQuery(r).width(t),
                jQuery(r).append('<iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="' + u + '?playlist=ZdXao5XqeqM&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;controls=1&amp;showinfo=0&amp;rel=0&amp;loop=0&amp;wmode=transparent"></iframe>')
            }, 100),
            setTimeout(function() {
                jQuery(n).addClass("visible")
            }, 500)
        }),
        jQuery(o).on("click", function() {
            jQuery(n).removeClass("visible"),
            setTimeout(function() {
                jQuery(r).html(""),
                jQuery(n).removeClass("active")
            }, 500)
        }),
        jQuery(window).on("resize", function() {
            i = jQuery(r).height(),
            t = i * (16 / 9),
            jQuery(r).width(t)
        })
    })
})
