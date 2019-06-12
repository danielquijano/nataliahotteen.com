$(document).ready(function(){
	// On ready events
	// WarningModal function
	function WarningModal(){
		'use strict';

		// Owl Carousel setup
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			loop: true,
			margin: 0,

			autoplay: false,
			autoplayTimeout: 4000,
			autoplayHoverPause: false,
	
			nav: false,
			dots: false,
			pagination: false,

			autoHeight: true,
			autoWidth: 0,

			responsive:{
				0:{
					items: 1,
				},
				576:{
					items: 2,
				},
				768:{
					items: 3,
				},
				992:{
					items: 4,
				},
				1200:{
					items: 4,
				}
			}
		});

		// If is not 'warning-modal' cookie show modal
		if(!sessionStorage.getItem('warning-modal')){
			$('.jquery-warning-modal').modal({
				backdrop: 'static',
				keyboard: false
			}, 'show');

			// On click events
			$('.jquery-warning-modal [data-dismiss=modal]').on('click', function(){
				// Set 'warning-modal' true
				sessionStorage.setItem('warning-modal', true);

				// OwlCarousel play
				owl.trigger('play.owl.autoplay',[4000]);

				// ToggleClass function
				ToggleClass();

				// CookieAlert function
				CookieAlert();
			});
		}

		else{
			// OwlCarousel play
			owl.trigger('play.owl.autoplay',[4000])

			// ToggleClass function
			ToggleClass();

			// CookieAlert function
			CookieAlert();
		}
	};

	// ToggleClass function: Add:remove tada effect
	function ToggleClass(){
		'use strict';

		setInterval(function(){
			$('.navbar-nav  > .nav-item:nth-child(2) > .nav-link').toggleClass('animated tada');
		}, 2500);
	};

	// CookieAlert function
	function CookieAlert(){
		'use strict';

		// If not 'cookie-alert' show alert
		if(!sessionStorage.getItem('cookie-alert')){
			setInterval(function(){
				$('.jquery-cookie-alert').addClass('show');
			}, 500);

			$('.jquery-cookie-alert [data-dismiss=alert]').on('click', function(){
				// Set 'cookie-alert' true
				sessionStorage.setItem('cookie-alert', true);
			});
		}

		else{
			$('.jquery-cookie-alert [data-dismiss=alert]').alert('close');
		}
	};

	// Warning Modal function
	WarningModal();


	// LazyLoading function: for better ux
	function LazyLoading(){
		$('.lazy').Lazy({
			bind: "event",
			effect: "fadeIn",
			effectTime: 500
		});
	}

	LazyLoading();
});


// Front-end form validation
(function() {
	'use strict';
	window.addEventListener('load', function() {
	  // Fetch all the forms we want to apply custom Bootstrap validation styles to
	  var forms = document.getElementsByClassName('jquey-form-validation');
	  // Loop over them and prevent submission
	  var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
		  if (form.checkValidity() === false) {
			event.preventDefault();
			event.stopPropagation();
		  }
		  form.classList.add('was-validated');
		}, false);
	  });
	}, false);
})();