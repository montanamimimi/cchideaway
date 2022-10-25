import "../css/main.scss";

$(function() {
	
	// --------------------------------------------------------------------------
	// Mouse Follow
	// --------------------------------------------------------------------------

	const cursor = document.querySelector('.mouse-follow');

	const mouse = { x: -100, y: -100 }; // mouse pointer's coordinates
	const pos = { x: 0, y: 0 }; // cursor's coordinates
	const speed = 0.1; // between 0 and 1

	const updateCoordinates = e => {
		mouse.x = e.clientX;
		mouse.y = e.clientY;
	}

	window.addEventListener('mousemove', updateCoordinates);


	function getAngle(diffX, diffY) {
		return Math.atan2(diffY, diffX) * 180 / Math.PI;
	}

	function getSqueeze(diffX, diffY) {
		const distance = Math.sqrt(
			Math.pow(diffX, 2) + Math.pow(diffY, 2)
		);
		const maxSqueeze = 0.15;
		const accelerator = 1500;
		return Math.min(distance / accelerator, maxSqueeze);
	}


	const updateCursor = () => {

		const diffX = Math.round(mouse.x - pos.x);
		const diffY = Math.round(mouse.y - pos.y);
		
		pos.x += diffX * speed;
		pos.y += diffY * speed;
		
		const angle = getAngle(diffX, diffY);
		const squeeze = getSqueeze(diffX, diffY);
		
		const scale = 'scale(' + (1 + squeeze) + ', ' + (1 - squeeze) +')';
		const rotate = 'rotate(' + angle +'deg)';
		const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

		cursor.style.transform = translate;
	
	};

	function loop() {
		updateCursor();
		requestAnimationFrame(loop);
	}

	requestAnimationFrame(loop);

	$(document).on('mouseenter', 'a, button, input', function(){
		$('html').addClass('is-mouseenter');
	});

	$(document).on('mouseleave', 'a, button, input', function(){
		$('html').removeClass('is-mouseenter');
	});


	// --------------------------------------------------------------------------
	// Header Nav
	// --------------------------------------------------------------------------

	$(document).on('click', '.header__nav-toggle', function(event) {
		event.preventDefault();
		
		if( $('html').is('.is-nav-open') ) {
			$('html').removeClass('is-nav-open');

		} else {
			$('html').addClass('is-nav-open');
		}
	});

	$(document).on('click', function (event) {
		if ( $(event.target).closest('.header__nav').length === 0) {
			$('html').removeClass('is-nav-open');
		}
	});

	// --------------------------------------------------------------------------
	// Swiper
	// --------------------------------------------------------------------------

	var swiperTestimonials = new Swiper('.js-swiper-testimonials', {
		slidesPerView: 1,
		spaceBetween: 120,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		watchOverflow: true,
		loop: false,
		navigation: {
			nextEl: '.js-swiper-testimonials-next',
			prevEl: '.js-swiper-testimonials-prev',
		},
		pagination: {
			el: '.js-swiper-testimonials-pagination',
			type: 'bullets',
			clickable: true,
		},
		breakpoints: {
			992: {
				slidesPerView: 3,
				spaceBetween: 120,
			}
		}
	});

	// --------

	var swiperActivityOptions = {
		slidesPerView: 'auto',
		spaceBetween: 20,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		watchOverflow: true,
		loop: false,
		pagination: {
			el: '.js-swiper-activity-pagination',
			type: 'bullets',
			clickable: true,
		}
	};

	var swiperActivity = new Swiper('.js-swiper-activity', swiperActivityOptions);

	updateSwiperActivity();

	$(window).on('resize orientationchange', function(event) {
		updateSwiperActivity();
	});

	function updateSwiperActivity() {
		if ( $('.js-swiper-activity').length ) {
			if ( window.matchMedia('(min-width: 992px)').matches ) {
				swiperActivity.destroy(true, true);
				$('.js-swiper-activity').find('.swiper-slide').children().removeAttr('style');
				
			} else {
				swiperActivity.destroy(true, true);
				swiperActivity = new Swiper('.js-swiper-activity', swiperActivityOptions);
				
			}
		}
	}


	// --------


	var swiperTeam = new Swiper('.js-swiper-team', {
		slidesPerView: 1,
		spaceBetween: 120,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		watchOverflow: true,
		loop: false,
		navigation: {
			nextEl: '.js-swiper-team-next',
			prevEl: '.js-swiper-team-prev',
		},
		pagination: {
			el: '.js-swiper-team-pagination',
			type: 'bullets',
			clickable: true,
		},
		breakpoints: {
			992: {
				slidesPerView: 3,
				spaceBetween: 120,
			}
		}
	});


	// ---------

	let swiperGallerySlides = document.querySelectorAll('.js-swiper-gallery-slides');

	swiperGallerySlides.forEach(swiperElement => {

		var swiperThumbs = new Swiper(document.querySelector('.js-swiper-gallery-thumbs'), {
			spaceBetween: 16,
			slidesPerView: 'auto',
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
			watchOverflow: true,
			loop: false,
			breakpoints: {
				992: {
					spaceBetween: 20,
					slidesPerView: 3,
				}
			}
		});

		var swiperSlides = new Swiper(swiperElement, {
			spaceBetween: 20,
			slidesPerView: 1,
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
			watchOverflow: true,
			loop: true,
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			navigation: {
				nextEl: '.js-swiper-gallery-next',
				prevEl: '.js-swiper-gallery-prev',
			},
			pagination: {
				el: '.js-swiper-gallery-pagination',
				type: 'bullets',
				clickable: true,
			},
			thumbs: {
				swiper: swiperThumbs
			}
		});
	});

	// --------------------------------------------------------------------------
	// Isotope
	// --------------------------------------------------------------------------


	var AddMore = $('.js-isotope').isotope({
		itemSelector: '[class^="col-"]',
		layoutMode: 'packery',
	});


	// --------------------------------------------------------------------------
	// Datepicker
	// --------------------------------------------------------------------------


	

	// let dpMin, dpMax;

	// dpMin = new AirDatepicker('.js-datepicker-from', {
	// 	isMobile: true,
    // 	autoClose: true,
	// 	dateFormat: 'dd/MM',
	// 	locale: {
	// 		days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
	// 		daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	// 		daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
	// 		months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	// 		monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	// 		today: 'Today',
	// 		clear: 'Clear',
	// 		dateFormat: 'MM/dd/yyyy',
	// 		timeFormat: 'hh:mm aa',
	// 		firstDay: 0
	// 	},
	// 	onSelect({date}) {
	// 		dpMax.update({
	// 			minDate: date
	// 		})
	// 	}
	// })

	// dpMax = new AirDatepicker('.js-datepicker-to', {
	// 	isMobile: true,
    // 	autoClose: true,
	// 	dateFormat: 'dd/MM',
	// 	locale: {
	// 		days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
	// 		daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	// 		daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
	// 		months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	// 		monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	// 		today: 'Today',
	// 		clear: 'Clear',
	// 		dateFormat: 'MM/dd/yyyy',
	// 		timeFormat: 'hh:mm aa',
	// 		firstDay: 0
	// 	},
	// 	onSelect({date}) {
	// 		dpMin.update({
	// 			maxDate: date
	// 		})
	// 	}
	// })

	$('.js-datepicker').each(function( index ) {
		
		new AirDatepicker(this, {
			isMobile: true,
			autoClose: true,
			dateFormat: 'dd/MM',
			locale: {
				days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
				daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
				daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
				months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				today: 'Today',
				clear: 'Clear',
				dateFormat: 'MM/dd/yyyy',
				timeFormat: 'hh:mm aa',
				firstDay: 0
			},
			onSelect({date}) {
				
			}
		});

	});

	

	// --------------------------------------------------------------------------
	// Number
	// --------------------------------------------------------------------------


	$(document).on('click', '.ui-booking__increase', function(event) {
		event.preventDefault();
		
		var input = $(this).closest('.ui-booking__number').find('.ui-booking__input');
		var input_val = parseInt( input.val() );

		if ( input_val < 99) {
			input_val++
			input.val( input_val);
		}

		input.trigger('change');

	});

	$(document).on('click', '.ui-booking__decrease', function(event) {
		event.preventDefault();
		
		var input = $(this).closest('.ui-booking__number').find('.ui-booking__input');
		var input_val = parseInt( input.val() );

		if ( 0 < input_val ) {
			input_val--
			input.val( input_val);
		}

		input.trigger('change');

	});


	// -----------


	
	$(document).on('click', '.ui-number__increase', function(event) {
		event.preventDefault();
		
		var input = $(this).closest('.ui-number').find('.ui-number__input');
		var input_val = parseInt( input.val() );

		if ( input_val < 99) {
			input_val++
			input.val( input_val);
		}

		input.trigger('change');

	});

	$(document).on('click', '.ui-number__decrease', function(event) {
		event.preventDefault();
		
		var input = $(this).closest('.ui-number').find('.ui-number__input');
		var input_val = parseInt( input.val() );

		if ( 0 < input_val ) {
			input_val--
			input.val( input_val);
		}

		input.trigger('change');

	});

	

	// --------------------------------------------------------------------------
	// AOS
	// --------------------------------------------------------------------------

	AOS.init({
		disable: 'phone', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
		startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
		initClassName: 'aos-init', // class applied after initialization
		animatedClassName: 'aos-animate', // class applied on animation
		useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
		disableMutationObserver: false, // disables automatic mutations' detections (advanced)
		debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
		throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
		

		// Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
		offset: 120, // offset (in px) from the original trigger point
		delay: 0, // values from 0 to 3000, with step 50ms
		duration: 1000, // values from 0 to 3000, with step 50ms
		easing: 'ease', // default easing for AOS animations
		once: true, // whether animation should happen only once - while scrolling down
		mirror: false, // whether elements should animate out while scrolling past them
		anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
	});


	// --------------------------------------------------------------------------
	// Lazyload
	// --------------------------------------------------------------------------

	$('html').addClass('is-loaded');

});


