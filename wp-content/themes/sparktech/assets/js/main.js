(function ($) {
    "use strict";

    $(document).ready(function () {
        // Mobile menu
        $('#mobile-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "991.98",
            onePage: false,
        });

        // Color switch
        const checkbox = document.getElementById("checkbox");
        if (checkbox) {
            checkbox.addEventListener("change", () => {
                document.body.classList.toggle("light-theme");
            });
        }

        // GSAP animation example
        if (typeof gsap !== "undefined") {
            gsap.to(".element", { duration: 1, x: 100 });
        }

        // CounterUp initialization
        if ($.fn.counterUp) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000,
            });
        }

        // Accordion functionality
        $(".accordion-list > li:nth-child(2)").addClass("active").find(".answer").show();
        $(".accordion-list > li:not(:nth-child(2)) .answer").hide();

        $(".accordion-list > li").on("click", function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active").find(".answer").slideUp();
            } else {
                $(".accordion-list > li.active .answer").slideUp();
                $(".accordion-list > li.active").removeClass("active");
                $(this).addClass("active").find(".answer").slideDown();
            }
        });

        // Sliders initialization
        const initSlider = (selector, options) => {
            if ($(selector).length && $.fn.slick) {
                $(selector).slick(options);
            }
        };

        initSlider('.portfolio-slider', {
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 2,
            arrows: false,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 1 } },
                { breakpoint: 768, settings: { slidesToShow: 1 } },
            ],
        });

        initSlider('.brand-slider', {
            dots: false,
            infinite: true,
            speed: 3000,
            autoplay: true,
            autoplaySpeed: 0,
            slidesToShow: 6,
            cssEase: 'linear',
            arrows: false,
            centerMode: true,
            variableWidth: true,
        });

        initSlider('.testimonial-slider', {
            dots: false,
            arrows: true,
            prevArrow: '<span class="arrow-up"><i class="fa-solid fa-angle-up"></i></span>',
            nextArrow: '<span class="arrow-down"><i class="fa-solid fa-angle-down"></i></span>',
            infinite: true,
            speed: 1000,
            fade: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
        });

        // Magnific Popup initialization
        if ($.fn.magnificPopup) {
            $(".popup-gallery").magnificPopup({
                delegate: '.popup-img',
                type: 'image',
                gallery: { enabled: true },
            });

            $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
                type: "iframe",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
            });
        }

        // Tab functionality
        $('.tab-link').on('click', function (event) {
            event.preventDefault();
            const tabId = $(this).attr('data-tab');
            $('.tab-link').removeClass('active');
            $('.tab-content').removeClass('active');
            $(this).addClass('active');
            $("#" + tabId).addClass('active');
        });

        // Back to top and navbar scroll
        $(window).on('scroll', function () {
            const scrollTopButton = $('.back-to-top');
            if ($(window).scrollTop() > 1000) {
                scrollTopButton.fadeIn(1000);
            } else {
                scrollTopButton.fadeOut(1000);
            }

            const headerHeight = $(".header-area").outerHeight();
            if ($(window).scrollTop() > headerHeight) {
                $('.menu-area').addClass("fixed-top");
            } else {
                $('.menu-area').removeClass("fixed-top");
            }
        });

        // Preloader
        $(window).on('load', function () {
            $("#preloader").fadeOut(0);
            $(".back-to-top").on('click', function () {
                $("html").animate({ scrollTop: 0 }, 1000);
            });
        });

        // Pricing toggle
        $('.pricing-toggle-btn').on('click', function () {
            $('.pricing-toggle-btn').removeClass('active');
            $(this).addClass('active');
            const pricingType = $(this).data('pricing');
            if (pricingType === 'monthly') {
                $('.monthly-plans').show();
                $('.yearly-plans').hide();
            } else {
                $('.monthly-plans').hide();
                $('.yearly-plans').show();
            }
        });
    });
})(jQuery);
