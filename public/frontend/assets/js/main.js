(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('bg-dark').css('top', '-1px');
        } else {
            $('.sticky-top').removeClass('bg-dark').css('top', '-100px');
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Experience
    $('.experience').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Modal Video
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })
    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    })


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ]
    });
    
})(jQuery);

///=============  Portfolio Active Hover  =============\\\
const portfolioItems = document.querySelectorAll(".portfolio-item");
portfolioItems.forEach((portfolioItem) => {
    portfolioItem.addEventListener("mouseenter", () => {
        removeActiveClasses();
        portfolioItem.classList.add("active");
    });
});
function removeActiveClasses() {
    portfolioItems.forEach((portfolioItem) => {
        portfolioItem.classList.remove("active");
    });
}
///=============  Portfolio One  =============\\\
var swiper = new Swiper(".portfolio__area-slider", {
    loop: true,
    speed: 2000,
    spaceBetween: 30,
    autoplay: {
        delay: 4500,
        reverseDirection: true,
        disableOnInteraction: false,			
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        750: {
            spaceBetween: 30,
            slidesPerView: 2
        },
        1138: {
            slidesPerView: 3
        },
        1600: {
            slidesPerView: 4
        },
    }
});	
window.addEventListener('load', () => {
    let portfolioContainer = document.querySelector('.portfolio-container');

    if (portfolioContainer) {
        let portfolioIsotope = new Isotope(portfolioContainer, {
            itemSelector: '.portfolio-item'
        });

        let portfolioFilters = document.querySelectorAll('#portfolio-flters li');

        portfolioFilters.forEach(function(filter) {
            filter.addEventListener('click', function(e) {
                e.preventDefault();
                portfolioFilters.forEach(function(el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
                portfolioIsotope.on('arrangeComplete', function() {
                    AOS.refresh();
                });
            });
        });
    }
});


  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 100,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

    // Elements for language selection
    const englishSelect = document.getElementById('english-select');
    const amharicSelect = document.getElementById('amharic-select');

    // Elements with the classes for languages
    const englishElements = document.querySelectorAll('.eng');
    const amharicElements = document.querySelectorAll('.amh');

    // Function to toggle languages
    function toggleLanguage(language) {
        if (language === 'english') {
            // Show English content, hide Amharic
            englishElements.forEach(function (el) {
                el.style.display = 'block';
            });
            amharicElements.forEach(function (el) {
                el.style.display = 'none';
            });

            // Update active class
            englishSelect.classList.add('active');
            amharicSelect.classList.remove('active');
        } else if (language === 'amharic') {
            // Show Amharic content, hide English
            englishElements.forEach(function (el) {
                el.style.display = 'none';
            });
            amharicElements.forEach(function (el) {
                el.style.display = 'block';
            });

            // Update active class
            englishSelect.classList.remove('active');
            amharicSelect.classList.add('active');
        }
        $(document).ready(function() {
            $('.image-popup').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    }

 
