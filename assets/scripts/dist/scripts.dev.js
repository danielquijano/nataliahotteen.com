"use strict";

$(document).ready(function () {
  // on ready events
  // toggle class function: Add-remove tada effect on top menu
  function ToggleClass() {
    'use strict';

    setInterval(function () {
      $('.navbar-nav  > .nav-item:nth-child(2) > .nav-link').toggleClass('animated tada');
    }, 2500);
  }

  ; // cookie alert function: show alert on bottom

  function CookieAlert() {
    'use strict'; // if not set cookie-alert then show alert

    if (!sessionStorage.getItem('cookie-alert')) {
      setInterval(function () {
        $('.jquery-cookie-alert').addClass('show');
      }, 500);
      $('.jquery-cookie-alert [data-dismiss=alert]').on('click', function () {
        // set cookie-alert true
        sessionStorage.setItem('cookie-alert', true);
      });
    } else {
      $('.jquery-cookie-alert [data-dismiss=alert]').alert('close');
    }
  }

  ; // warningModal function: launch a modal with a warning message

  function WarningModal() {
    'use strict'; // if is not 'warning-modal' cookie then show modal

    if (!sessionStorage.getItem('warning-modal')) {
      $('.jquery-warning-modal').modal({
        backdrop: 'static',
        keyboard: false
      }, 'show');
      $('.modal-backdrop').addClass('modal-backdrop-gradient'); // on click events

      $('.jquery-warning-modal [data-dismiss=modal]').on('click', function () {
        // set 'warning-modal' true
        sessionStorage.setItem('warning-modal', true); // remove modal gradient

        $('.modal-backdrop').removeClass('modal-backgrop-gradient'); // toggleClass function on top menu

        ToggleClass(); // cookieAlert function

        CookieAlert();
      });
    } else {
      // toggleClass function
      ToggleClass(); // cookieAlert function

      CookieAlert();
    }
  }

  ; // launch warning modal function

  WarningModal(); // owl carousel function

  function OwlCarousel() {
    'use strict';

    $('.owl-carousel').owlCarousel({
      autoplay: true,
      autoplayTimeout: 4500,
      autoplayHoverPause: true,
      loop: true,
      dots: false,
      pagination: false,
      autoHeight: false,
      autoHeightClass: 'owl-height',
      autoWidth: 0,
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        768: {
          items: 3
        },
        1200: {
          items: 4
        },
        1500: {
          items: 5
        }
      }
    });
  }

  ; // launch owl carousel function

  OwlCarousel(); // LazyLoading function: for better ux

  /*
  function LazyLoading() {
  	$('.lazy').Lazy({
  		bind: "event",
  		effect: "fadeIn",
  		effectTime: 500
  	});
  }
  
  LazyLoading();
  */
});
/*
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
*/
//# sourceMappingURL=scripts.dev.js.map
