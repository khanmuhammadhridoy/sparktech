(function ($) {
  "use strict";

  $(document).ready(function () {
    // Mobile menu
    $("#mobile-menu").meanmenu({
      meanMenuContainer: ".mobile-menu",
      meanScreenWidth: "991.98",
      onePage: false,
    });

    // Theme switch
    const checkbox = document.getElementById("checkbox");
    if (checkbox) {
      checkbox.addEventListener("change", () => {
        document.body.classList.toggle("light-theme");
      });
    }

    // Counter up
    if ($.fn.counterUp) {
      $(".counter").counterUp({
        delay: 10,
        time: 1500,
      });
    }

    // Accordion
    const accordionList = $(".accordion-list > li");
    accordionList
      .filter(":nth-child(2)")
      .addClass("active")
      .find(".answer")
      .show();
    accordionList.not(":nth-child(2)").find(".answer").hide();

    accordionList.on("click", function () {
      const isActive = $(this).hasClass("active");
      accordionList.removeClass("active").find(".answer").slideUp();
      if (!isActive) {
        $(this).addClass("active").find(".answer").slideDown();
      }
    });

    // Service details tab
    $(".tab-link").on("click", function (event) {
      event.preventDefault();
      const tabId = $(this).data("tab");

      $(".tab-link").removeClass("active");
      $(".tab-content").removeClass("active");

      $(this).addClass("active");
      $(`#${tabId}`).addClass("active");
    });

    // Initialize sliders
    initializeSliders();

    // Popup gallery
    if ($.fn.magnificPopup) {
      $(".popup-gallery").magnificPopup({
        delegate: ".popup-img",
        type: "image",
        gallery: {
          enabled: true,
        },
      });

      $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
      });
    }

    // Navbar toggle
    const navBar = $(".nav-bar");
    navBar.on("click", function () {
      $(".main-menu, .nav-bar").toggleClass("active");
    });

    // Service item hover effect
    handleHoverEffect(".single-service-2", 4);

    // Case filter
    initializeCaseFilter();

    // Pricing toggle
    handlePricingToggle();

    // Mouseover effects
    handleHoverEffect(".single-choose-item");
    handleHoverEffect(".contact-info-area .single-info");

    // Tab functionality
    initializeTabFunctionality();

    // Accordion functionality
    initializeAccordion();
  });

  $(window).on("scroll", function () {
    const ScrollTop = $(".back-to-top");

    // Back to top visibility
    if ($(this).scrollTop() > 1000) {
      ScrollTop.fadeIn(1000);
    } else {
      ScrollTop.fadeOut(1000);
    }

    // Navbar fixed position
    const headerHeight = $(".header-area").outerHeight();
    $(".menu-area").toggleClass(
      "fixed-top",
      $(this).scrollTop() > headerHeight
    );
  });

  $(window).on("load", function () {
    // Preloader
    $("#preloader").fadeOut(0);

    // Back to top animation
    $(".back-to-top").on("click", function () {
      $("html").animate({ scrollTop: 0 }, 1000);
    });
  });

  // Helper functions
  function initializeSliders() {
    if ($.fn.slick) {
      const sliderSettings = {
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1000,
        infinite: true,
        arrows: false,
      };

      $(".portfolio-slider").slick({
        ...sliderSettings,
        slidesToShow: 2,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 1 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });

      $(".testimonial-slider").slick({
        ...sliderSettings,
        arrows: true,
        fade: true,
        slidesToShow: 1,
        prevArrow:
          '<span class="arrow-up"><i class="fa-solid fa-angle-up"></i></span>',
        nextArrow:
          '<span class="arrow-down"><i class="fa-solid fa-angle-down"></i></span>',
        responsive: [{ breakpoint: 992, settings: { arrows: false } }],
      });

      // Additional sliders can be initialized similarly...
    }
  }

  function initializeCaseFilter() {
    const caseItems = $(".case-items .case-single");
    $(".case-filter-tab li").on("click", function () {
      const filter = $(this).data("filter");

      $(this).addClass("active").siblings().removeClass("active");
      if (filter === "all") {
        caseItems.fadeIn().removeClass("item-hidden");
      } else {
        caseItems.each(function () {
          $(this)
            .toggleClass("item-hidden", !$(this).hasClass(filter))
            .fadeToggle();
        });
      }
    });
  }

  function handlePricingToggle() {
    $(".monthly-plans").show();
    $(".yearly-plans").hide();

    $(".pricing-toggle-btn").on("click", function () {
      $(".pricing-toggle-btn").removeClass("active");
      $(this).addClass("active");

      const pricingType = $(this).data("pricing");
      if (pricingType === "monthly") {
        $(".monthly-plans").show();
        $(".yearly-plans").hide();
      } else {
        $(".monthly-plans").hide();
        $(".yearly-plans").show();
      }
    });
  }

  function handleHoverEffect(selector, activeIndex) {
    const items = $(selector);
    items.on("mouseover", function () {
      items.removeClass("active");
      $(this).addClass("active");
    });
    if (activeIndex) items.eq(activeIndex - 1).addClass("active");
  }

  function initializeTabFunctionality() {
    $(".tab-menu-item").on("click", function () {
      const tabId = $(this).data("tab");
      $(".tab-menu-item").removeClass("active");
      $(".tab-content-item").removeClass("active").hide();

      $(this).addClass("active");
      $(`#${tabId}`).addClass("active").fadeIn();
    });
  }

  function initializeAccordion() {
    $(".accordion-header").on("click", function () {
      $(".accordion-header").removeClass("active");
      $(".accordion-content").slideUp();

      $(this).addClass("active");
      $(this).next(".accordion-content").slideDown();
    });

    $(".accordion-item:first-child .accordion-header").addClass("active");
    $(".accordion-item:first-child .accordion-content").slideDown();
  }
})(jQuery);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      //custom GSAP code goes here
      // This tween will rotate an element with a class of .my-element
      gsap.to(".my-element", {
        rotation: 360,
        duration: 2,
        ease: "bounce.out",
      });

      console.log("window loaded");
    },
    false
  );
});
