/*
 Normalize Carousel Heights - pass in Bootstrap Carousel items. https://coderwall.com/p/uf2pka/normalize-twitter-bootstrap-carousel-slide-heights
*/
$.fn.carouselHeights = function () {
  var items = $(this), //grab all slides
    heights = [], //create empty array to store height values
    tallest; //create variable to make note of the tallest slide

  var normalizeHeights = function () {
    items.each(function () { //add heights to array
      heights.push($(this).height());
    });
    tallest = Math.max.apply(null, heights); //cache largest value
    items.each(function () {
      $(this).css('min-height', tallest + 'px');
    });
  };

  normalizeHeights();

  $(window).on('resize orientationchange', function () {
    //reset vars
    tallest = 0;
    heights.length = 0;

    items.each(function () {
      $(this).css('min-height', '0'); //reset min-height
    });
    normalizeHeights(); //run it again 
  });
};

jQuery(document).ready(function(){
  $('#scroll').on('click', function (e) {
    e.preventDefault;
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 100
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

      if(bottom_of_window > top_of_element - 150){
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
  });

  $('.google-map').each(function () {
    map = new_map($(this));
  });

  $('#testimonial-carousel .carousel-inner .item').carouselHeights();
});

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/
function new_map($el) {
  // var
  var $markers = $el.find('.marker');
  // vars
  var args = {
    zoom: 16,
    center: new google.maps.LatLng(0, 0),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  // create map	        	
  var map = new google.maps.Map($el[0], args);

  // add a markers reference
  map.markers = [];
  // add markers
  $markers.each(function () {
    add_marker($(this), map);
  });

  // center map
  center_map(map);

  // return
  return map;
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/
function add_marker($marker, map) {
  // var
  var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

  // create marker
  var marker = new google.maps.Marker({
    position: latlng,
    map: map
  });

  // add to array
  map.markers.push(marker);

  // if marker contains HTML, add it to an infoWindow
  if ($marker.html()) {
    // create info window
    var infowindow = new google.maps.InfoWindow({
      content: $marker.html(),
      //pixelOffset: new google.maps.Size(-200, 150)
    });

    // show info window when marker is clicked
    google.maps.event.addListener(marker, 'click', function () {
      infowindow.open(map, marker);
    });
    //infowindow.open(map,marker);
  }
}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/
function center_map(map) {
  // vars
  var bounds = new google.maps.LatLngBounds();

  // loop through all markers and create bounds
  $.each(map.markers, function (i, marker) {
    var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
    bounds.extend(latlng);
  });

  // only 1 marker?
  if (map.markers.length == 1) {
    // set center of map
    map.setCenter(bounds.getCenter());
    map.setZoom(16);
  }
  else {
    // fit to bounds
    map.fitBounds(bounds);
  }

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;