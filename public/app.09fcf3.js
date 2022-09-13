const header_swiper = new Swiper('.header-swiper', {
    autoplay: {
        delay: 5000,
    },
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      // when window width is >= 1024px
      1024: {
        autoHeight: true,
      }
    }
  
  });
  
  
  
  const sponsor_swiper = new Swiper('.sponsor-swiper', {
    autoplay: {
        delay: 5000,
    },
    // Optional parameters
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      // when window width is >= 1024px
      1024: {
        slidesPerView: 5,
        centeredSlides: true,
        centeredSlidesBounds: true,
      }
    }
  
  });
  
  jQuery(document).ready(function($) {
    //search form
    $('.close-form').click(function() {
        $('.search-menu').toggleClass('search-open');
        if (window.matchMedia('(max-width: 1023px)').matches) {
          $('.navbar-toggler, .site-logo').toggleClass('hide');
        }
        $('.top-bar .contact-menu, .top-bar .cta-button').toggleClass('hide');
        $('.close-form img').toggleClass('hide');
        $('.close-form i').toggleClass('show');
    });
  
  
    // Mobile Menu
    $(".navbar-toggler").on("click", function() {
      
      if ($('.sidenav, #main, body').hasClass('show')) {
          $('.sidenav, #main, body').removeClass('show');
          $('.menu-item-has-children').removeClass('menu-open');
          $('.menu-item-has-children').children('ul').slideUp(200);
      } else {
          $('.sidenav, #main, body').addClass('show');
      }
      if ($('.navbar-toggler').hasClass('open')) {
          $('.navbar-toggler').removeClass('open');
      } else {
          $('.navbar-toggler').addClass('open');
      }
      
      header_height = $('header').outerHeight();
      console.log(header_height);
      if ($('header').hasClass('header-fixed')) {
        $('header').removeClass('header-fixed');
        $('main').css('margin-top', '');
      } else {
        $('header').addClass('header-fixed');
        $('main').css('margin-top', header_height);
      }
    });
  
    // Notice header
    var InfoKey = 'notice_header',
    InfoHeader = $('#' + InfoKey),
    InfoCookie = InfoKey + '_cookie';
    if((Cookies.get(InfoCookie) !== '1')){
      jQuery('header .top-bar').css('display','block');
    }
    $(".top-bar .close").click(function() {
      $('.top-bar').hide();
      $('#main').removeClass('show-top-slider');
      heightNew = 108;
      $('.sidenav').css('top', heightNew);
  
      main_space = $('header').outerHeight();
      $('main').css('padding-top',main_space);
  
      if (Cookies.get(InfoCookie) !== '1') {
          Cookies.set(InfoCookie, '1');
      }
  
    });
  
    if (window.matchMedia('(max-width: 1023px)').matches) {
      if (Cookies.get(InfoCookie) == '1') {
        $('.top-bar').hide();
        $('#main').removeClass('show-top-slider');
        menu_height = $('.main-navigation').outerHeight();
        $('.sidenav').css('top', menu_height);
        main_space = $('header').outerHeight();
        $('main').css('padding-top',main_space);
        
      } else {
          $('.top-bar').show();
          $('#main').addClass('show-top-slider');
          main_space = $('header').outerHeight();
          $('main').css('padding-top',main_space);
          // set_height();
          setTimeout(set_height, 100);
      }
    }
  
    // function set_height() {
    //   heightt = $('.top-bar').outerHeight();
    //   // console.log(heightt);
    //   topp = 108;
    //   heightNew = heightt + topp;
    //   console.log(heightNew);
    //   $('.sidenav ').css('top', heightNew);
    // }
  
    function set_height() {
      heightt = $('.top-bar').outerHeight();
      if (heightt > 0) {
        heightt = heightt;
      }else{
        heightt = 0;
      }
      // console.log(heightt);
      topp = 108;
      heightNew = heightt + topp;
      console.log(heightNew);
      $('.sidenav').css('top', heightNew);
      // $('main').css('padding-top', heightt);
  
    }
  
    $(window).on('resize', function() {
      heightNew = '';
      if (Cookies.get(InfoCookie) != '1') {
          setTimeout(set_height, 100)
      }
      // location.reload();
    });
  
    
  
    //mobile sub-menu
    if (window.matchMedia('(max-width: 1023px)').matches) {
      $(".menu-item").removeClass("menu-open");
  
      $(".menu-item-has-children").click(function(event) {
        event.stopPropagation();
          var elem = $(this);
          if (elem.is('.menu-open')) {
              elem.children('ul').slideUp(200);
              elem.removeClass('menu-open');
          } else {
              $('.menu-item-has-children').removeClass('menu-open');
              $('.menu-item-has-children').children('ul').slideUp(200);
              elem.addClass('menu-open').children('ul').slideDown(200);
          }
      });
  
      $(document).click(function() {
          $('.menu-open').removeClass('menu-open');
      });
    }
  
    // gallery slider 
    
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 1,
      // freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper1 = new Swiper(".mySwiper1", {
      effect: "cards",
      grabCursor: true,
      thumbs: {
        swiper: swiper
      }
    });
  
  
    //single gallery
    var gallery_single_thumb = new Swiper(".gallery-single-thumb", {
      loop: false,
      spaceBetween: 15,
      // slidesPerView: 10,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
        // when window width is <= 767px
        320: {
            slidesPerView: 3,
        },
        1024: {
          slidesPerView: 10,
        },
      }
    });
    var gallery_single = new Swiper(".gallery-single", {
      loop: false,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: gallery_single_thumb,
      },
    });
  
    // form accordions
    
    if ($('.accordion-wrapper').length) {
      $(function() {
          var Accordion = function(el, multiple) {
              this.el = el || {};
              this.multiple = multiple || false;
  
              var links = this.el.find('.accordion-title');
              links.on('click', {
                  el: this.el,
                  multiple: this.multiple
              }, this.dropdown)
          }
  
          Accordion.prototype.dropdown = function(e) {
              var $el = e.data.el;
              var $this = $(this),
                  $next = $this.next();
  
              $next.slideToggle();
              $this.parent().toggleClass('active');
  
              if (!e.data.multiple) {
                  $el.find('.accordion-content').not($next).slideUp().parent().removeClass('active');
              };
          }
          var accordion = new Accordion($('.accordion-container'), false);
      });
      
      $(document).on('click', function(event) {
          if (!$(event.target).closest('#accordion').length) {
              $(this).parent().toggleClass('active');
          }
      });
    }
  
    $.fn.equalHeights = function(){
        var selector = this;
        var heights = [];
  
        // Save the heights of every element into an array
        selector.each(function(){
            var height = $(this).height();
            heights.push(height);
        });
  
        // Get the biggest height
        var maxHeight = Math.max.apply(null, heights);
  
        // Set the maxHeight to every selected element
        selector.each(function(){
            $(this).height(maxHeight);
        }); 
    };                             
    $('.blog-col p').equalHeights();
  
  
    // entry form totals
    function calculate_total(){
      var stalls = jQuery("input[name=stall-fee]").val();
      var rv = jQuery("input[name=rv-fee]").val();
      var entry_fee = 0;
      $('.entry-fee-field .wpcf7-field-group .wpcf7-form-control-wrap input[type=number]').each(function(index,item){
         var val = jQuery(this).val();
          if(val>0){
              entry_fee+=parseInt(val);
          }
      });
      
  
      var checkBoxTotal =0; 
      jQuery('.main-checkbox-label-col span.main-checkbox-value input[type=checkbox]').each(function(index,item){
        if(jQuery(this).is(':checked')){
            var name = jQuery(this).attr('name').replace('[]', '');
            var value = parseInt(jQuery('input[name='+name+'-value]').val());
            if(value>0){
                checkBoxTotal+=value;
                 var cls = jQuery(this).closest('.wpcf7-form-control-wrap').data('name');
                 if(cls){
                    var childClass = cls+'-child';
                     jQuery('.'+childClass+' input[type=checkbox]').each(function(index,item){
                            if(jQuery(this).is(':checked')){
  
                              var name2 = jQuery(this).attr('name').replace('[]', '');
                              var value2 = parseInt(jQuery('input[name='+name2+'-value]').val());
                              if(value2>0){
                                checkBoxTotal+=value2;
                              }
                            }
                     });
                 }   
  
            }
        }
  
      });
  
  
      var total = parseInt(rv) + parseInt(stalls) + parseInt(entry_fee) + parseInt(checkBoxTotal);
  
      var coma_total = (parseInt(total).toLocaleString("en-US")); 
      $("input[name=total").val(coma_total);
  
      
    }
    /*rv_total */
    function calculate_rv(){
      var rv1 = $("input[name=rv-nights-1]").val();
      var rv1_total = 0 ; 
      if(rv1>0){
          var amt_rv1 = $("[for=rv-nights-1]").data('amount');
          rv1_total = parseInt(amt_rv1) * parseInt(rv1);
      }
  
      var rv2 = $("input[name=rv-nights-2]").val();
      var rv2_total = 0;
      if(rv2>0){
          var amt_rv2 = $("[for=rv-nights-2]").data('amount');
          rv2_total = parseInt(amt_rv2) * parseInt(rv2);  
      }
      
      $("input[name=rv-fee]").val(rv1_total + rv2_total);
    }
  
    function calculate_stalls(){
      var stalls = $("input[name=stalls]").val();
      var amt = $("[for=stalls]").data('amount');
      var stalls_total = parseInt(amt) * parseInt(stalls);
      $("input[name=stall-fee]").val(stalls_total);
    }
  
    jQuery(document).on('keyup',".entry-fee",function(){
      $(this).on('change',function(){
        calculate_total();
      });
    });
  
    $(".accordion-container input[type=checkbox]").on('change',function(){
      calculate_total();
    });
  
    $(".entry-fee-field .wpcf7-field-group .wpcf7-form-control-wrap input[type=number]").each(function(index,item){
      $(this).on('change',function(){
      calculate_total();
    });
    });
  
    $("input.wpcf7-number").keyup(function(){
      calculate_stalls();
      calculate_rv();
      calculate_total();
    });
  
    $(".total-calculate").on('click',function(){
      console.log('total');
      calculate_total();
    });
  });