<div id="preloder" >
            <div class="loader"> </div>
              
</div>

<style>
      /* Preloder */
            
            #preloder {
                display: none;
                position: fixed;
                top: 0;
                right: 0;
                z-index: 999999;
                padding: 3rem;
            }
            
            .loader {
                width: 20px;
                height: 20px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -13px;
                margin-left: -13px;
                border-radius: 60px;
                animation: loader 0.8s linear infinite;
                -webkit-animation: loader 0.8s linear infinite;
            }
            
            @keyframes loader {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                    border: 4px solid #f44336;
                    border-left-color: transparent;
                }
                50% {
                    -webkit-transform: rotate(180deg);
                    transform: rotate(180deg);
                    border: 4px solid #673ab7;
                    border-left-color: transparent;
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                    border: 4px solid #f44336;
                    border-left-color: transparent;
                }
            }
            
            @-webkit-keyframes loader {
                0% {
                    -webkit-transform: rotate(0deg);
                    border: 4px solid #f44336;
                    border-left-color: transparent;
                }
                50% {
                    -webkit-transform: rotate(180deg);
                    border: 4px solid #673ab7;
                    border-left-color: transparent;
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    border: 4px solid #f44336;
                    border-left-color: transparent;
                }
            }
</style>

<script>
    

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Portfolio filter
        --------------------*/
        $('.portfolio__filter li').on('click', function () {
            $('.portfolio__filter li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.portfolio__gallery').length > 0) {
            var containerEl = document.querySelector('.portfolio__gallery');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Masonary
    $('.work__gallery').masonry({
        itemSelector: '.work__item',
        columnWidth: '.grid-sizer',
        gutter: 10
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
		Hero Slider
	--------------------*/
    $('.hero__slider').owlCarousel({
        loop: true,
        dots: true,
        mouseDrag: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        margin: 0,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
    });

    var dot = $('.hero__slider .owl-dot');
    dot.each(function () {
        var index = $(this).index() + 1;
        if (index < 10) {
            $(this).html('0').append(index);
        } else {
            $(this).html(index);
        }
    });

    /*------------------
        Testimonial Slider
    --------------------*/
    $(".testimonial__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        dotsEach: 2,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            992: {
                items: 3
            },
            768: {
                items: 2
            },
            320: {
                items: 1
            }
        }
    });

    /*------------------
        Latest Slider
    --------------------*/
    $(".latest__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        dotsEach: 2,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            992: {
                items: 3
            },
            768: {
                items: 2
            },
            320: {
                items: 1
            }
        }
    });

    /*------------------
        Logo Slider
    --------------------*/
    $(".logo__carousel").owlCarousel({
        loop: true,
        margin: 100,
        items: 6,
        dots: false,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            992: {
                items: 5
            },
            768: {
                items: 4
            },
            480: {
                items: 3
            },
            320: {
                items: 2
            }
        }
    });

    /*------------------
        Video Popup
    --------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /*------------------
        Counter
    --------------------*/
    $('.counter_num').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

})(jQuery);
</script>