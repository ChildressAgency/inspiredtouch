jQuery(document).ready(function($){
  //nav menu
  $('#showNav').on('click', function(){
    $('.nav-menu').toggleClass('open');
    $(this).toggleClass('open');
  });
  
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
    var tabName = e.target.hash;
    //console.log(tabName);
    if($('#about .tab-content .tab-pane').css('height') == '500px'){
      $('html, body').animate({
        scrollTop: $(tabName).offset().top -25
      }, 1000);
      return false;
    }
  });
  
  $(window).scroll(function(){
    if($(document).scrollTop() > 1){
      $('header .phone').addClass('black-bg');
    }
    else{
      $('header .phone').removeClass('black-bg');
    }
  });
  
  $('nav.nav-menu a').on('click', function(e){
    e.preventDefault();
    var target = $(this.hash);
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 1000);
    return false;
  });
  
  $('.acf-map').each(function(){
		// create map
		map = new_map($(this));
	});

  $('#trailerTruck a').on('click', function(e){
    e.preventDefault();
    $.swipebox(trailer_truck_gallery.fields);
  });
  $('#fleet a').on('click', function(e){
    e.preventDefault();
    $.swipebox(fleet_gallery);
  });
  $('#specialtyColor a').on('click', function(e){
    e.preventDefault();
    $.swipebox(specialty_color_gallery);
  });
  $('#commercial a').on('click', function(e){
    e.preventDefault();
    $.swipebox(commercial_gallery);
  });
  $('#recreational a').on('click', function(e){
    e.preventDefault();
    $.swipebox(recreational_gallery);
  });
  $('#boats a').on('click', function(e){
    e.preventDefault();
    $.swipebox(boats_gallery);
  });
  
  $('#light-slider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    thumbItem: 5,
    responsive: [{
      breakpoint:768,
      settings: {
        thumbItem:3
      }
    }]
  });
  
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

function new_map( $el ) {
	// var
	var $markers = $el.find('.marker');
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	// add a markers reference
	map.markers = [];
	// add markers
	$markers.each(function(){
    	add_marker( $(this), map );
	});
	
	// center map
	center_map( map );
	
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

function add_marker( $marker, map ) {
	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});
	// add to array
	map.markers.push( marker );
	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
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

function center_map( map ) {
	// vars
	var bounds = new google.maps.LatLngBounds();
	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
		bounds.extend( latlng );
	});
	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
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