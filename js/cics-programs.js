jQuery(document).ready(function()
{
    var navset, scrollPos = 0;

    jQuery("nav").wrap('<div class="nav-placeholder"></div>');
    jQuery("nav").wrapInner('<div class="nav-inner"></div>');
    jQuery(".nav-inner").wrapInner('<div class="nav-inner-most"></div>');

    function stickyUtility()
    {
        if (!jQuery("nav").hasClass("fixed"))
        {
            navset = jQuery("nav").offset().top;
        }
    }
    
    stickyUtility();
    
    jQuery(window).resize(function()
    {
        stickyUtility();
    });
    
    jQuery(window).scroll(function()
    {
        scrollPos = jQuery(window).scrollTop();
        
        if (scrollPos >= navset)
        {
            jQuery("nav").addClass("fixed");
        }
        else
        {
            jQuery("nav").removeClass("fixed");
        }
        
    });
});
const panels = document.querySelectorAll(".panel");

function removeActiveClasses() {
    panels.forEach((panel) => {
        panel.classList.remove("active");
    });
}

panels.forEach((panel) => {
    panel.addEventListener("click", () => {
        if (panel.classList.contains("active")) {
        removeActiveClasses();
        } else {
        removeActiveClasses();
        panel.classList.add("active");
        }
    });
});

(function () {
    "use strict";

    var carousels = function () {
    $(".owl-carousel1").owlCarousel({
        loop: true,
        center: true,
        margin: 0,
        responsiveClass: true,
        nav: false,
        responsive: {
        0: {
            items: 1,
            nav: false
        },
        680: {
            items: 2,
            nav: false,
            loop: false
        },
        1000: {
            items: 3,
            nav: true
        }
        }
    });
    };

    (function ($) {
    carousels();
    })(jQuery);
})();


var btn = $('#back-to-top-btn');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
});

