$(document).ready(function() {

    // Wow Animation JS Start
    new WOW().init();
    // Wow Animation JS End

    // Search JS Start
    $(".search-input").on('click', function() {
        $(".form-item").toggleClass('active');
    });
    // Search JS End

    // Addlink JS Start
    jQuery(document).on('click', ".addlink-more-icon", function() {
        jQuery(".addlink-more").removeClass('active');
        if(jQuery(this).hasClass('active-more')){
            jQuery(".addlink-more-icon").removeClass('active-more');
        }
        else{
            jQuery(this).addClass('active-more');
            jQuery(this).parent().addClass('active');
        }
    });
    // Addlink JS End

    // Add New Module JS Start
    $(".add-module-plus-btn").on('click', function() {
        $(".add-new-module-wp").toggleClass('active');
    });
    // Add New Module JS End

    // Tour Gallery Slider JS Start
    $('.tour-gallery-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        dots: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><span>Prev</span></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><span>Next</span></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
    // Tour Gallery Slider JS End


    jQuery(window).on('load resize', function() {
        var window_size = jQuery(window).width();
        if (window_size <= 991) {

            jQuery('.blog-slider').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 1500,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false,
                            arrows: false,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });

        } else {
            jQuery('.say-about-slider').slick('destroy');
        }
    });

    // Counter JS Start
    var a = 0;
    $(window).scroll(function() {
        if ($(".main-counter").length) {
            var oTop = $('.main-counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.count').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
                a = 1;
            }
        }
    });
    // Counter JS End



    // Sticky Header JS Start
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= 200) {
            $('.site-header').addClass('sticky-header');
        } else {
            $('.site-header').removeClass('sticky-header');
        }
    });
    // Sticky Header JS End

    // Smooth Scrolling JS Start
    // $( '.main-navigation ul li a' ).on( 'click', function(e){		
    // 	var href = $(this).attr( 'href' );	  
    // 	$( 'html, body' ).animate({
    // 		scrollTop: $( href ).offset().top
    // 	}, '1000' );
    // 	e.preventDefault();

    // });
    // Smooth Scrolling JS End

    // Scroll To Top JS Start
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 300) {
            $("#scrollToTop").fadeIn('500');
            $("#scrollToTop").addClass('show');
        } else {
            $("#scrollToTop").fadeOut('500');
            $("#scrollToTop").removeClass('show');
        }
    });
    jQuery('#scrollToTop').click(function() {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    // Scroll To Top JS End

    // Toogle Menu JS Start
    $(".navigation-btn").on('click', function() {
        $(".main-navigation").toggleClass('toggle-menu');
    });
    $(".main-navigation ul li a").on('click', function() {
        $(".main-navigation").removeClass('toggle-menu');
    });
    // Toogle MenuJS End

    // Search Bar JS Start
    $(".search-icon").click(function() {
        $(".search-icon").parent().toggleClass('search-box-open');
    });
    // Search Bar JS End


    if ($(window).width() < 992) {
        // Gallery Slider For Mobile JS Start
        // $('.services-slider').slick({
        // 	infinite: true,
        // 	slidesToShow: 2,
        // 	slidesToScroll: 1,
        // 	prevArrow: false,
        // 	nextArrow: false,
        // 	dots: true,
        // 	autoplay: true,
        // 	autoplaySpeed: 2000,	
        // 	responsive: [
        // 	{
        // 		breakpoint: 768,
        // 		settings: {
        // 			slidesToShow: 1
        // 		}
        // 	}
        // 	]
        // });
        // Gallery Slider For Mobile JS End

        // Team Slider For Mobile JS Start
        // $('.team-slider').slick({
        // 	infinite: true,
        // 	slidesToShow: 2,
        // 	slidesToScroll: 1,
        // 	prevArrow: false,
        // 	nextArrow: false,
        // 	dots: true,
        // 	autoplay: true,
        // 	autoplaySpeed: 2000,	
        // 	responsive: [
        // 	{
        // 		breakpoint: 768,
        // 		settings: {
        // 			slidesToShow: 1
        // 		}
        // 	}
        // 	]
        // });
        // Team Slider For Mobile JS End

        // Plan Slider For Mobile JS Start
        // $('.plan-slider').slick({
        // 	infinite: true,
        // 	slidesToShow: 2,
        // 	slidesToScroll: 1,
        // 	prevArrow: false,
        // 	nextArrow: false,
        // 	dots: true,
        // 	autoplay: true,
        // 	autoplaySpeed: 2000,	
        // 	responsive: [
        // 	{
        // 		breakpoint: 768,
        // 		settings: {
        // 			slidesToShow: 1
        // 		}
        // 	}
        // 	]
        // });
        // Plan Slider For Mobile JS End
    }


    $(".main-tab").click(function(){
        $(".main-tab").removeClass('tab-active');
        $(this).addClass('tab-active');
        var child_tab = jQuery(this).attr('data-child-tab');
        $(".tab-box").hide();
        $("."+child_tab).show();
    });

    $(".themes-tab-box li.link-item").click(function(){
        $(".themes-tab-box li.link-item").removeClass('active');
        $(this).addClass('active');
        var list_child_tab = jQuery(this).attr('data-child-tab');
        $(".tab-box-inner").hide();
        $(".tab-box-inner."+list_child_tab).show();
    });

    

});