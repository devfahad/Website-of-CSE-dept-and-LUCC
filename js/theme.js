/*
  Theme Name: Leading University Computer Club | LUCC
  Author: Fahad, Nafi, Tanvir
  Description: LUCC's Official Website
  Version: 1.0
*/


/*=======================================================================
 [Table of contents]
 =========================================================================
 [01] REVOLUTION SLIDER
 [02] STICKY HEADER
 [03] SEARCH FORM
 [04] MOBILE MENU NAV
 [05] FUN FACT
 [06] TESTMONIAL
 [07] PRELOADER
 [08] BACK TO TOP
 [09] CONTACT FORM FOR SINGLE-COMMITTEE-MEMBER
 [10] GALLERY PAGE IMAGE POPUP
 [11] LOGIN
 
 ==========================================================================*/

(function ($) {
    'use strict';
    /*=======================================================================
     [01] REVOLUTION SLIDER
     =========================================================================*/
    var rev = $("#slider");
    if (rev.length > 0) {
        $('.tp-banner').revolution({
            delay: 9000,
            startwidth: 1170,
            startheight: 500,
            startWithSlide: 0,
            fullScreenAlignForce: "off",
            navigationType: "bullet",
            navigationArrows: "on",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "on",
            navigationVOffset: 65
        });
    }

    /*=======================================================================
     [02] STICKY HEADER
     =========================================================================*/
    $(".innerHeader").sticky({
        topSpacing: 0
    });


    /*=======================================================================
     [03] SEARCH FORM
     =========================================================================*/
    if ($('.headerSearch').length > 0) {
        $('#searchBtn').on('click', function (e) {
            e.preventDefault();
            $('.headerSearch').toggleClass('active');
        })
    }

    /*=======================================================================
     [04] MOBILE MENU NAV
     =========================================================================*/
    if ($('.mobileMenu, .mobileMenu2').length > 0) {
        $('.mobileMenu, .mobileMenu2').on('click', function () {
            $(this).toggleClass('active');
            $('.mainNav > ul, .mainNav2 > ul').slideToggle('slow');
        });
        if ($(window).width() < 767) {
            $('.mainNav > ul li.has-menu-items > a, .mainNav2 > ul li.has-menu-items > a').on('click', function (e) {
                e.preventDefault();
                $(this).parent().toggleClass('active');
                $(this).parent().children('.sub-menu').slideToggle('slow');
            });
        }
    }
    /*=======================================================================
     [05] FUN FACT 
    =========================================================================*/
    var skl = true;
    $('.singleFun').appear();
    $('.singleFun').on('appear', function () {
        if (skl) {
            $('.count').each(function () {
                var $this = $(this);
                jQuery({
                    Counter: 0
                }).animate({
                    Counter: $this.attr('data-counter')
                }, {
                    duration: 6000,
                    easing: 'swing',
                    step: function () {
                        var num = Math.ceil(this.Counter).toString();
                        if (Number(num) > 999) {
                            while (/(\d+)(\d{3})/.test(num)) {
                                num = num.replace(/(\d+)(\d{3})/, '<span>' + '$1' + '</span>' + '$2');
                            }
                        }
                        $this.html(num);
                    }
                });
            });
            skl = false;
        }
    });

    /*========================================================================
    [06] TESTMONIAL 
    =========================================================================*/
    var testcarousel = $('.testimonials-carousel');
    if (testcarousel.length > 0) {
        testcarousel.owlCarousel({
            items: 3,
            dots: false,
            nav: true,
            navText: ['1', '2'],
            center: true,
            loop: true,
            mouseDrag: true,
            responsive: {
                0: {
                    items: 3
                },
                480: {
                    items: 3
                },
                768: {
                    items: 3
                },
                1240: {
                    items: 3
                }
            }
        });
    }

    var testimCarousel = $(".testimonials-carousel");
    testimCarousel.on('initialized.owl.carousel', function (e) {
        var currentItem = e.item.index - 2;
        $(".testimonials-body").find("[data-slide='" + currentItem + "']").fadeIn(300);
    });
    testimCarousel.on('translate.owl.carousel', function (e) {
        var currentItem = e.item.index - 2;
        $(".testimonials-body .blockquote-big").fadeOut(200);
        $(".testimonials-body").find("[data-slide='" + currentItem + "']").delay(400).fadeIn(300);
    });

    /*========================================================================
    [07] PRELOADER
    =========================================================================*/
    var preloader = $('.preloader');
    if (preloader.length > 0) {
        $(window).load(function () {
            preloader.delay(500).fadeOut('slow');
        });
    }

    /*=======================================================================
     [08] BACK TO TOP
     =========================================================================*/
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > $(window).height()) {
            $("#backToTop").addClass('showit');
        } else {
            $("#backToTop").removeClass('showit');
        }
    });
    $("body, html").on("click", "#backToTop", function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    });

    /*=======================================================================
     [09] CONTACT FORM FOR SINGLE-COMMITTEE-MEMBER
     =========================================================================*/
    if ($('#contactForm').length > 0) {
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();
            $('#con_submit').val('Processing...');
            var con_name = $('#con_name').val(),
                con_email = $('#con_email').val(),
                con_phone = $('#con_phone').val(),
                con_msg = $('#con_msg').val(),
                required = 0;
            $('.required', this).each(function () {
                if ($(this).val() == '') {
                    $(this).addClass('reqError');
                    required += 1;
                } else {
                    if ($(this).hasClass('reqError')) {
                        $(this).removeClass('reqError');
                        if (required > 0) {
                            required -= 1;
                        }
                    }
                }
            });
            if (required === 0) {
                $.ajax({
                    type: 'POST',
                    url: 'php/mail.php',
                    data: ({
                        con_name: con_name,
                        con_email: con_email,
                        con_phone: con_phone,
                        con_msg: con_msg
                    }),
                    success: function (data) {

                        alert(data);
                        $('#contactForm input, #contactForm textarea').val('');
                        $("#con_submit").val('Done!');
                    }

                });
            } else {
                $('#con_submit').val('Failed !');
            }

        });
        $('.required').on('keyup', function () {
            $(this).removeClass('reqError');
        });
    }

    /*========================================================================
    [10] GALLERY PAGE IMAGE POPUP
    =========================================================================*/
    var popUp = $('a.popUp');
    if (popUp.length > 0) {
        popUp.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }

    /*========================================================================
     [11] LOGIN
     =========================================================================*/
    /*[ Form Validation ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    /*[ Tilting Image ]*/
    $('.js-tilt').tilt({
        scale: 1.1
    })

})(jQuery);
