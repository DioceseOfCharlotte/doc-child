jQuery(document).ready(function($) {

	function navMenu() {

		var parishToggle = $('#parish-toggle');
		var dpcToggle = $('#dpc-toggle');
		var schoolsToggle = $('#schools-toggle');
		var searchToggle = $('#search-toggle');

		var schoolsNav = $('#schools-toggle-nav');
		var parishNav = $('#parishes-toggle-nav');
		var searchNav = $('#search-toggle-nav');
		var dpcNav = $('#dpc-toggle-nav');

		function scrollTop() {
			$( 'body,html' ).animate( {
				scrollTop: 0
			}, 400 );
		}

		function myToggleClass( $myvar ) {
			if ( $myvar.hasClass( 'active' ) ) {
				$myvar.removeClass( 'active' );
			} else {
				$myvar.addClass('active');
			}
		}

		// Display/hide sidebar
		parishToggle.on('click', function() {
			parishNav.slideToggle();
			myToggleClass($(this));
			scrollTop();

			schoolsNav.hide();
			dpcNav.hide();
			searchNav.hide();

			searchToggle.removeClass('active');
			dpcToggle.removeClass('active');
			schoolsToggle.removeClass('active');
		});
		// Display/hide social links
		schoolsToggle.on('click', function() {
			schoolsNav.slideToggle();
			myToggleClass($(this));
			scrollTop();

			dpcNav.hide();
			searchNav.hide();
			parishNav.hide();

			searchToggle.removeClass('active');
			dpcToggle.removeClass('active');
			parishToggle.removeClass('active');
		});
		// Display/hide menu
		dpcToggle.on('click', function() {
			dpcNav.slideToggle();
			myToggleClass($(this));
			scrollTop();

			searchNav.hide();
			parishNav.hide();
			schoolsNav.hide();

			searchToggle.removeClass('active');
			parishToggle.removeClass('active');
			schoolsToggle.removeClass('active');
		});
		// Display/hide search
		searchToggle.on('click', function() {
			searchNav.slideToggle();
			myToggleClass($(this));
			scrollTop();

			parishNav.hide();
			schoolsNav.hide();
			dpcNav.hide();

			parishToggle.removeClass('active');
			dpcToggle.removeClass('active');
			schoolsToggle.removeClass('active');
		});
	}
	$(window).on('load', navMenu);
} );