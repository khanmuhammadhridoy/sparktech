(function ($) {
  "use strict";

  $(document).ready(function () {
    // Mobile menu
    $("#mobile-menu").meanmenu({
      meanMenuContainer: ".mobile-menu",
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

    // Counter up
    if ($(".counter").length) {
      $(".counter").counterUp({
        delay: 10,
        time: 1500,
      });
    }

    // Accordion
    $(".accordion-list > li:nth-child(2)")
      .addClass("active")
      .find(".answer")
      .show();
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

    // Service details tab
    $(".tab-link").on("click", function (event) {
      event.preventDefault(); // Prevent the default action of the <a> tag
      const tab_id = $(this).attr("data-tab");
      $(".tab-link").removeClass("active");
      $(".tab-content").removeClass("active");
      $(this).addClass("active");
      $("#" + tab_id).addClass("active");
    });

    // Portfolio slider
    if ($(".portfolio-slider").length) {
      $(".portfolio-slider").slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              dots: false,
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    }

    // Brand slider
    if ($(".brand-slider").length) {
      $(".brand-slider").slick({
        dots: false,
        infinite: true,
        speed: 3000,
        autoplay: true,
        autoplaySpeed: 0,
        slidesToShow: 6,
        slidesToScroll: 1,
        cssEase: "linear",
        arrows: false,
        centerMode: true,
        variableWidth: true,
      });
    }

    // Testimonial slider
    if ($(".testimonial-slider").length) {
      $(".testimonial-slider").slick({
        dots: false,
        arrows: true,
        prevArrow:
          '<span class="arrow-up"><i class="fa-solid fa-angle-up"></i></span>',
        nextArrow:
          '<span class="arrow-down"><i class="fa-solid fa-angle-down"></i></span>',
        infinite: true,
        speed: 1000,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              dots: false,
              arrows: false,
            },
          },
        ],
      });
    }

    // Blog slider
    if ($(".blog-slider").length) {
      $(".blog-slider").slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 1200,
            settings: {
              dots: false,
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              dots: false,
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    }

    // Magnific popup initialization
    if ($(".popup-gallery").length) {
      $(".popup-gallery").magnificPopup({
        delegate: ".popup-img",
        type: "image",
        gallery: {
          enabled: true,
        },
      });
    }

    $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
    });

    // Navbar toggle
    $(".nav-bar").on("click", function () {
      $(".main-menu").toggleClass("active");
      $(".nav-bar").toggleClass("active");
    });

    // Add active class on hover for services
    $(".single-service-2").hover(function () {
      $(".single-service-2").removeClass("active");
      $(this).addClass("active");
    });

    // Default active service
    $(".single-service-2:nth-child(4)").addClass("active");

    // Pricing toggle
    $(".monthly-plans").show();
    $(".yearly-plans").hide();

    $(".pricing-toggle-btn").on("click", function () {
      $(".pricing-toggle-btn").removeClass("active");
      $(this).addClass("active");

      const pricingType = $(this).data("pricing");
      if (pricingType === "monthly") {
        $(".monthly-plans").show();
        $(".yearly-plans").hide();
      } else if (pricingType === "yearly") {
        $(".monthly-plans").hide();
        $(".yearly-plans").show();
      }
    });
  });

  // Handle scroll-based behaviors
  $(window).on("scroll", function () {
    // Back-to-top button
    const ScrollTop = $(".back-to-top");
    if ($(window).scrollTop() > 1000) {
      ScrollTop.fadeIn(1000);
    } else {
      ScrollTop.fadeOut(1000);
    }

    // Navbar fixed
    const headerHeight = $(".header-area").outerHeight();
    if ($(this).scrollTop() > headerHeight) {
      $(".menu-area").addClass("fixed-top");
    } else {
      $(".menu-area").removeClass("fixed-top");
    }
  });

  // Handle page load behaviors
  $(window).on("load", function () {
    // Preloader
    const preLoader = $("#preloader");
    if (preLoader.length) {
      preLoader.fadeOut(0);
    }

    // Back-to-top button
    $(".back-to-top").on("click", function () {
      $("html").animate({ scrollTop: "0" }, 1000);
    });
  });
})(jQuery);
