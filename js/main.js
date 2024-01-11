var isMobile = {
  Android: function () {
    return navigator.userAgent.match(/Android/i);
  },
  BlackBerry: function () {
    return navigator.userAgent.match(/BlackBerry/i);
  },
  iOS: function () {
    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
  },
  Opera: function () {
    return navigator.userAgent.match(/Opera Mini/i);
  },
  Windows: function () {
    return navigator.userAgent.match(/IEMobile/i);
  },
  any: function () {
    return (
      isMobile.Android() ||
      isMobile.BlackBerry() ||
      isMobile.iOS() ||
      isMobile.Opera() ||
      isMobile.Windows()
    );
  },
};

var mobileMenuOutsideClick = function () {
  $(document).click(function (e) {
    var container = $("#fh5co-offcanvas, .js-fh5co-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($("body").hasClass("offcanvas")) {
        $("body").removeClass("offcanvas");
        $(".js-fh5co-nav-toggle").removeClass("active");
      }
    }
  });
};

var offcanvasMenu = function () {
  $("#page").prepend('<div id="fh5co-offcanvas" />');
  $("#page").prepend(
    '<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle fh5co-nav-white"><i></i></a>'
  );
  var clone1 = $(".menu-1 > ul").clone();
  $("#fh5co-offcanvas").append(clone1);
  var clone2 = $(".menu-2 > ul").clone();
  $("#fh5co-offcanvas").append(clone2);

  $("#fh5co-offcanvas .has-dropdown").addClass("offcanvas-has-dropdown");
  $("#fh5co-offcanvas").find("li").removeClass("has-dropdown");

  // Hover dropdown menu on mobile
  $(".offcanvas-has-dropdown")
    .mouseenter(function () {
      var $this = $(this);

      $this.addClass("active").find("ul").slideDown(500, "easeOutExpo");
    })
    .mouseleave(function () {
      var $this = $(this);
      $this.removeClass("active").find("ul").slideUp(500, "easeOutExpo");
    });

  $(window).resize(function () {
    if ($("body").hasClass("offcanvas")) {
      $("body").removeClass("offcanvas");
      $(".js-fh5co-nav-toggle").removeClass("active");
    }
  });
};

var burgerMenu = function () {
  $("body").on("click", ".js-fh5co-nav-toggle", function (event) {
    var $this = $(this);

    if ($("body").hasClass("overflow offcanvas")) {
      $("body").removeClass("overflow offcanvas");
    } else {
      $("body").addClass("overflow offcanvas");
    }
    $this.toggleClass("active");
    event.preventDefault();
  });
};

var contentWayPoint = function () {
  var i = 0;
  $(".animate-box").waypoint(
    function (direction) {
      if (direction === "down" && !$(this.element).hasClass("animated-fast")) {
        i++;

        $(this.element).addClass("item-animate");
        setTimeout(function () {
          $("body .animate-box.item-animate").each(function (k) {
            var el = $(this);
            setTimeout(
              function () {
                var effect = el.data("animate-effect");
                if (effect === "fadeIn") {
                  el.addClass("fadeIn animated-fast");
                } else if (effect === "fadeInLeft") {
                  el.addClass("fadeInLeft animated-fast");
                } else if (effect === "fadeInRight") {
                  el.addClass("fadeInRight animated-fast");
                } else {
                  el.addClass("fadeInUp animated-fast");
                }

                el.removeClass("item-animate");
              },
              k * 200,
              "easeInOutExpo"
            );
          });
        }, 100);
      }
    },
    { offset: "85%" }
  );
};

var dropdown = function () {
  $(".has-dropdown")
    .mouseenter(function () {
      var $this = $(this);
      $this
        .find(".dropdown")
        .css("display", "block")
        .addClass("animated-fast fadeInUpMenu");
    })
    .mouseleave(function () {
      var $this = $(this);

      $this
        .find(".dropdown")
        .css("display", "none")
        .removeClass("animated-fast fadeInUpMenu");
    });
};

var goToTop = function () {
  $(".js-gotop").on("click", function (event) {
    event.preventDefault();

    $("html, body").animate(
      {
        scrollTop: $("html").offset().top,
      },
      500,
      "easeInOutExpo"
    );

    return false;
  });

  $(window).scroll(function () {
    var $win = $(window);
    if ($win.scrollTop() > 200) {
      $(".js-top").addClass("active");
    } else {
      $(".js-top").removeClass("active");
    }
  });
};

// Loading page
var loaderPage = function () {
  $(".fh5co-loader").fadeOut("slow");
};

var counter = function () {
  $(".js-counter").countTo({
    formatter: function (value, options) {
      return value.toFixed(options.decimals);
    },
  });
};

var counterWayPoint = function () {
  if ($("#fh5co-counter").length > 0) {
    $("#fh5co-counter").waypoint(
      function (direction) {
        if (direction === "down" && !$(this.element).hasClass("animated")) {
          setTimeout(counter, 400);
          $(this.element).addClass("animated");
        }
      },
      { offset: "90%" }
    );
  }
};

var sliderMain = function () {
  $("#fh5co-hero .flexslider").flexslider({
    animation: "slide",

    easing: "swing",
    direction: "vertical",

    slideshowSpeed: 5000,
    directionNav: true,
    start: function () {
      setTimeout(function () {
        $(".slider-text").removeClass("animated fadeInUp");
        $(".flex-active-slide")
          .find(".slider-text")
          .addClass("animated fadeInUp");
      }, 500);
    },
    before: function () {
      setTimeout(function () {
        $(".slider-text").removeClass("animated fadeInUp");
        $(".flex-active-slide")
          .find(".slider-text")
          .addClass("animated fadeInUp");
      }, 500);
    },
  });
};

var parallax = function () {
  if (!isMobile.any()) {
    $(window).stellar({
      horizontalScrolling: false,
      hideDistantElements: false,
      responsive: true,
    });
  }
};

var testimonialCarousel = function () {
  var owl = $(".owl-carousel-fullwidth");
  owl.owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    smartSpeed: 800,
    autoHeight: true,
  });
};

$(function () {
  mobileMenuOutsideClick();
  offcanvasMenu();
  burgerMenu();
  contentWayPoint();
  dropdown();
  goToTop();
  loaderPage();
  counterWayPoint();
  counter();
  parallax();
  sliderMain();
  testimonialCarousel();
});

// ============ right menu drop down
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".sidebar .nav-link").forEach(function (element) {
    element.addEventListener("click", function (e) {
      let nextEl = element.nextElementSibling;
      let parentEl = element.parentElement;

      if (nextEl) {
        e.preventDefault();
        let mycollapse = new bootstrap.Collapse(nextEl);

        if (nextEl.classList.contains("show")) {
          mycollapse.hide();
        } else {
          mycollapse.show();
          // find other submenus with class=show
          var opened_submenu =
            parentEl.parentElement.querySelector(".submenu.show");
          // if it exists, then close all of them
          if (opened_submenu) {
            new bootstrap.Collapse(opened_submenu);
          }
        }
      }
    }); // addEventListener
  }); // forEach
});

// Active Menu
document.querySelectorAll(".nav-link").forEach((link) => {
  if (link.href === window.location.href) {
    link.setAttribute("aria-current", "page");
  }
});

// buttom right content
const optionMenu = document.querySelector(".select-menu"),
  selectBtn = optionMenu.querySelector(".select-btn");
selectBtn.addEventListener("click", () =>
  optionMenu.classList.toggle("active_menu")
);

const optionMenu2 = document.querySelector(".select-menu-2"),
  selectBtn2 = optionMenu2.querySelector(".select-btn-2");
selectBtn2.addEventListener("click", () =>
  optionMenu2.classList.toggle("active_menu2")
);

const optionMenu3 = document.querySelector(".select-menu-3"),
  selectBtn3 = optionMenu3.querySelector(".select-btn-3");
selectBtn3.addEventListener("click", () =>
  optionMenu3.classList.toggle("active_menu3")
);

const optionMenu4 = document.querySelector(".select-menu-4"),
  selectBtn4 = optionMenu4.querySelector(".select-btn-4");
selectBtn4.addEventListener("click", () =>
  optionMenu4.classList.toggle("active_menu4")
);

const optionMenu5 = document.querySelector(".select-menu-5"),
  selectBtn5 = optionMenu5.querySelector(".select-btn-5");
selectBtn5.addEventListener("click", () =>
  optionMenu5.classList.toggle("active_menu5")
);

// right content
const optionMenu6 = document.querySelector(".select-menu-6"),
  selectBtn6 = optionMenu6.querySelector(".select-btn-6");
selectBtn6.addEventListener("click", () =>
  optionMenu6.classList.toggle("active_menu6")
);

// right content economic
const optionMenu7 = document.querySelector(".select-menu-7"),
  selectBtn7 = optionMenu7.querySelector(".select-btn-7");
selectBtn7.addEventListener("click", () =>
  optionMenu7.classList.toggle("active_menu7")
);

const optionMenu8 = document.querySelector(".select-menu-8"),
  selectBtn8 = optionMenu8.querySelector(".select-btn-8");
selectBtn8.addEventListener("click", () =>
  optionMenu8.classList.toggle("active_menu8")
);

// events cards
// const tabsLinks = document.querySelectorAll(".tabs-links");
// const cardsAnnouncement = document.querySelector("#announcement");
// const cardsUpcomingEvents = document.querySelector("#upcoming-events");
// const cardsPastEvents = document.querySelector("#past-events");

let theEnd = 0,
  sticky = document.getElementById("sticky");
window.addEventListener("scroll", function () {
  var scrollTop = window.pageXOffset || document.documentElement.scrollTop;
  if (scrollTop > theEnd) {
    sticky.style.transition = "top 0.4s ease";
    sticky.style.top = "-900px";
  } else {
    sticky.style.top = "0";
  }
  theEnd = scrollTop;
});

// active events tabs
const tabs = document.querySelectorAll(".tabs-links");
tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
  });
});
