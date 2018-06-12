$(function() {
	var serviceList=$('.service-list');
	var topCities=$('.top-cities .slides');
	
	$('.like').click(function() {
		$(this).toggleClass('liked');
	});
	
	$('.megamenuLink').click(function() {
		$('.megamenu:visible').not($(this).siblings('.megamenu')).fadeOut();
		if($(window).width() < 1441) {
			$(this).siblings('.megamenu').addClass('narrow');
		}
		$(this).toggleClass('expanded');
		$(this).siblings('.megamenu').fadeToggle();
	});
	
	if($.fn.iCheck) {
		$('#content').iCheck({
			handle: 'checkbox',
			labelHover: false,
			cursor: true
		});
	}
	
	$(document).on('click',function(event) { 
		if(!($(event.target).parents('.megamenuHolder').length)   ) {
			if($('.megamenu').is(":visible")) {
				$('.megamenu').fadeOut();
				$('.megamenuLink').removeClass('expanded');
			}
		} 
	});
	
	if($.fn.gmap3) {
		$('div[data-latlong]').each(function() {
			var $t=$(this), latlong=$t.data('latlong'), title=$t.data('title');
			var mvalues= (typeof(markerValues) === "undefined") ? []  : markerValues
						
			$(this).gmap3({
				map:{
					options:{
					 center:latlong,
					 zoom:12,
					 mapTypeId: google.maps.MapTypeId.TERRAIN,
					 mapTypeControl: true,
					 mapTypeControlOptions: {
					   style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
					 },
					 navigationControl: true,
					 scrollwheel: true,
					 streetViewControl: true
					}
				 },
				 marker:{
					values: mvalues,
					options:{
					  draggable: false,
					  icon: "images/map-icon.png",
					  optimized: false 
					},
					events:{
					  mouseover: function(marker, event, context){
						var map = $(this).gmap3("get"),
						  infowindow = $(this).gmap3({get:{name:"infowindow"}});
						if (infowindow){
						  infowindow.setOptions({maxWidth:500});
						  infowindow.open(map, marker);
						  $(infowindow).prev().hide();
						  infowindow.setContent(context.data);
						  
						} else {
						  $(this).gmap3({
							infowindow:{
							  anchor:marker, 
							  options:{content: context.data}
							}
						  });
						}
						marker.setIcon('images/map-icon-hover.png');
					  },
					  mouseout: function(marker, event, context){
						var infowindow = $(this).gmap3({get:{name:"infowindow"}});
						if (infowindow){
						  infowindow.close();
						}

						marker.setIcon('images/map-icon.png');
					  }
					}
				}
				
				
				
				
				
				
			});	
			
		});
	}	
	
	
	$('.popup').each(function() {
		var $t = $(this), innerH=$('.inner', $t).height(), half= innerH / 2;
		$t.show();
		var popupH = innerH;
		$t.css('margin-top', - half);
		$t.hide().css('opacity','1');
	});
	
	$('.popup-trigger').click(function() {
		var target = this.href.split("#")[1];
		$('.popup:visible').fadeOut('normal',function() { $(this).removeClass('showing') });
		$('#'+target).addClass('showing').fadeIn();
		$('#overlay').fadeIn();
		if($(window).width() < 766) {
			$('#navigations').fadeOut();
			$('#navTrigger').removeClass('active');
		}
		return false;
	});
	
	$('.floor-plans dt').click(function() {
		$(this).toggleClass('active').siblings('dt').removeClass('active');
		$(this).next('dd').slideToggle().siblings('dd').slideUp();
	});
	
	$('.popup .close').click(function() {
		$(this).parents('.popup:first').fadeOut('normal', function() { $(this).removeClass('showing') });
		$('#overlay').fadeOut();
	});
	
	$('#signup-switcher a').on('click',function() {
		$('#signUp-popup').show(0).animate({
			opacity: 1,
			marginLeft: '-220px'
		},500);
		$('#signIn-popup').show(0).animate({
			opacity: 0,
			marginLeft: '-520px'
		},500,function() {
			$('#signIn-popup').css({'margin-left':'', 'opacity':''}).hide(0).removeClass('showing');
		})
	});
	
	$('#signin-switcher a').on('click',function() {
		$('#signIn-popup').show(0).animate({
			opacity: 1,
			marginLeft:  '-220px'
		},500);
		$('#signUp-popup').show(0).animate({
			opacity: 0,
			marginLeft: '-520px'
		},500,function() {
			$('#signUp-popup').css({'margin-left':'', 'opacity':''}).hide(0).removeClass('showing');
		})
	});
	
	$('.tabs a').click(function(ev) {
		var ref=this.href.split("#")[1];
		ev.preventDefault();
		$(this).parent().addClass('active').siblings().removeClass('active');
		$('#'+ref).fadeIn().siblings('.tab-content:visible').hide(0);
	});
	
	if($.fn.fancySelect) {
		$("select").fancySelect();
	}
	
	headerTransit();
	$(window).scroll(function(){
		headerTransit();
	});
	
	slider(serviceList, topCities);
	
	$(window).resize(function() {
		slider(serviceList, topCities);
		headerTransit();
	});
	
	$('#overlay').click(function() {
		$('.popup:visible, #overlay').fadeOut('normal', function() { $(this).removeClass('showing') });
	});
	
	/*mobile animated burger menu icon*/
	$('#navTrigger').click(function() {
		$(this).toggleClass('active');
		$('#navigations').fadeToggle();
	});
	
	/*mobile animated map burger menu icon*/
	$('.mapTrigger-wrapper').click(function() {
		$('#mapTrigger').toggleClass('active');
		$('.map-options').fadeToggle();
	});
	
	if($.fn.flexslider) {
		$('.similar-list').flexslider({
				controlNav: false,
				animation: 'slide',
				slideshow: false,
				animationLoop:false,
				itemWidth:160,
				itemMargin:20
			});
			
		$('#bigpicSlider').flexslider({
			width:515,
			animation: 'slide',
			sync: "#thumbs", 
			slideshow:false,
			controlNav: false,

		});	
		
		$('#thumbs').flexslider({
			minItem:4,
			move:1, 
			itemWidth: 100,
			itemMargin: 12,
			animation: 'slide',
			slideshow:false,
			asNavFor: '#bigpicSlider',

			controlNav: false,
			before:function(slider) {
				var ind=slider.currentSlide+1;
				$('#bigpicSlider').data("flexslider").flexAnimate(ind);
			}
		});	
		
		if(jQuery.isFunction( datepickr )) {
			datepickr('#calendar');
		}
	}
	
	$('#search-trigger').click(function() {
		$('#content .filter-heading').slideToggle();
	});
	
	
	
	$('#book-show').click(function() {
		$('.checkAvailability1').hide();
		$('.checkAvailability2').fadeIn();
	});
	
	
	var fixed = $("#map"), pos = fixed.offset();
	$(window).scroll(function() {
		var docH=$(document).height() / 2;

		if($(this).scrollTop() > (pos.top + 10) && fixed.css('position') == 'relative' && $(this).scrollTop() < (docH - 261)) { fixed.addClass('fixed'); }
		else if( $(this).scrollTop() > (docH - 261) ) { fixed.removeClass('fixed') }
		else if($(this).scrollTop() <= pos.top && fixed.hasClass('fixed')){ fixed.removeClass('fixed') }
	});
	
});

function headerTransit() {
	if($('body').width() > 766) {
		if($(window).scrollTop()>50) {
			$('#header').addClass('smaller');
			$('.popup').addClass('shifted');
		}
		else {
			$('#header').removeClass('smaller');
			$('.popup').removeClass('shifted');
		}
	}
}

function slider(serviceList, topCities) {
	if($('body').width() < 700) {
		if($.fn.flexslider) {
			$('.service-list-wrapper, .top-cities-wrapper').flexslider({
				controlNav: false,
				animation: 'slide',
				slideshow: false,
				animationLoop:false
			});
		}
	}
	else {
		if($('.flex-viewport').length) {
			flexdestroy('.service-list-wrapper')
			flexdestroy('.top-cities-wrapper')
		}
	}

}



function flexdestroy(selector) {
  var el = $(selector);
  var elClean = el.clone();

  elClean.find('.flex-viewport').children().unwrap();
  elClean
    .removeClass('flexslider')
    .find('.clone, .flex-direction-nav, .flex-control-nav')
      .remove()
      .end()
    .find('*').removeAttr('style').removeClass (function (index, css) {
      return (css.match (/\bflex\S+/g) || []).join(' ');
    });  

  elClean.insertBefore(el);
  el.remove();        
}
  