/**
 *
 * ---------------------------------------------------------------------------
 *
 * Template Name: Bold - one page creative HTML5 responsive business template
 * Template URL:  http://lovesome.biz/bold
 * Author : urosd
 * Version : 1.0
 *
 * --------------------------------------------------------------------------- 
 *
 */


(function ($) {
    'use strict';
    /*  =========================
            Scroll Menu
        =========================*/
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 50) {
            $('.header-menu').addClass('fixed-menu');
        } else {
            $('.header-menu').removeClass('fixed-menu');
        }
    });

    /*  =========================
            Smooth scroll
        ========================= */
    $('a.nav-link').on('click', function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        e.preventDefault();
    });

    /*  =========================
            Owl Carousel
        ========================= */
    /*---- main slider ----*/
    var slider_pulse = $('.slider-wraper, .testmonial-content');
    slider_pulse.owlCarousel({
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 7000,
        mouseDrag: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    // Owl Carousel Animation
    slider_pulse.on('translate.owl.carousel', function () {
        $('.slider-info h2').removeClass('animated fadeInDown').css('opacity', '0');
        $(".slider-info h3").removeClass("animated slideInRight").css("opacity", "0");
        $('.slider-info p').removeClass('animated fadeInUp').css('opacity', '0');
        $('.slider-info .bold-btn').removeClass('animated fadeIn').css('opacity', '0');
    });
    slider_pulse.on('translated.owl.carousel', function () {
        $('.slider-info h2').addClass('animated fadeInDown').css('opacity', '1');
        $(".slider-info h3").addClass("animated slideInRight").css("opacity", "1");
        $('.slider-info p').addClass('animated fadeInUp').css('opacity', '1');
        $('.slider-info .bold-btn').addClass('animated fadeIn').css('opacity', '1');
    });
    /*---- brand slider ----*/
    var slider_brand = $(".partners-brand");
    slider_brand.owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        mouseDrag: true,
        margin: 10,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });

    /*  =========================
            Parallax 
        ========================= */
    var parallax_effect = $('.parallax');
    parallax_effect.jarallax({
        speed: 0.5
    });

    /*  =============================
		    wmBox for popup video
		============================= */
    $.wmBox();

    /*  =========================
            project progress
        ========================= */
    var $progress = $('.counter');
    $progress.waypoint(function () {
        //counterUp            
        var CounterUp = $('.counter');
        CounterUp.each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
            }, {
                duration: 2500,
                easing: 'linear',
                step: function () {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                    $this.text(this.countNum);
                    //alert('finished');
                }
            });
        });
    }, {
        offset: '100%'
    });

    /*  ======================================
             Skill Progress
        ====================================== */
    var $skill_progress = $('.circle');
    $skill_progress.waypoint(function () {
        /*** Circle Progress ***/
        // First circle Progress
        var Counter1st = $('.first.circle');
        Counter1st.circleProgress({
            value: 0.75,
            size: 150,
            startAngle: 4.5,
            thickness: 10,
            emptyFill: "transparent",
            animation: {
                duration: 2200
            },
            fill: {
                color: "#038E94"
            }
        }).on('circle-animation-progress', function (event, progress) {
            $(this).find('strong').html(Math.round(75 * progress) + '%');
        });
        // Second circle Progress
        var Counter2nd = $('.second.circle');
        Counter2nd.circleProgress({
            value: 0.80,
            size: 150,
            startAngle: 4.5,
            thickness: 10,
            emptyFill: "transparent",
            animation: {
                duration: 2200
            },
            fill: {
                color: "#038E94"
            }
        }).on('circle-animation-progress', function (event, progress) {
            $(this).find('strong').html(Math.round(80 * progress) + '%');
        });
        // Third circle Progress
        var Counter3rd = $('.third.circle');
        Counter3rd.circleProgress({
            value: 1,
            size: 150,
            startAngle: 4.5,
            thickness: 10,
            emptyFill: "transparent",
            animation: {
                duration: 2200
            },
            fill: {
                color: "#038E94"
            }
        }).on('circle-animation-progress', function (event, progress) {
            $(this).find('strong').html(Math.round(100 * progress) + '%');
        });
        /*** Progress Bar ***/
        var ProgressBarOne = $('#bar1');
        var ProgressBarTwo = $('#bar2');
        var ProgressBarThree = $('#bar3');
        var ProgressBarFour = $('#bar4');

        ProgressBarOne.barfiller();
        ProgressBarTwo.barfiller();
        ProgressBarThree.barfiller();
        ProgressBarFour.barfiller();

        this.destroy();
    }, {
        offset: '100%'
    });

    /*  ======================================
             Skill Progress
        ====================================== */
    var $skill_progress2 = $('.barfiller');
    $skill_progress2.waypoint(function () {
        /*** Progress Bar ***/
        var ProgressBarOne = $('#bar1');
        var ProgressBarTwo = $('#bar2');
        var ProgressBarThree = $('#bar3');
        var ProgressBarFour = $('#bar4');

        ProgressBarOne.barfiller();
        ProgressBarTwo.barfiller();
        ProgressBarThree.barfiller();
        ProgressBarFour.barfiller();

        this.destroy();
    }, {
        offset: '100%'
    });

    /*  =========================
		    Accordion
		========================= */
    $(function () {
        $("#accordion")
            .accordion({
                header: "> div > h3"
            })
            .sortable({
                axis: "y",
                handle: "h3",
                stop: function (event, ui) {
                    // IE doesn't register the blur when sorting
                    // so trigger focusout handlers to remove .ui-state-focus
                    ui.item.children("h3").triggerHandler("focusout");

                    // Refresh accordion to handle new order
                    $(this).accordion("refresh");
                }
            });
    });

    /*  =========================
		    google map
		========================= */
    $(function () {
        var fenway = [-33.7719703, 150.9113093];
        $('#map').gmap3({
            center: fenway,
            zoom: 13,
            scrollwheel: false
        }).streetviewpanorama('#street', {
            position: fenway,
            pov: {
                heading: 34,
                pitch: 10,
                zoom: 1
            }
        });
    });

    /*  =========================
            Scroll Up
        ========================= */
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: "<a class='hvr-icon-bob click-top'></a>", // Text for element
        activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });

    $(window).on('load', function () {
        /*  ======================================
                preloader
            ====================================== */
        $('#preloader').fadeOut('500');
        
        /*  =========================
                Isotope
            ========================= */
        // init Isotope
        var isotope_content = $('.iso-content');
        isotope_content.isotope({
            itemSelector: '.iso-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.iso-item'
            }
        });
        // filter items on button click
        var isotope_nav = $('.iso-nav ul li');
        isotope_nav.on('click', function () {
            $('.iso-nav ul li').removeClass('portfolio-active');
            $(this).addClass('portfolio-active');
            var selector = $(this).attr('data-filter');
            $('.iso-content').isotope({
                filter: selector
            });
            return false;
        });
    });
}(jQuery));
