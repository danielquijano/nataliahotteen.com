<script>
	$(document).ready(function(){
		// On ready events
		// WarningModal function
		function WarningModal(){
			'use strict';

			// Owl Carousel setup
			var owl = $('.owl-carousel');
			owl.owlCarousel({
				autoplay: false,
				autoplayTimeout: 4000,
				autoplayHoverPause: false,
				loop: true,
				dots: false,
				pagination: false,
				autoHeight: false,
				autoHeightClass: 'owl-height',
				autoWidth: 0,
				responsive: {
					0: { items: 1 },
					576: { items: 2 },
					768: { items: 3 },
					1200: { items: 4 },
					1500: { items: 5 }
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

					// LazyLoading function
					LazyLoading();

					// CookieAlert function
					CookieAlert();
				});
			}

			else{
				// OwlCarousel play
				owl.trigger('play.owl.autoplay',[4000])

				// ToggleClass function
				ToggleClass();

				// LazyLoading function
				LazyLoading();

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

		// LazyLoading function: for better ux
		function LazyLoading(){
			$('.lazy').Lazy({
				bind: "event",
				effect: "fadeIn",
				effectTime: 500
			});
		}

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
	});



	// Front-end form validation
	'use strict';

	window.addEventListener('load', function(){
		var returnForms = document.querySelectorAll('.jquey-form-validation');
		var validation = Array.prototype.filter.call(returnForms, function(form){
			form.addEventListener('submit', function(event){
				if (form.checkValidity() === false){
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
</script>