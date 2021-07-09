$(document).ready(function() {

    // Wow Animation JS Start
    new WOW().init();
    // Wow Animation JS End

    // Search JS Start
    $(".search-input").on('click', function() {
        $(".form-item").toggleClass('active');
    });
    // Search JS End

    // Link Copy Start
    $(".toolbar-link-copy").on('click', function() {
        $(this).toggleClass('active');
    });
    // Link Copy End


    // Accordion JS End
    jQuery('.accordion .faq-content').hide();
    jQuery('.accordion > div:eq(0) h3').addClass('active-faq');
    jQuery('.accordion > div:eq(0) .faq-content').slideDown();

    jQuery('.accordion h3').click(function(j) {
        var dropDown = jQuery(this).closest('div').find('.faq-content');
        jQuery(this).closest('.accordion').find('.faq-content').not(dropDown).slideUp();
        if (jQuery(this).hasClass('active-faq')) {
            jQuery(this).removeClass('active-faq');
        } else {
            jQuery(this).closest('.accordion').find('h3.active-faq').removeClass('active-faq');
            jQuery(this).addClass('active-faq');
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });
    // Accordion JS End

    // Addlink JS Start
    jQuery(document).on('click', ".addlink-more-icon", function() {
        jQuery(".addlink-more").removeClass('active');
        if (jQuery(this).hasClass('active-more')) {
            jQuery(".addlink-more-icon").removeClass('active-more');
        } else {
            jQuery(this).addClass('active-more');
            jQuery(this).parent().addClass('active');
        }
    });

    $(".addlink-more-box-btn").on('click', function() {
        $(this).toggleClass('active');
        $(".addlink-more-actions").toggleClass("active");
    });
    // Addlink JS End

    // Add New Module JS Start
    $(".add-module-plus-btn").on('click', function() {
        // $(this).toggleClass('active');
        $(".add-module-item").toggleClass('active');
        $(".add-new-modules-box").slideToggle("fast");
    });
    // Add New Module JS End



    // Sticky Header JS Start
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= 200) {
            $('.main-header').addClass('sticky-header');
        } else {
            $('.main-header').removeClass('sticky-header');
        }
    });
    // Sticky Header JS End

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


    $(".main-tab").click(function() {
        $(".main-tab").removeClass('tab-active');
        $(this).addClass('tab-active');
        var child_tab = jQuery(this).attr('data-child-tab');
        $(".tab-box").hide();
        $("." + child_tab).css('display', 'flex');
    });

    $(".themes-tab-box li.link-item").click(function() {
        $(".themes-tab-box li.link-item").removeClass('active');
        $(this).addClass('active');
        var list_child_tab = jQuery(this).attr('data-child-tab');
        $(".tab-inner-box").hide();
        $(".tab-inner-box." + list_child_tab).show();
    });

});