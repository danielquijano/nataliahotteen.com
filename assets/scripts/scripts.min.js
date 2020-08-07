$(document).ready(function () {
	// on ready events


	// carousel - add active class
	$(function() {
		$('.carousel-item:first-child').addClass('active');
	})


	// warningModal function: launch a modal with a warning message
	function WarningModal() {
		'use strict';

		// if is not 'warning-modal' cookie then show modal
		if (!sessionStorage.getItem('warning-modal')) {
			$('.js-warning-modal').modal({
				backdrop: 'static',
				keyboard: false
			}, 'show');

			$('.modal-backdrop').addClass('modal-backdrop-gradient');

			// on click events
			$('.js-warning-modal [data-dismiss=modal]').on('click', function () {
				// set 'warning-modal' true
				sessionStorage.setItem('warning-modal', true);

				// remove modal gradient
				$('.modal-backdrop').removeClass('modal-backdrop-gradient');

				// toggleClass function on top menu
				ToggleClass();

				// cookieAlert function
				CookieAlert();
			});
		}

		else {
			// toggleClass function
			ToggleClass();

			// cookieAlert function
			CookieAlert();
		}
	};

	// launch warning modal function
	WarningModal();


	// toggle class function: Add-remove tada effect on top menu
	function ToggleClass() {
		'use strict';

		setInterval(function () {
			$('.navbar-nav  > .nav-item:nth-child(2) > .nav-link').toggleClass('animate__animated animate__tada');
		}, 2500);
	};


	// cookie alert function: show alert on bottom
	function CookieAlert() {
		'use strict';

		// if not set cookie-alert then show alert
		if (!sessionStorage.getItem('cookie-alert')) {
			setInterval(function () {
				$('.js-cookie-alert').addClass('show');
			}, 3000);

			$('.js-cookie-alert [data-dismiss=alert]').on('click', function () {
				// set cookie-alert true
				sessionStorage.setItem('cookie-alert', true);
			});
		}

		else {
			$('.js-cookie-alert [data-dismiss=alert]').alert('close');
		}
	};
});


// form validation
(function() {
	'use strict';
	window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('js-form-validation');
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
