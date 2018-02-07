jQuery(document).ready(function(){
  $('#scroll').on('click', function (e) {
    e.preventDefault;
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });    

  $(window).on('scroll', function(){
    if($(document).scrollTop() > 15){
      $('#header-nav').addClass('scrolled');
    }
    else{
      $('#header-nav').removeClass('scrolled');
    }

    $('.sign-type').each(function(){
      var top_of_element = $(this).offset().top;
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if(bottom_of_window > top_of_element){
        $(this).addClass('fade-in-up');
      }
      else{
        $(this).removeClass('fade-in-up');
      }
    });
  });

  if(typeof $.fn.lightSlider == 'function'){
    var productGallery = $('#vehicle-wraps .light-slider').lightSlider({
      gallery: true,
      item: 1,
      loop: true,
      thumbItem: 8,
      responsive: [{
        breakpoint:768,
        settings:{
          thumbItem:4
        }
      }]
    });

    $('#products-gallery a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      if(typeof productGallery.goToSlide == 'function'){
        productGallery.destroy();
      }
      var tabId = $(this).attr('href');
      productGallery = $(tabId + ' .light-slider').lightSlider({
        gallery: true,
        item: 1,
        loop:true,
        thumbItem:8,
        responsive:[{
          breakpoint:768,
          settings:{
            thumbItem:4
          }
        }]
      });
    });
  }

  function randomInterval(min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  $('#work-feedback .carousel').each(function(index){
    $(this).carousel({
      interval: randomInterval(4000, 6000)
    });
  })
});