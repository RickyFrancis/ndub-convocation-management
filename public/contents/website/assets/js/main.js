/*---------------------------
      Table of Contents
    --------------------
    
    01- Mobile Menu
    02- Sticky Navbar
    03- Search Popup
    04- Function to open and close popup
    05- Scroll Top Button
    06- Set Background-img to section 
    07- Increase and Decrease Input Value
    08- Add active class to accordions
    09- Switch Between List view and Grid View
    10- Owl Carousel
    11- Products Filtering and Sorting
    12- Range Slider
    13- lightbox Gallery 
    14- NiceSelect Plugin
    15- image zoomsl Plugin 
    16- AOS Animation Plugin
    
 ----------------------------*/

$(function () {
    /*==========   Mobile Menu   ==========*/
    $('.navbar-toggler').on('click', function () {
        $(this).toggleClass('actived');
    })
    $('.navbar-toggler').on('click', function () {
        $('.navbar-collapse').toggleClass('menu-opened');
    })

    // Toggle dropdown Menu in Mobile
    $('.dropdown-menu [data-toggle=dropdown]').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).parent().siblings().removeClass("opened");
        $(this).parent().toggleClass("opened");
    });
    $('.dropdown-submenu [data-toggle=dropdown]').on('click', function (e) {
        $(this).next().toggleClass("show");
        $(this).parent().siblings().find('.dropdown-menu').removeClass('show');
    });

    /*==========   Sticky Navbar   ==========*/
    $(window).on('scroll', function () {
        if ($(window).width() >= 992) {
            var $navbar = $('.sticky-navbar');
            if ($(window).scrollTop() > 100) {
                $navbar.addClass('fixed-navbar');
            } else {
                $navbar.removeClass('fixed-navbar');
            }
        }
    });

    /*==========  Search Popup ==========*/
    // Show Module Search
    $('.search-popup-trigger').on('click', function (e) {
        e.preventDefault();
        $('.search-popup').toggleClass('active', 'inActive').removeClass('inActive');
    });
    // Close Module Search
    $('.close-search').on('click', function () {
        $('.search-popup').removeClass('active').addClass('inActive');
    });


    /*==========  Function to open and close popup (to avoid repeating code More than 1 time)  ==========*/
    function openPopup(triggerBtn, popup) {
        $(triggerBtn).on('click', function (e) {
            e.preventDefault();
            $(popup).addClass('active');
        });
    }
    function closePopup(closeBtn, popup) {
        $(closeBtn).on('click', function () {
            $(popup).removeClass('active');
        });
    }
    function closePopupFromOutside(popup, stopPropagationElement) {
        $(document).on('mouseup', function (e) {
            if (!$(popup).is(e.target) && !$(stopPropagationElement).is(e.target) && $(popup).has(e.target).length === 0 && $(popup).has(e.target).length === 0) {
                $(popup).removeClass('active');
            }
        });
    }

    openPopup('.hamburger-menu-trigger', '.hamburger-menu');  // show hamburger Menu
    closePopup('.close__hamburger-menu', '.hamburger-menu'); // Close hamburger Menu
    closePopupFromOutside('.hamburger-menu', '.hamburger-menu-trigger'); // Close hamburger Menu when you click outside it

    openPopup('.navbar__action-btn-cart', '.cart-popup');  // show module cart
    closePopup('.close-cart', '.cart-popup'); // Close Module Cart
    closePopupFromOutside('.cart-popup', '.navbar__action-btn-cart'); // Close Module Cart when you click outside it


    /*==========   Scroll Top Button   ==========*/
    var $scrollTopBtn = $('#scrollTopBtn');
    // Show Scroll Top Button
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 700) {
            $scrollTopBtn.addClass('actived');
        } else {
            $scrollTopBtn.removeClass('actived');
        }
    });
    // Animate Body after Clicking on Scroll Top Button
    $scrollTopBtn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    /*==========   Set Background-img to section   ==========*/
    $('.bg-img').each(function () {
        var imgSrc = $(this).children('img').attr('src');
        $(this).parent().css({
            'background-image': 'url(' + imgSrc + ')',
            'background-size': 'cover',
            'background-position': 'center',
        });
        $(this).parent().addClass('bg-img');
        $(this).remove();
    });

    /*==========   Increase and Decrease Input Value   ==========*/
    // Increase Value
    $('.increase-qty').on('click', function () {
        var $qty = $(this).parent().find('.qty-input');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    // Decrease Value
    $('.decrease-qty').on('click', function () {
        var $qty = $(this).parent().find('.qty-input');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
        }
    });

    /*==========   Add active class to accordions   ==========*/
    $('.accordion__item-header').on('click', function () {
        $(this).parent('.accordion-item').addClass('opened');
        $(this).parent('.accordion-item').siblings().removeClass('opened');
    })
    $('.accordion__item-title').on('click', function (e) {
        e.preventDefault()
    });

    /*==========   Switch Between List view and Grid View   ==========*/
    $('.filter-option-view a').on('click', function (e) {
        e.preventDefault()
        $(this).addClass('active').siblings().removeClass('active');
    })
    $('#listView').on('click', function (e) {
        $('.product-item').parent().addClass('list-view');
    });
    $('#gridView').on('click', function (e) {
        $('.product-item').parent().removeClass('list-view');
    });

    /*==========   Owl Carousel  ==========*/
    $('.carousel').each(function () {
        $(this).owlCarousel({
            nav: $(this).data('nav'),
            dots: $(this).data('dots'),
            loop: $(this).data('loop'),
            margin: $(this).data('space'),
            center: $(this).data('center'),
            dotsSpeed: $(this).data('speed'),
            autoplay: $(this).data('autoplay'),
            transitionStyle: $(this).data('transition'),
            animateOut: $(this).data('animate-out'),
            animateIn: $(this).data('animate-in'),
            autoplayTimeout: 15000,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: $(this).data('slide-sm'),
                },
                700: {
                    items: $(this).data('slide-md'),
                },
                1000: {
                    items: $(this).data('slide'),
                }
            }
        });
    });

    /*==========   Products Filtering and Sorting  ==========*/
    $(".filtered-items-wrap").mixItUp();
    $(".portfolio-filter li a").on('click', function (e) {
        e.preventDefault();
    });

    $('.loadMoreportfolio').on('click', function (e) {
        e.preventDefault();
        $('.portfolio-hidden > .portfolio-item').fadeIn();
        $(this).fadeOut();
    });

    /*==========   Range Slider  ==========*/
    var $rangeSlider = $("#rangeSlider"),
        $rangeSliderResult = $("#rangeSliderResult");
    $rangeSlider.slider({
        range: true,
        min: 0,
        max: 300,
        values: [50, 200],
        slide: function (event, ui) {
            $rangeSliderResult.val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $rangeSliderResult.val("$" + $rangeSlider.slider("values", 0) + " - $" + $rangeSlider.slider("values", 1));

    /*==========   lightbox PLugin  ==========*/
    lightbox.option({
        fadeDuration: 300
    });

    /*==========  NiceSelect Plugin  ==========*/
    $('select').niceSelect();

    /*==========  image zoomsl Plugin  ==========*/
    $(".zoomin").imagezoomsl();

    /*==========  AOS Animation Plugin  ==========*/
    AOS.init({ duration: 800 });
});

