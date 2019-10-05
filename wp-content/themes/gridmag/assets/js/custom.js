jQuery(document).ready(function($) {

    if(gridmag_ajax_object.secondary_menu_active){

    $(".gridmag-nav-secondary .gridmag-secondary-nav-menu").addClass("gridmag-secondary-responsive-menu");

    $(".gridmag-secondary-responsive-menu-icon").click(function(){
        $(this).next(".gridmag-nav-secondary .gridmag-secondary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".gridmag-nav-secondary .gridmag-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".gridmag-secondary-responsive-menu > li").removeClass("gridmag-secondary-menu-open");
        }
    });

    $(".gridmag-secondary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('gridmag-submenu-toggle').parent().toggleClass("gridmag-secondary-menu-open");
        $(this).find(".children:first").toggleClass('gridmag-submenu-toggle').parent().toggleClass("gridmag-secondary-menu-open");
    });

    $("div.gridmag-secondary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('gridmag-submenu-toggle').parent().toggleClass("gridmag-secondary-menu-open");
    });

    }

    if(gridmag_ajax_object.primary_menu_active){

    if(gridmag_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var gridmagstickyNavTop = $('.gridmag-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var gridmagstickyNav = function(){
        var gridmagscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(gridmag_ajax_object.sticky_menu_mobile){
            if (gridmagscrollTop > gridmagstickyNavTop) {
                $('.gridmag-primary-menu-container').addClass('gridmag-fixed');
            } else {
                $('.gridmag-primary-menu-container').removeClass('gridmag-fixed');
            }
        } else {
            if(window.innerWidth > 1112) {
                if (gridmagscrollTop > gridmagstickyNavTop) {
                    $('.gridmag-primary-menu-container').addClass('gridmag-fixed');
                } else {
                    $('.gridmag-primary-menu-container').removeClass('gridmag-fixed'); 
                }
            }
        }
    };

    gridmagstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        gridmagstickyNav();
    });
    }

    //$(".gridmag-nav-primary .gridmag-primary-nav-menu").addClass("gridmag-primary-responsive-menu").before('<div class="gridmag-primary-responsive-menu-icon"></div>');
    $(".gridmag-nav-primary .gridmag-primary-nav-menu").addClass("gridmag-primary-responsive-menu");

    $(".gridmag-primary-responsive-menu-icon").click(function(){
        $(this).next(".gridmag-nav-primary .gridmag-primary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".gridmag-nav-primary .gridmag-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".gridmag-primary-responsive-menu > li").removeClass("gridmag-primary-menu-open");
        }
    });

    $(".gridmag-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('gridmag-submenu-toggle').parent().toggleClass("gridmag-primary-menu-open");
        $(this).find(".children:first").toggleClass('gridmag-submenu-toggle').parent().toggleClass("gridmag-primary-menu-open");
    });

    $("div.gridmag-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('gridmag-submenu-toggle').parent().toggleClass("gridmag-primary-menu-open");
    });

    }

    $(".gridmag-social-icon-search").on('click', function (e) {
        e.preventDefault();
        document.getElementById("gridmag-search-overlay-wrap").style.display = "block";
    });

    $(".gridmag-search-closebtn").on('click', function (e) {
        e.preventDefault();
        document.getElementById("gridmag-search-overlay-wrap").style.display = "none";
    });

    $(".post").fitVids();

    var scrollButtonEl = $( '.gridmag-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.gridmag-scroll-top' ).fadeOut();
        } else {
            $( '.gridmag-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if(gridmag_ajax_object.sticky_sidebar){
    $('.gridmag-main-wrapper, .gridmag-sidebar-one-wrapper').theiaStickySidebar({
        containerSelector: ".gridmag-content-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 890,
    });
    }

    // init Masonry
    var $gridmag_grid = $('.gridmag-posts').masonry({
      itemSelector: '.gridmag-grid-post',
      columnWidth: gridmag_ajax_object.columnwidth,
      gutter: gridmag_ajax_object.gutter,
      percentPosition: true
    });
    // layout Masonry after each image loads
    $gridmag_grid.imagesLoaded().progress( function() {
      $gridmag_grid.masonry('layout');
    });

});