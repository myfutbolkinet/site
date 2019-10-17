/* -------------------------------------------------------------
  Initializing the plugins we use and our little functions ;-)
-------------------------------------------------------------- */ 
'use strict';

// page loader


$(document).ready(function(){

    // scroll to top after refresh
    $('html, body').animate({scrollTop: $('#page-content').offset().top});

    // page loaded class 
    setTimeout(function(){
      $('#page-content').addClass('page-loaded');
      $('.overlay').slideUp('slow');
    }, 2000);

  	// adding background from html
	  $.each($('[data-bg]'), function(){
        if ($(this).attr('data-bg').length > 0){
          $(this).css('background-image', 'url('+ $(this).attr('data-bg') +')');
        }
    });

    // main menu btn toggle class
    $('#menuSwitch').on('click', function(){
    	$('.nav-showcase').toggleClass('is-open');
    	$('.menu-item-dropdown').removeClass('dropdown-open');
    });

    // cart view toggle class
    $('.cart-lnk').on('click', function(e){
      e.preventDefault();
      $('.cart-showcase').toggleClass('viewCart');
    });

    // scroll to div after timeout.
    if ($('.showcase').width() > 0) {
    	setTimeout(function() {
    	    $('html, body').animate({
    		    scrollTop: $('#content-grid').offset().top
    		}, 'slow');
    	}, 3000);
      setTimeout(function() {
        $('.nav-showcase, .navbar').addClass('inView');
      }, 2500);
    }

	// oppening dropdown menu
	$('.menu-item-dropdown .btn').on('click', function(e){
		e.preventDefault();
		$(this).parent().toggleClass('dropdown-open');
		$(this).parent().siblings().removeClass('dropdown-open');
		// change signs (+ / -)
		$(this).find('span').text(function(i, v){
            return v === '+' ? '-' : '+'
        });
        $(this).parent().siblings().find('.btn span').text(function(i, v){
            return v === '-' ? '+' : '+'
        });
	});

  // dropdown menu functionality form mobile only
  $('.navbar-toggle').on('click', function(){
    $('.navbar').toggleClass('is-open');
  });

  // activate jquery isotope 
  if ($('#category-block').width() > 0) {
    var $container = $('#category-block').isotope({
      itemSelector : '.cat-item',
      isFitWidth: true,
      percentPosition: true,
    });
  }

  // 
  if ($('.masonry-gallery').width() > 0) {
    var $container = $('.masonry-gallery').isotope({
      itemSelector : '.item',
      isFitWidth: true,
      percentPosition: true,
      masonry: {
        gutter: 25
      }
    });
  }

  // instgram lightbox
  $('.popup-lnk').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1]
    }
  });

  // product page product carousel
  if ($('.product-slider').width() > 0) {
    $('.product-slider').owlCarousel({
      items: 1,
      dots: true,
      loop: true,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true
    });
  };

  // testimonials carousel
  if ($('.testimonials-carousel').width() > 0) {
    $('.testimonials-carousel').owlCarousel({
      items: 1,
       dots: true,
       loop: true,
        nav: true,
        navContainer: '.carousel-nav',
        navText: ['<span><i class="fa fa-angle-left"></i></span>','<span><i class="fa fa-angle-right"></i></span>'],
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    });
  };

  // change opacity to 'text-bg' and add class to navbar product
  if ( jQuery('.product-bg').width() > 0 ) { 
    var bg_parent = $('.product-bg');
    var range = 90;

    $(window).on('scroll', function () {
      
        var scrollTop = $(this).scrollTop();
        var offset = bg_parent.offset().top;
        var height = bg_parent.outerHeight();
        offset = offset + height / 3 ;
        var calc = 1 - (scrollTop - offset + range) / range;
      
        if ( calc > '1' ) {
          $('.top-product-details').removeClass('slideUp');
          $('.text-bg').css({ 'color' : 'rgba(255,255,255, .2)' });
          $('.text-bg').css({ 'background' : '#dde9ea' });
          $('.product-slider').removeClass('colored');
        } else if ( calc < '0' ) {
          $('.top-product-details').addClass('slideUp');
          $('.text-bg').css({ 'color' : 'rgba(255,255,255, 0)' });
          $('.text-bg').css({ 'background' : '#fff' });
          $('.product-slider').addClass('colored');
        }
    });
  }

  // super slim menu scrollspy for product page
  if ($('.product-nav').width() > 0) {
      var lastId,
      topMenu = $(".product-nav ul.list-inline"),
      topMenuHeight = topMenu.outerHeight()+15,
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });
      menuItems.click(function(e){
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top;
        $('html, body').stop().animate({ 
            scrollTop: offsetTop
        }, 500);
        e.preventDefault();
      });
      // Bind to scroll
      $(window).scroll(function(){
         // Get container scroll position
         var fromTop = $(this).scrollTop()+topMenuHeight;
         // Get id of current scroll item
         var cur = scrollItems.map(function(){
           if ($(this).offset().top < fromTop)
             return this;
         });
         // Get the id of the current element
         cur = cur[cur.length-1];
         var id = cur && cur.length ? cur[0].id : "";
         if (lastId !== id) {
             lastId = id;
             // Set/remove active class
             menuItems
               .parent().removeClass("active")
               .end().filter("[href='#"+id+"']").parent().addClass("active");
         }                   
      });
    }

  // close menu and cart sidebar clicked on desktop
  $(window).click(function() {
    $('.cart-showcase').removeClass('viewCart');
    $('.nav-showcase').removeClass('is-open');
  });

  $('.nav-controls, .menu-content, .cart-wrapp, .cart-show').click(function(event){
      event.stopPropagation();
  });

  //price range in categories.html
    if ($('#price-range').length == 1) {
      $(function() {
          $( "#price-range" ).slider({
            range: true,
            min: 0,
            max: 499,
            values: [ 20, 199 ],
            slide: function( event, ui ) {
              $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
          });
          $( "#amount" ).val( "$" + $( "#price-range" ).slider( "values", 0 ) +
            " - $" + $( "#price-range" ).slider( "values", 1 ) );
      });
    }

  //open categories filters sidebar in ctegories.html
  if ($('.category-filters').width() > 0) {
    $('.filters-btn').on('click', function(){
      $('#filters-sidebar').toggleClass('opened');
      $('.product-nav').toggleClass('paddedRight');
    });
  }

  // change checkboxes state
  function changeState(el) {
    if (el.readOnly) el.checked=el.readOnly=false;
    else if (!el.checked) el.readOnly=el.indeterminate=true;
  }

  // scroll to #content-grid home_v2.html
  $("#scroll_next").click(function() {
    $('html, body').animate({
        scrollTop: $("#home2Anchor").offset().top
    }, 1400);
  });


});
// <!-- end document ready -->
  
// calculate divs height home_v2.html
  $('.home_prod_bg').each(function(){
    $(this).css('height', $(this).parent().find('.products-container').outerHeight() + 2);
  });

// product page fixed product bg with carousel function
  if ( $('.product-bg').width() > 0 ) { 
      $.fn.stickyTopBottom = function(options) {
        var $el, container_top, current_translate, element_top, last_viewport_top, viewport_height, oldSidebarState, sidebarState;
        if (options == null) {
          options = {};
        }

        options = $.extend({
          container: $('body'),
          top_offset: 0,
          bottom_offset: 0
        }, options);

        $el = $(this);
        container_top = options.container.offset().top;
        element_top = $el.offset().top;
        viewport_height = $(window).height();

        $(window).on('resize', function() {
          return viewport_height = $(window).height();
        });

        current_translate = 0;
        last_viewport_top = document.documentElement.scrollTop || document.body.scrollTop;

        sidebarState = 0;

        if( $el.find(".showcase-scroll").height() < options.container.height() ) {

          return $(window).on('scroll', function(event) {

            var container_bottom, 
              effective_viewport_bottom, 
              effective_viewport_top, 
              element_fits_in_viewport, 
              element_height, 
              is_scrolling_up, 
              new_translation, 
              viewport_bottom, 
              viewport_top;

            viewport_top = document.documentElement.scrollTop || document.body.scrollTop;

            viewport_bottom = viewport_top + viewport_height;
            effective_viewport_top = viewport_top + options.top_offset;
            effective_viewport_bottom = viewport_bottom - options.bottom_offset;
            element_height = $el.height();
            is_scrolling_up = false;

            if(viewport_top < last_viewport_top) {
              is_scrolling_up = true;
            } else {
              is_scrolling_up = false;
            }

            element_fits_in_viewport = $el.find(".showcase-scroll").height() < viewport_height;

            new_translation = null;

            if (is_scrolling_up) {

              sidebarState = "start slide top";

              var element_top_position = $el.find(".showcase-scroll").offset().top;

              if (effective_viewport_top < container_top) {

                  new_translation = 0;

                  sidebarState = "top limit stop";

                } else if( effective_viewport_top < element_top_position ) {

                sidebarState = "top limit fixed";

              } 

            } else if (element_fits_in_viewport) {

              container_top = options.container.offset().top;
                container_bottom = container_top + options.container.height();

                if (effective_viewport_top > element_top + current_translate) {

                  new_translation = effective_viewport_top - element_top;

                  sidebarState = "top limit fixed";

                } 

                if (effective_viewport_bottom > container_bottom) {

                  new_translation = container_bottom - (element_top + element_height);

                  sidebarState = "bottom limit stop";

                }

            } else {

              sidebarState = "start slide down";

              container_top = options.container.offset().top;
                container_bottom = container_top + options.container.height();
                var element_bottom_position = $el.find(".showcase-scroll").offset().top + $el.find(".showcase-scroll").height();

                if (effective_viewport_bottom > container_bottom) {

                  new_translation = container_bottom - (element_top + element_height);

                  sidebarState = "bottom limit stop";

                } else if (effective_viewport_bottom > (element_bottom_position) ) {

                  new_translation = effective_viewport_bottom - (element_top + element_height);

                  sidebarState = "bottom limit fixed";

                }

            }

            if (new_translation !== null) {
                current_translate = new_translation;
            }

            if( sidebarState != oldSidebarState ) {

                if( sidebarState == "bottom limit fixed" ) {

                  $el.find(".showcase-scroll").css( 'width', $el.width() );
                  $el.find(".showcase-scroll").css( 'position', 'fixed' )
                  $el.find(".showcase-scroll").css( 'top', 'auto' );
                  $el.find(".showcase-scroll").css( 'bottom', 'auto' );
                  $el.find(".showcase-scroll").css( 'z-index', '1' );

                } else if( sidebarState == "top limit fixed" ) {

                  $el.find(".showcase-scroll").css( 'width', $el.width() );
                  $el.find(".showcase-scroll").css( 'position', 'fixed' )
                  $el.find(".showcase-scroll").css( 'top', 'auto' );
                  $el.find(".showcase-scroll").css( 'bottom', 'auto' );
                  $el.find(".showcase-scroll").css( 'z-index', '1' );

                } else if( sidebarState == "start slide top") {

                  var offset_element = $el.find(".showcase-scroll").offset().top;
                  var offset_container = options.container.offset().top;

                  $el.find(".showcase-scroll").css( 'width', $el.width() );
                  $el.find(".showcase-scroll").css( 'top', offset_element - offset_container + 'px' );
                  $el.find(".showcase-scroll").css( 'position', 'absolute' );
                  $el.find(".showcase-scroll").css( 'bottom', 'auto' );
                  $el.find(".showcase-scroll").css( 'z-index', '1' );

                } else if( sidebarState == "start slide down") {

                  if( oldSidebarState == "top limit fixed" || container_top < element_top_position ) {

                    var offset_element = $el.find(".showcase-scroll").offset().top;
                    var offset_container = options.container.offset().top;

                    $el.find(".showcase-scroll").css( 'width', $el.width() );
                    $el.find(".showcase-scroll").css( 'top', offset_element - offset_container + 'px');
                    $el.find(".showcase-scroll").css( 'position', 'absolute' );
                    $el.find(".showcase-scroll").css( 'bottom', 'auto' );
                    $el.find(".showcase-scroll").css( 'z-index', '1' );
                  }

                } else if( sidebarState == "bottom limit stop") {

                  container_top = options.container.offset().top;
                  var container_height = options.container.height();

                  $el.find(".showcase-scroll").css( 'width', $el.width() );
                  $el.find(".showcase-scroll").css( 'top', container_height - $el.find(".showcase-scroll").height() + 'px' );
                  $el.find(".showcase-scroll").css( 'position', 'absolute' );
                  $el.find(".showcase-scroll").css( 'bottom', 'auto' );
                  $el.find(".showcase-scroll").css( 'z-index', '1' );

                } else if( current_translate == 0 ){
                  $el.find(".showcase-scroll").css( 'width', $el.width() );
                  $el.find(".showcase-scroll").css( 'position', 'fixed' )
                  $el.find(".showcase-scroll").css( 'top', 'auto' );
                  $el.find(".showcase-scroll").css( 'bottom', 'auto' );
                  $el.find(".showcase-scroll").css( 'z-index', '1' );
                }

                oldSidebarState = sidebarState;

              }

            return last_viewport_top = viewport_top;

          });
      
      }

    };

    if ($(window).width() > 1023) {
      $('.product-bg').stickyTopBottom({
          container: $('.product-showcase')
      });
    }
}

