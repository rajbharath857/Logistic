"use strict";

function set_device_mode() {
    let attr = jQuery('body').attr('data-elementor-device-mode'),
        mode = 'mobile';
    if (typeof attr === 'undefined' && attr === !1) {
        if (jQuery(window).width() > 480) {
            mode = 'mobile_extra'
        }
        if (jQuery(window).width() > 660) {
            mode = 'tablet'
        }
        if (jQuery(window).width() > 840) {
            mode = 'tablet_extra'
        }
        if (jQuery(window).width() > 1020) {
            mode = 'laptop'
        }
        if (jQuery(window).width() > 1200) {
            mode = 'desktop'
        }
        if (jQuery(window).width() >= 2400) {
            mode = 'widescreen'
        }
    } else {
        mode = attr
    }
    jQuery('body').attr('data-mode', mode)
}

function side_panel_open() {
    jQuery('.dropdown-trigger').on('click', function() {
        let elemID = '#side-panel-' + jQuery(this).attr('data-id');
        jQuery(elemID + ', .body-overlay').addClass('active')
    });
    jQuery('.slide-sidebar-close').on('click', function() {
        jQuery(this).parents('.slide-sidebar-wrapper').removeClass('active');
        jQuery('.body-overlay').removeClass('active')
    })
}

function search_panel_open() {
    jQuery('.search-trigger').on('click', function() {
        let elemID = '#site-search-' + jQuery(this).attr('data-id');
        jQuery(elemID + ', .body-overlay').addClass('active');
        jQuery(elemID + ' .search-form .search-form-field').focus()
    });
    jQuery('.site-search-close').on('click', function() {
        jQuery(this).parents('.site-search').removeClass('active');
        jQuery('.body-overlay').removeClass('active')
    })
}

function overlay_close_all() {
    jQuery('.body-overlay').on('click', function() {
        jQuery(this).removeClass('active');
        jQuery('.site-search, .mobile-header-menu-container, .simple-sidebar, .slide-sidebar-wrapper, .shop-hidden-sidebar').removeClass('active')
    })
}

function switch_form_columns() {
    jQuery('.tab-columns-switcher').on('click', function() {
        jQuery('.tab-column', jQuery(this).parents('.tab-columns')).toggleClass('hidden')
    })
}

function sticky_menu_active() {
    if (jQuery('.sticky-header-on').length) {
        jQuery('.sticky-header-on').each(function() {
            let obj = jQuery(this),
                el_offset = obj.offset().top,
                el_height = Math.round(jQuery('.sticky-wrapper', obj).outerHeight()),
                el_ready = Math.round(el_offset + el_height + 200),
                el_start = Math.round(el_offset + el_height + 400);
            obj.height(el_height);
            jQuery(window).on('scroll', function() {
                let st = jQuery(window).scrollTop();
                if (st <= el_ready) {
                    obj.removeClass('sticky-ready')
                } else {
                    obj.addClass('sticky-ready')
                }
                if (st <= el_start) {
                    obj.removeClass('sticky-active')
                } else {
                    obj.addClass('sticky-active')
                }
            })
        })
    }
}

function mobile_menu_open() {
    jQuery('.menu-trigger').on('click', function() {
        let elemID = '#mobile-header-' + jQuery(this).attr('data-id');
        jQuery(elemID + ', .body-overlay').addClass('active')
    });
    jQuery('.menu-close').on('click', function() {
        jQuery(this).parents('.mobile-header-menu-container').removeClass('active');
        jQuery('.body-overlay').removeClass('active')
    })
}

function simple_sidebar_open() {
    jQuery('.simple-sidebar-trigger').on('click', function() {
        let elemID = '#simple-sidebar-' + jQuery(this).attr('data-id');
        if (jQuery(window).width() < 1021) {
            jQuery(elemID + ', .body-overlay').addClass('active')
        }
    });
    jQuery('.shop-hidden-sidebar-close').on('click', function() {
        jQuery(this).parents('.simple-sidebar').removeClass('active');
        jQuery('.body-overlay').removeClass('active')
    })
}

function tracking_popup_open() {
    jQuery('.tracking-trigger').on('click', function() {
        let elemID = '#tracking-popup-' + jQuery(this).attr('data-id');
        jQuery(elemID).fadeIn(300)
    });
    jQuery('.tracking-form-close').on('click', function() {
        jQuery(this).parents('.tracking-form-wrapper').fadeOut(300)
    })
}

function page_title_animate() {
    if (jQuery('.page-loader-container').length) {
        jQuery('body').on('pageloader_start_hidden', function() {
            if (jQuery(window).innerWidth() > 1020) {
                jQuery('.page-title-decoration.animation-enable').addClass('animated')
            }
        })
    } else {
        jQuery(window).on('load', function() {
            if (jQuery(window).innerWidth() > 1020) {
                jQuery('.page-title-decoration.animation-enable').addClass('animated')
            }
        })
    }
}

function decorative_block_animate() {
    jQuery('.block-decoration').each(function() {
        let element = jQuery(this);
        let observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    setTimeout(function() {
                        element.addClass('animated')
                    }, 300);
                    observer.unobserve(element[0])
                }
            })
        });
        observer.observe(element[0])
    })
}

function widget_list_hierarchy_init() {
    widget_archives_hierarchy_controller('.widget ul li', 'ul.children', 'parent-archive', 'widget-archive-trigger');
    widget_archives_hierarchy_controller('.widget_nav_menu .menu li', 'ul.sub-menu', 'parent-archive', 'widget-menu-trigger')
}

function widget_archives_hierarchy_controller(list_item_selector, sublist_item_selector, parent_class, trigger_class) {
    jQuery(list_item_selector).has(sublist_item_selector).each(function() {
        jQuery(this).addClass(parent_class);
        jQuery(this).append("<span class='" + trigger_class + "'></span>")
    });
    jQuery(list_item_selector + ">" + sublist_item_selector).css("display", "none");
    jQuery(list_item_selector + ">.item-wrapper>" + sublist_item_selector).css("display", "none");
    jQuery(document).on("click", "." + trigger_class, function() {
        var el = jQuery(this);
        var sublist = el.siblings(sublist_item_selector);
        var sublist_alt = el.siblings('.item-wrapper').children(sublist_item_selector);
        if (!sublist.length && !sublist_alt.length) return;
        sublist = sublist.first();
        sublist_alt = sublist_alt.first();
        el.toggleClass('active').parents('li').toggleClass('active');
        sublist.slideToggle(300);
        sublist_alt.slideToggle(300)
    })
}

function fix_responsive_iframe() {
    jQuery('.video-embed > div').each(function() {
        jQuery(this).unwrap('.video-embed')
    })
}

function elements_slider_init() {
    jQuery('.elementor-element .owl-carousel, .content-inner > .archive-listing .owl-carousel, .single-post .owl-carousel').each(function() {
        let slider = jQuery(this),
            slider_options = slider.data('slider-options'),
            itemsMobile = slider_options.itemsMobile,
            itemsMobileExtra = slider_options.itemsMobileExtra,
            itemsTablet = slider_options.itemsTablet,
            itemsTabletExtra = slider_options.itemsTabletExtra,
            itemsLaptop = slider_options.itemsLaptop,
            itemsDesktop = slider_options.items,
            itemsWidescreen = slider_options.itemsWidescreen,
            slideCount = jQuery('.slider-item', slider).length,
            progress = slider_options.progress ? slider_options.progress : !1;
        slider_options.responsive = {
            0: {
                items: itemsMobile
            },
            480: {
                items: itemsMobileExtra
            },
            660: {
                items: itemsTablet
            },
            840: {
                items: itemsTabletExtra
            },
            1020: {
                items: itemsLaptop
            },
            1200: {
                items: itemsDesktop
            },
            2400: {
                items: itemsWidescreen
            }
        };
        slider_options.onInitialized = function(event) {
            if (progress) {
                let progress_wrapper = slider.parents('.elementor-widget-container'),
                    progress_current = jQuery('.slider-progress-current', progress_wrapper),
                    progress_all = jQuery('.slider-progress-all', progress_wrapper),
                    items_count = jQuery('.owl-item:not(.cloned)').length,
                    items_visible = jQuery('.owl-item.active').length,
                    pages = 0;
                pages = Math.ceil(items_count / items_visible);
                pages = pages < 10 ? '0' + pages : pages;
                progress_all.text(pages);
                progress_current.text('01')
            }
        };
        slider.owlCarousel(slider_options).on('changed.owl.carousel', function(e) {
            if (slider_options.autoplay) {
                slider.trigger('stop.owl.autoplay');
                slider.trigger('play.owl.autoplay')
            }
        });
        if (progress) {
            slider.on('changed.owl.carousel', function(event) {
                let progress_wrapper = slider.parents('.elementor-widget-container'),
                    progress_current = jQuery('.slider-progress-current', progress_wrapper),
                    progress_all = jQuery('.slider-progress-all', progress_wrapper);
                progress_all.text(event.page.count < 10 ? '0' + event.page.count : event.page.count);
                progress_current.text((event.page.index + 1) < 10 ? '0' + (event.page.index + 1) : (event.page.index + 1))
            })
        }
    })
}

function single_portfolio_slider_init() {
    jQuery('.portfolio-post-gallery.owl-carousel').each(function() {
        jQuery(this).owlCarousel({
            items: 1,
            nav: !1,
            dots: !1,
            autoplay: !1,
            autoplayHoverPause: !1,
            loop: !0,
            rewind: !1,
            dotsContainer: !1,
            autoHeight: !1,
            center: !0,
            margin: 10,
            rtl: (!!jQuery('body').hasClass('rtl'))
        })
    })
}

function isotope_init() {
    if (jQuery('.isotope').length > 0) {
        jQuery('.isotope-trigger').isotope({
            itemSelector: '.isotope-item',
            gutter: 0
        })
    }
}

function help_item_acardeon() {
    jQuery('.help-item').each(function() {
        jQuery('.help-item-title', this).on('click', function() {
            jQuery(this).siblings('.help-item-content').slideToggle(300).parents('.help-item').toggleClass('active')
        })
    })
}

function background_image_parallax(object, multiplier) {
    if (object.length > 0) {
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var doc = jQuery(document);
        object.css({
            'background-attatchment': 'fixed'
        });
        jQuery(window).scroll(function() {
            if (jQuery(window).width() >= 1021) {
                var from_top = doc.scrollTop() - object.offset().top,
                    bg_css = 'center ' + (multiplier * from_top) + 'px';
                object.css({
                    'background-position': bg_css
                })
            } else {
                object.css({
                    'background-position': ''
                })
            }
        })
    }
}

function scroll_to_top_init() {
    let scrollTop = jQuery(window).scrollTop();
    if (scrollTop > 600) {
        jQuery('.footer-scroll-top').addClass('active')
    } else {
        jQuery('.footer-scroll-top').removeClass('active')
    }
}

function check_custom_field(element) {
    if (element.val() || jQuery('option.placeholder', element).is(':selected')) {
        element.parents('.logico-form-field, .woocommerce-input-wrapper, .wp-block-search__inside-wrapper').addClass('not-empty')
    } else {
        element.parents('.logico-form-field, .woocommerce-input-wrapper, .wp-block-search__inside-wrapper').removeClass('not-empty')
    }
}

function wrap_multycolumns_wpform_fields(wrapper) {
    jQuery('.wpforms-field .wpforms-field-row .wpforms-field-row-block input', wrapper).each(function() {
        jQuery(this).wrap('<div class="logico-form-field"></div>')
    })
}

function logico_custom_cursor() {
    if (jQuery(window).width() > 1020) {
        jQuery('.custom-cursor-drag').each(function() {
            const cursor = jQuery(this);
            const wrapper = cursor.siblings('.owl-carousel');

            function showViewCursor(event) {
                cursor.css('left', event.clientX - 32).css('top', event.clientY - 32)
            }
            wrapper.mousemove(showViewCursor);
            wrapper.mouseleave(function(e) {
                if (!jQuery('body').hasClass('elementor-editor-preview')) {
                    wrapper.css({
                        cursor: 'auto'
                    });
                    cursor.removeClass('active');
                    setTimeout(function() {
                        if (!cursor.hasClass('active')) {
                            cursor.hide()
                        }
                    }, 300)
                }
            });
            wrapper.mouseenter(function(e) {
                if (!jQuery('body').hasClass('elementor-editor-preview')) {
                    wrapper.css({
                        cursor: 'none'
                    });
                    cursor.show();
                    setTimeout(function() {
                        cursor.addClass('active')
                    }, 10)
                }
            })
        })
    }
}

function logico_ticker() {
    jQuery('.ticker').marquee('destroy').marquee({
        allowCss3Support: !0,
        css3easing: 'linear',
        easing: 'linear',
        delayBeforeStart: 0,
        direction: jQuery('.ticker').parents('.logico-ticker-wrapper').data('direction'),
        duplicated: !0,
        duration: jQuery('.ticker').parents('.logico-ticker-wrapper').data('speed') * 1000,
        gap: 0,
        pauseOnCycle: !1,
        pauseOnHover: !1,
        startVisible: !0
    })
}

function mobile_menu() {
    jQuery('.mobile-header-menu-container .main-menu').find('.menu-item').each(function(i, el) {
        if (jQuery(el).find('.sub-menu').length != 0 && jQuery(el).find('.sub-menu-trigger').length == 0) {
            jQuery(el).append('<span class="sub-menu-trigger"></span>')
        }
    });
    jQuery('.sub-menu-trigger').off();
    jQuery('.sub-menu-trigger').on('click', function() {
        if (jQuery(this).parent().hasClass('active')) {
            jQuery(this).prev().slideUp();
            jQuery(this).parent().removeClass('active')
        } else {
            var currentParents = jQuery(this).parents('.menu-item');
            jQuery('.sub-menu-trigger').parent().not(currentParents).removeClass('active');
            jQuery('.sub-menu-trigger').parent().not(currentParents).find('.sub-menu').slideUp(300);
            jQuery(this).prev().slideDown();
            jQuery(this).parent().addClass('active')
        }
    });
    jQuery('.mobile-header-menu-container .main-menu a').on('click', function() {
        jQuery('.site-search, .body-overlay, .mobile-header-menu-container').removeClass('active')
    })
}

function scroll_to_anchor() {
    jQuery('.scroll-to-anchor a[href*="#"]').on('click', function(e) {
        e.preventDefault();
        jQuery('body, html').animate({
            scrollTop: jQuery(this.hash).offset().top - 150 + 'px'
        }, 600);
        window.location.href = jQuery(this).attr('href');
        return !1
    })
}

function page_loader_controller() {
    var page_loader, interval, timeLaps;
    page_loader = jQuery('.page-loader');
    timeLaps = 0;
    interval = setInterval(function() {
        var page_loaded = check_if_page_loaded();
        timeLaps++;
        if (page_loaded || timeLaps === 12) {
            clearInterval(interval);
            page_loader.stop_loader()
        }
    }, 10)
}

function check_if_page_loaded() {
    var keys, key, i, r;
    if (window.modules_state === undefined) return !1;
    r = !0;
    keys = Object.keys(window.modules_state);
    for (i = 0; i < keys.length; i++) {
        key = keys[i];
        if (!window.modules_state[key]) {
            r = !1;
            break
        }
    }
    return r
}

function start_loader() {
    let loader = jQuery(this);
    if (!loader.length) return;
    let loader_container = loader[0].parentNode;
    if (loader_container != null) {
        loader_container.style.opacity = 1;
        setTimeout(function() {
            loader_container.style.display = "block"
        }, 10)
    }
}

function stop_loader() {
    let loader = jQuery(this);
    if (!loader.length) return;
    let loader_container = loader[0].parentNode;
    jQuery('body').trigger('pageloader_start_hidden');
    if (loader_container != null) {
        setTimeout(function() {
            loader_container.style.opacity = 0;
            setTimeout(function() {
                loader_container.style.display = "none"
            }, 300)
        }, 500)
    }
}

function genre_get_posts(paged = 1, id = null, filter_term = null, filter_taxonomy = null) {
    var ajax_url = ajax_params.ajax_url;
    var args = jQuery('.archive-listing', '.elementor-element-' + id).attr('data-ajax');
    var widget = jQuery('.archive-listing', '.elementor-element-' + id).attr('data-widget');
    var classes = jQuery('.archive-listing-wrapper', '.elementor-element-' + id).attr('class');
    jQuery.ajax({
        type: 'POST',
        url: ajax_url,
        data: {
            action: 'pagination',
            args: args,
            widget: widget,
            paged: paged,
            classes: classes,
            id: id,
            filter_term: filter_term,
            filter_taxonomy: filter_taxonomy,
            security: ajax_params.ajax_nonce
        },
        beforeSend: function() {
            var height = jQuery('.archive-listing', '.elementor-element-' + id).outerHeight();
            jQuery('.archive-listing', '.elementor-element-' + id).height(height).addClass('loading')
        },
        success: function(data) {
            jQuery('.archive-listing', '.elementor-element-' + id).html(data);
            if (jQuery(window.wp.mediaelement).length > 0) {
                jQuery(window.wp.mediaelement.initialize)
            }
            setTimeout(function() {
                jQuery('.archive-listing', '.elementor-element-' + id).removeAttr('style').removeClass('loading')
            }, 500);
            setTimeout(elements_slider_init, 300);
            setTimeout(fix_responsive_iframe, 600);
            setTimeout(isotope_init, 500)
        },
        error: function() {
            jQuery('.archive-listing', '.elementor-element-' + id).html('<p class="error">AJAX ERROR</p>')
        }
    })
}
jQuery(document).ready(function() {
    setTimeout(sticky_menu_active, 300);
    jQuery('.footer-scroll-top').on('click', function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 500)
    });
    side_panel_open();
    search_panel_open();
    overlay_close_all();
    setTimeout(set_device_mode, 300);
    switch_form_columns();
    background_image_parallax(jQuery('[data-parallax="scroll"]'), 0.7);
    mobile_menu_open();
    tracking_popup_open();
    simple_sidebar_open();
    page_title_animate();
    decorative_block_animate();
    help_item_acardeon();
    mobile_menu();
    widget_list_hierarchy_init();
    setTimeout(fix_responsive_iframe, 800);
    setTimeout(isotope_init, 500);
    wrap_multycolumns_wpform_fields(document);
    jQuery('.logico-form-field input, .logico-form-field textarea, .logico-form-field select, .woocommerce-input-wrapper .input-text').not(':hidden').each(function() {
        check_custom_field(jQuery(this))
    });
    logico_custom_cursor();
    logico_ticker();
    scroll_to_anchor();
    scroll_to_top_init();
    jQuery('.elementor-widget').on('click', '.content-pagination a', function(e) {
        e.preventDefault();
        var paged = null;
        var id = jQuery(this).parents('.elementor-widget').attr('data-id');
        if (jQuery(this).hasClass('prev')) {
            paged = parseInt(jQuery(this).siblings('.current').text()) - 1
        } else if (jQuery(this).hasClass('next')) {
            paged = parseInt(jQuery(this).siblings('.current').text()) + 1
        } else {
            paged = parseInt(jQuery(this).text())
        }
        var filter_term = jQuery('.filter-control-list .dot.active', jQuery(this).parents('.archive-listing').siblings('.filter-control-wrapper')).attr('data-value');
        var filter_taxonomy = jQuery('.filter-control-list', jQuery(this).parents('.archive-listing').siblings('.filter-control-wrapper')).attr('data-taxonomy');
        genre_get_posts(paged, id, filter_term, filter_taxonomy)
    });
    jQuery('.elementor-widget').on('click', '.filter-control-list .filter-control-item', function(e) {
        e.preventDefault();
        var paged = 1;
        var id = jQuery(this).parents('.elementor-widget').attr('data-id');
        var filter_term = jQuery(this).attr('data-value');
        var filter_taxonomy = jQuery(this).parents('.filter-control-list').attr('data-taxonomy');
        if (filter_term === 'all') {
            filter_term = null
        }
        jQuery(this).addClass('active').siblings('.filter-control-item').removeClass('active');
        genre_get_posts(paged, id, filter_term, filter_taxonomy)
    })
});
jQuery(window).on('load', function() {
    jQuery.fn.start_loader = start_loader;
    jQuery.fn.stop_loader = stop_loader;
    page_loader_controller();
    elements_slider_init();
    single_portfolio_slider_init()
});
jQuery(window).on('resize', function() {
    setTimeout(set_device_mode, 300);
    setTimeout(sticky_menu_active, 300);
    mobile_menu_open();
    background_image_parallax(jQuery('[data-parallax="scroll"]'), 0.7);
    logico_custom_cursor();
    logico_ticker()
});
jQuery(window).on('scroll', function() {
    scroll_to_top_init()
});
jQuery(document).on('elementor/popup/show', function(event, popupId, popupDocument) {
    wrap_multycolumns_wpform_fields(popupDocument);
    jQuery('.logico-form-field input, .logico-form-field textarea, .logico-form-field select, .woocommerce-input-wrapper .input-text').each(function() {
        check_custom_field(jQuery(this))
    })
});
jQuery(document).on('change', '.logico-form-field input, .logico-form-field textarea, .logico-form-field select, .woocommerce-input-wrapper .input-text', function() {
    check_custom_field(jQuery(this))
})
