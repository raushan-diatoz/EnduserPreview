$(document).ready(function () {
	"use strict"; // start of use strict

	/*==============================
	Menu
	==============================*/
	$('.header__btn').on('click', function() {
		$(this).toggleClass('header__btn--active');
		$('.header__nav').toggleClass('header__nav--active');
		$('.body').toggleClass('body--active');

		if ($('.header__search-btn').hasClass('active')) {
			$('.header__search-btn').toggleClass('active');
			$('.header__search').toggleClass('header__search--active');
		}
	});
	
	/*==============================
	Search
	==============================*/
	$('.header__search-btn').on('click', function() {
		$(this).toggleClass('active');
		$('.header__search').toggleClass('header__search--active');

		if ($('.header__btn').hasClass('header__btn--active')) {
			$('.header__btn').toggleClass('header__btn--active');
			$('.header__nav').toggleClass('header__nav--active');
			$('.body').toggleClass('body--active');
		}
	});
	$('#myOverlay').on('click', function() {
		$('.header__search-btn').removeClass('active');
		$('.header__search').removeClass('header__search--active');
});
	/*==============================
	Home
	==============================*/
	$('.home__bg').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		mouseDrag: false,
		touchDrag: false,
		items: 1,
		dots: false,
		loop: true,
		autoplay: false,
		smartSpeed: 600,
		margin: 0,
	});

	$('.home__bg .item').each( function() {
		if ($(this).attr("data-bg")){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

	$('.home__carousel').owlCarousel({
		stagePadding: 30,
		loop: false,
		margin: 8,
		stagePadding: 40,
		pagination: false,
		dots: false,
		autoplay:true,
		responsive : {
			0 : {
				items: 2,
			},
			576 : {
				items: 2,
			},
			768 : {
				items: 4,
			},
			992 : {
				items: 5,
			},
			1200 : {
				items: 6,
			},
		}
	});

	


	$('.home__nav--next').on('click', function() {
		$('.home__carousel, .home__bg').trigger('next.owl.carousel');
	});
	$('.home__nav--prev').on('click', function() {
		$('.home__carousel, .home__bg').trigger('prev.owl.carousel');
	});
	
	
	
	$(window).on('resize', function() {
		var itemHeight = $('.home__bg').height();
		$('.home__bg .item').css("height", itemHeight + "px");
	});
	$(window).trigger('resize');

	/*==============================
	Tabs
	==============================*/
	$('.content__mobile-tabs-menu li').each( function() {
		$(this).attr('data-value', $(this).text().toLowerCase());
	});

	$('.content__mobile-tabs-menu li').on('click', function() {
		var text = $(this).text();
		var item = $(this);
		var id = item.closest('.content__mobile-tabs').attr('id');
		$('#'+id).find('.content__mobile-tabs-btn input').val(text);
	});

	/*==============================
	Section bg
	==============================*/
	$('.section--bg, .details__bg').each( function() {
		if ($(this).attr("data-bg")){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

	/*==============================
	Filter
	==============================*/
	$('.filter__item-menu li').each( function() {
		$(this).attr('data-value', $(this).text().toLowerCase());
	});

	$('.filter__item-menu li').on('click', function() {
		var text = $(this).text();
		var item = $(this);
		var id = item.closest('.filter__item').attr('id');
		$('#'+id).find('.filter__item-btn input').val(text);
	});





	var siteCarousel = function () {

		if ( $('.hero-slide').length > 0 ) {
			$('.hero-slide').owlCarousel({
				items: 1,
				loop: true,
				margin: 0,
				autoplay: true,
				nav: true,
				dots: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
				smartSpeed: 1000
			});
		}

		if ( $('.owl-slide-3').length > 0 ) {
			$('.owl-slide-3').owlCarousel({
				center: false,
				items: 1,
				loop: true,
				stagePadding: 0,
				margin: 30,
				autoplay: true,
				smartSpeed: 500,
				nav: true,
				dots: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
				responsive:{
					600:{
						items: 2
					},
					1000:{
						items: 2
					},
					1200:{
						items: 3
					}
				}
			});
		}

		if ( $('.owl-slide').length > 0 ) {
			$('.owl-slide').owlCarousel({
			center: false,
			items: 2,
			loop: true,
				stagePadding: 0,
			margin: 30,
			autoplay: true,
			nav: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
			responsive:{
			600:{
				
				nav: true,
			  items: 2
			},
			1000:{
				
				stagePadding: 0,
				nav: true,
			  items: 2
			},
			1200:{
				
				stagePadding: 0,
				nav: true,
			  items: 2
			}
			}
			});
		}


		if ( $('.nonloop-block-14').length > 0 ) {
			$('.nonloop-block-14').owlCarousel({
			center: false,
			items: 1,
			loop: true,
				stagePadding: 0,
			margin: 0,
			autoplay: true,
			nav: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
			responsive:{
			600:{
				margin: 20,
				nav: true,
			  items: 2
			},
			1000:{
				margin: 30,
				stagePadding: 0,
				nav: true,
			  items: 2
			},
			1200:{
				margin: 30,
				stagePadding: 0,
				nav: true,
			  items: 3
			}
			}
			});
		}

		$('.slide-one-item').owlCarousel({
			center: false,
			items: 1,
			loop: true,
			stagePadding: 0,
			margin: 0,
			autoplay: true,
			pauseOnHover: false,
			nav: true,
			navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
		});
	};
	siteCarousel();

	// var header = document.getElementById("head_nav");
	// var btns = header.getElementsByClassName("header__nav-link");
	// for (var i = 0; i < btns.length; i++) {
	// 	btns[i].addEventListener("click", function () {
	// 		var current = document.getElementsByClassName("active_2");
	// 		current[0].className = current[0].className.replace(" active_2", "");
	// 		this.className += " active_2";
	// 	});
	// }
/*==============================
News Slide
==============================*/
	// siteSliderRange();



	var siteCarousel = function () {

		if ( $('.hero-slide').length > 0 ) {
			$('.hero-slide').owlCarousel({
				items: 1,
				loop: true,
				margin: 0,
				autoplay: true,
				nav: true,
				dots: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
				smartSpeed: 1000
			});
		}

		if ( $('.owl-slide-3').length > 0 ) {
			$('.owl-slide-3').owlCarousel({
				center: false,
				items: 1,
				loop: true,
				stagePadding: 0,
				margin: 30,
				autoplay: true,
				smartSpeed: 500,
				nav: true,
				dots: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
				responsive:{
					600:{
						items: 2
					},
					1000:{
						items: 2
					},
					1200:{
						items: 3
					}
				}
			});
		}

		if ( $('.owl-slide').length > 0 ) {
			$('.owl-slide').owlCarousel({
			center: false,
			items: 2,
			loop: true,
				stagePadding: 0,
			margin: 30,
			autoplay: true,
			nav: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
			responsive:{
			600:{
				
				nav: true,
			  items: 2
			},
			1000:{
				
				stagePadding: 0,
				nav: true,
			  items: 2
			},
			1200:{
				
				stagePadding: 0,
				nav: true,
			  items: 2
			}
			}
			});
		}


		if ( $('.nonloop-block-14').length > 0 ) {
			$('.nonloop-block-14').owlCarousel({
			center: false,
			items: 1,
			loop: true,
				stagePadding: 0,
			margin: 0,
			autoplay: true,
			nav: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
			responsive:{
			600:{
				margin: 20,
				nav: true,
			  items: 2
			},
			1000:{
				margin: 30,
				stagePadding: 0,
				nav: true,
			  items: 2
			},
			1200:{
				margin: 30,
				stagePadding: 0,
				nav: true,
			  items: 3
			}
			}
			});
		}

		$('.slide-one-item').owlCarousel({
			center: false,
			items: 1,
			loop: true,
			stagePadding: 0,
			margin: 0,
			autoplay: true,
			pauseOnHover: false,
			nav: true,
			navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
		});
	};
	siteCarousel();











	/*==============================
	Scroll bar
	==============================*/
	$('.scrollbar-dropdown').mCustomScrollbar({
		axis: "y",
		scrollbarPosition: "outside",
		theme: "custom-bar"
	});

	$('.accordion').mCustomScrollbar({
		axis: "y",
		scrollbarPosition: "outside",
		theme: "custom-bar2"
	});

	/*==============================
	Morelines
	==============================*/
	$('.card__description--details').moreLines({
		linecount: 6,
		baseclass: 'b-description',
		basejsclass: 'js-description',
		classspecific: '_readmore',
		buttontxtmore: "",
		buttontxtless: "",
		animationspeed: 400
	});

	/*==============================
	Gallery
	==============================*/
	var initPhotoSwipeFromDOM = function(gallerySelector) {
		// parse slide data (url, title, size ...) from DOM elements 
		// (children of gallerySelector)
		var parseThumbnailElements = function(el) {
			var thumbElements = el.childNodes,
				numNodes = thumbElements.length,
				items = [],
				figureEl,
				linkEl,
				size,
				item;

			for(var i = 0; i < numNodes; i++) {

				figureEl = thumbElements[i]; // <figure> element

				// include only element nodes 
				if(figureEl.nodeType !== 1) {
					continue;
				}

				linkEl = figureEl.children[0]; // <a> element

				size = linkEl.getAttribute('data-size').split('x');

				// create slide object
				item = {
					src: linkEl.getAttribute('href'),
					w: parseInt(size[0], 10),
					h: parseInt(size[1], 10)
				};

				if(figureEl.children.length > 1) {
					// <figcaption> content
					item.title = figureEl.children[1].innerHTML; 
				}

				if(linkEl.children.length > 0) {
					// <img> thumbnail element, retrieving thumbnail url
					item.msrc = linkEl.children[0].getAttribute('src');
				} 

				item.el = figureEl; // save link to element for getThumbBoundsFn
				items.push(item);
			}

			return items;
		};

		// find nearest parent element
		var closest = function closest(el, fn) {
			return el && ( fn(el) ? el : closest(el.parentNode, fn) );
		};

		// triggers when user clicks on thumbnail
		var onThumbnailsClick = function(e) {
			e = e || window.event;
			e.preventDefault ? e.preventDefault() : e.returnValue = false;

			var eTarget = e.target || e.srcElement;

			// find root element of slide
			var clickedListItem = closest(eTarget, function(el) {
				return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
			});

			if(!clickedListItem) {
				return;
			}

			// find index of clicked item by looping through all child nodes
			// alternatively, you may define index via data- attribute
			var clickedGallery = clickedListItem.parentNode,
				childNodes = clickedListItem.parentNode.childNodes,
				numChildNodes = childNodes.length,
				nodeIndex = 0,
				index;

			for (var i = 0; i < numChildNodes; i++) {
				if(childNodes[i].nodeType !== 1) { 
					continue; 
				}

				if(childNodes[i] === clickedListItem) {
					index = nodeIndex;
					break;
				}
				nodeIndex++;
			}

			if(index >= 0) {
				// open PhotoSwipe if valid index found
				openPhotoSwipe( index, clickedGallery );
			}
			return false;
		};

		// parse picture index and gallery index from URL (#&pid=1&gid=2)
		var photoswipeParseHash = function() {
			var hash = window.location.hash.substring(1),
			params = {};

			if(hash.length < 5) {
				return params;
			}

			var vars = hash.split('&');
			for (var i = 0; i < vars.length; i++) {
				if(!vars[i]) {
					continue;
				}
				var pair = vars[i].split('=');  
				if(pair.length < 2) {
					continue;
				}           
				params[pair[0]] = pair[1];
			}

			if(params.gid) {
				params.gid = parseInt(params.gid, 10);
			}

			return params;
		};

		var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
			var pswpElement = document.querySelectorAll('.pswp')[0],
				gallery,
				options,
				items;

			items = parseThumbnailElements(galleryElement);

			// define options (if needed)
			options = {

				// define gallery index (for URL)
				galleryUID: galleryElement.getAttribute('data-pswp-uid'),

				getThumbBoundsFn: function(index) {
					// See Options -> getThumbBoundsFn section of documentation for more info
					var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
						pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
						rect = thumbnail.getBoundingClientRect(); 

					return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
				}

			};

			// PhotoSwipe opened from URL
			if(fromURL) {
				if(options.galleryPIDs) {
					// parse real index when custom PIDs are used 
					// http://photoswipe.com/documentation/faq.html#custom-pid-in-url
					for(var j = 0; j < items.length; j++) {
						if(items[j].pid == index) {
							options.index = j;
							break;
						}
					}
				} else {
					// in URL indexes start from 1
					options.index = parseInt(index, 10) - 1;
				}
			} else {
				options.index = parseInt(index, 10);
			}

			// exit if index not found
			if( isNaN(options.index) ) {
				return;
			}

			if(disableAnimation) {
				options.showAnimationDuration = 0;
			}

			// Pass data to PhotoSwipe and initialize it
			gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
			gallery.init();
		};

		// loop through all gallery elements and bind events
		var galleryElements = document.querySelectorAll( gallerySelector );

		for(var i = 0, l = galleryElements.length; i < l; i++) {
			galleryElements[i].setAttribute('data-pswp-uid', i+1);
			galleryElements[i].onclick = onThumbnailsClick;
		}

		// Parse URL and open gallery if it contains #&pid=3&gid=1
		var hashData = photoswipeParseHash();
		if(hashData.pid && hashData.gid) {
			openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
		}
	};
	// execute above function
	initPhotoSwipeFromDOM('.gallery');

	/*==============================
	Player
	==============================*/
	function initializePlayer() {
		if ($('#player').length) {
			const player = new Plyr('#player');
		
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializePlayer());

	/*==============================
	Range sliders
	==============================*/
	/*1*/
	function initializeFirstSlider() {
		if ($('#filter__years').length) {
			var firstSlider = document.getElementById('filter__years');
			noUiSlider.create(firstSlider, {
				range: {
					'min': 2000,
					'max': 2018
				},
				step: 1,
				connect: true,
				start: [2005, 2015],
				format: wNumb({
					decimals: 0,
				})
			});
			var firstValues = [
				document.getElementById('filter__years-start'),
				document.getElementById('filter__years-end')
			];
			firstSlider.noUiSlider.on('update', function( values, handle ) {
				firstValues[handle].innerHTML = values[handle];
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializeFirstSlider());

	/*2*/
	function initializeSecondSlider() {
		if ($('#filter__imbd').length) {
			var secondSlider = document.getElementById('filter__imbd');
			noUiSlider.create(secondSlider, {
				range: {
					'min': 0,
					'max': 10
				},
				step: 0.1,
				connect: true,
				start: [2.5, 8.6],
				format: wNumb({
					decimals: 1,
				})
			});

			var secondValues = [
				document.getElementById('filter__imbd-start'),
				document.getElementById('filter__imbd-end')
			];

			secondSlider.noUiSlider.on('update', function( values, handle ) {
				secondValues[handle].innerHTML = values[handle];
			});

			$('.filter__item-menu--range').on('click.bs.dropdown', function (e) {
				e.stopPropagation();
				e.preventDefault();
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializeSecondSlider());

	/*3*/
	function initializeThirdSlider() {
		if ($('#slider__rating').length) {
			var thirdSlider = document.getElementById('slider__rating');
			noUiSlider.create(thirdSlider, {
				range: {
					'min': 0,
					'max': 10
				},
				connect: [true, false],
				step: 0.1,
				start: 8.6,
				format: wNumb({
					decimals: 1,
				})
			});

			var thirdValue = document.getElementById('form__slider-value');

			thirdSlider.noUiSlider.on('update', function( values, handle ) {
				thirdValue.innerHTML = values[handle];
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializeThirdSlider());
});


(function(a){a.createModal=function(b){defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);
