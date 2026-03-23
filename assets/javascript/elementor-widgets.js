'use strict';
function animate_heading($scope) {
    console.log('LOGICO HEADING ANIMATION V2 - RUNNING');
    if ($scope.data('settings') && $scope.data('settings')._animation && $scope.data('settings')._animation == 'logico_heading_animation') {
        const $title = $scope.find('.logico-title');
        if ($title.hasClass('animated-ready')) return;
        
        $title.addClass('animated-ready');
        
        const text = $title.text().trim();
        if (!text) return;
        
        $title.empty();
        
        let count = 0;
        const words = text.split(/\s+/);
        words.forEach(function(word) {
            const $word = jQuery('<span class="word"></span>');
            for (let i = 0; i < word.length; i++) {
                const $letter = jQuery('<span class="letter"></span>').text(word[i]);
                $letter.css('animation-delay', (count / 50) + 's');
                $word.append($letter);
                count++;
            }
            $title.append($word).append(' ');
        });
        $scope.removeClass('elementor-invisible');
    }
}
function sticky_element_activate(obj) {
    if (obj.hasClass('sticky-container-on')) {
        // Initialize once
        if (!obj.data('sticky-initialized')) {
            const el_offset = obj.offset().top;
            const el_height = Math.round(obj.outerHeight());
            obj.data('initial-offset', el_offset);
            obj.data('initial-height', el_height);
            obj.data('sticky-initialized', true);

            if ((obj.css('position') === 'static' || obj.css('position') === 'relative') && obj.prev('.sticky-container-placeholder').length <= 0) {
                obj.before('<div class="sticky-container-placeholder"></div>');
            }

            jQuery(window).on('scroll.sticky_container', function() {
                const st = Math.round(jQuery(window).scrollTop());
                const current_offset = obj.data('initial-offset');
                const current_height = obj.data('initial-height');
                const el_ready = current_offset + current_height + 200; // Trigger after passing the element
                const el_start = current_offset + current_height + 800; // Trigger after hero

                if (st <= el_ready) {
                    obj.removeClass('sticky-container-ready');
                    obj.prev('.sticky-container-placeholder').removeAttr('style');
                } else {
                    obj.addClass('sticky-container-ready');
                    obj.prev('.sticky-container-placeholder').height(current_height);
                }

                if (st <= el_start) {
                    obj.removeClass('sticky-container-active');
                } else {
                    obj.addClass('sticky-container-active');
                }
            });
        }
    }
}
jQuery(window).on('elementor/frontend/init', function() {
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_blog_listing.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            setTimeout(elements_slider_init, 300);
            setTimeout(fix_responsive_iframe, 600);
            if (jQuery(window.wp.mediaelement).length > 0) {
                jQuery(window.wp.mediaelement.initialize)
            }
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_portfolio_listing.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            setTimeout(elements_slider_init, 500);
            setTimeout(isotope_init, 2500)
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_testimonial_carousel.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            setTimeout(elements_slider_init, 500)
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_awards.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            setTimeout(elements_slider_init, 500)
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_timeline.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            setTimeout(elements_slider_init, 500)
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_steps.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            setTimeout(elements_slider_init, 500)
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_content_slider.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            setTimeout(elements_slider_init, 500)
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_image_carousel.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            setTimeout(elements_slider_init, 500)
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_decorative_block.default', function() {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            decorative_block_animate()
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_wpforms.default', function($scope) {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            wrap_multycolumns_wpform_fields($scope);
            jQuery('.logico-form-field input, .logico-form-field textarea, .logico-form-field select, .woocommerce-input-wrapper .input-text').each(function() {
                check_custom_field(jQuery(this))
            })
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/section', function($scope) {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            background_image_parallax(jQuery('[data-parallax="scroll"]'), 0.7)
        }
        sticky_element_activate($scope);
        jQuery(window).on('resize', function() {
            sticky_element_activate($scope)
        })
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/container', function($scope) {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            background_image_parallax(jQuery('[data-parallax="scroll"]'), 0.7)
        }
        sticky_element_activate($scope);
        jQuery(window).on('resize', function() {
            sticky_element_activate($scope)
        })
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_page_title.default', function($scope) {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            if ($scope.innerWidth() > 1020) {
                jQuery('.page-title-decoration.animation-enable', $scope).addClass('animated')
            }
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_search.default', function($scope) {
        jQuery('.site-search', $scope).detach().prependTo('body');
        if (jQuery('body').hasClass('elementor-editor-active')) {
            search_panel_open();
            overlay_close_all()
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_slide_sidebar.default', function($scope) {
        jQuery('.slide-sidebar-wrapper', $scope).detach().prependTo('body');
        if (jQuery('body').hasClass('elementor-editor-active')) {
            side_panel_open();
            overlay_close_all()
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_tracking.default', function($scope) {
        if (jQuery('body').hasClass('elementor-editor-active')) {
            tracking_popup_open()
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_heading.default', function($scope) {
        animate_heading($scope)
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/logico_navigation_menu.default', function($scope) {
        jQuery('.mobile-header-menu-container', $scope).detach().prependTo('body');
        if (jQuery('body').hasClass('elementor-editor-active')) {
            mobile_menu_open();
            overlay_close_all()
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/image.default', function($scope) {
        if (jQuery(window).width() >= 1021) {
            const $wrapper = $scope;
            const cursor = jQuery('.hovered-text', $scope);
            function showCustomCursor(event) {
                if (jQuery('body').hasClass('rtl')) {
                    cursor.css('left', event.clientX - 20).css('top', event.clientY)
                } else {
                    cursor.css('left', event.clientX + 20).css('top', event.clientY)
                }
            }
            if (cursor.length > 0) {
                $wrapper.mousemove(showCustomCursor);
                $wrapper.mouseleave(function(e) {
                    if (!jQuery('body').hasClass('elementor-editor-active')) {
                        cursor.removeClass('active')
                    }
                });
                $wrapper.mouseenter(function(e) {
                    if (!jQuery('body').hasClass('elementor-editor-active')) {
                        cursor.addClass('active')
                    }
                })
            }
        }
    })
})
